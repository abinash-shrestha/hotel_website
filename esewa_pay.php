<?php

require('admin/inc/db_config.php');
require('admin/inc/essentials.php');

date_default_timezone_set("Asia/Kathmandu");

session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] == true)) {
    redirect('index.php');
}

if (isset($_POST['pay_now'])) {


    $ORDER_ID = 'ORD_' . uniqid();
    $CUST_ID = $_SESSION['uId'];
    $TXN_AMOUNT = $_SESSION['room']['payment'];
    $secret = "8gBm/:&EnhH.1/q";
    $transaction_uuid = uniqid(); // Generate a unique transaction ID
    $product_code = "EPAYTEST";
    $ss = 'total_amount=' . $TXN_AMOUNT . ',transaction_uuid=' . $transaction_uuid . ',product_code=' . $product_code;
    $hs = hash_hmac('sha256', $ss, $secret, true);

    $paramList = array();
    $paramList["product_code"] = $product_code;
    $paramList["order_id"] = $ORDER_ID;
    $paramList["customer_id"] = $CUST_ID;
    $paramList["total_amount"] = $TXN_AMOUNT;
    $paramList["transaction_uuid"] = $transaction_uuid;
    $paramList["amount"] = $TXN_AMOUNT;
    $paramList["tax_amount"] = 0;
    $paramList["success_url"] = "http://127.0.0.1/hbwebsite/success.php?id=" . $CUST_ID . "&order_id=" . $ORDER_ID . "&";
    $paramList["failure_url"] = "http://127.0.0.1/hbwebsite/failed.php";
    $paramList["signature"] = base64_encode($hs);


    // Create an array having all required parameters for creating checksum.

    // Insert payment data into database

    $frm_data = filteration($_POST);

    $query1 = "INSERT INTO `booking_order`(`user_id`, `room_id`, `check_in`, `check_out`,`order_id`) VALUES (?,?,?,?,?)";

    insert($query1, [
        $CUST_ID,
        $_SESSION['room']['id'],
        $frm_data['checkin'],
        $frm_data['checkout'],
        $ORDER_ID
    ], 'issss');

    $booking_id = mysqli_insert_id($con);

    $query2 = "INSERT INTO `booking_details`(`booking_id`, `room_name`, `price`, `total_pay`,
      `user_name`, `phonenum`, `address`) VALUES (?,?,?,?,?,?,?)";

    insert($query2, [
        $booking_id,
        $_SESSION['room']['name'],
        $_SESSION['room']['price'],
        $TXN_AMOUNT,
        $frm_data['name'],
        $frm_data['phonenum'],
        $frm_data['address']
    ], 'issssss');
} else {
    echo "Invalid Request!";
    redirect('index.php');
}

?>

<html>

<head>
    <title>Processing</title>
</head>

<body>

    <h1>Please do not refresh this page...</h1>

    <form method="post" action="https://rc-epay.esewa.com.np/api/epay/main/v2/form" name="f1">
        <?php
        foreach ($paramList as $name => $value) {
            echo '<input type="text" name="' . $name . '" value="' . $value . '" required hidden >';
        }
        ?>
        <input type="text" id="product_service_charge" name="product_service_charge" value="0" required hidden>
        <input type="text" id="product_delivery_charge" name="product_delivery_charge" value="0" required hidden>
        <input type="text" id="signed_field_names" name="signed_field_names" value="total_amount,transaction_uuid,product_code" required hidden>
    </form>


    <script type="text/javascript">
        document.f1.submit();
    </script>

</body>

</html>