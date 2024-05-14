<?php

require('admin/inc/db_config.php');
require('admin/inc/essentials.php');

if (isset($_GET['id']) && isset($_GET['order_id'])) {

    //customer id
    $id = $_GET['id'];

    // esewa success token
    $data = $_GET['?data'];

    // decoding success token
    $decoded_data = base64_decode($data);

    // converting json to array
    $data_array = json_decode($decoded_data, true);
    // print_r($data_array);
    // echo $data_array['transaction_code'];
    $total_amount = $data_array['total_amount'];
    $transaction_uuid = $data_array['transaction_code'];

    // Extract order ID
    $order_id = $_GET['order_id'];

    // query to update booking status
    $query = "SELECT * FROM `booking_order` WHERE `user_id` = ? AND `order_id` = ?";
    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, 'is', $id, $order_id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);

    // Extract booking ID
    $booking_id = $row['booking_id'];

    // echo $booking_id;

    // Update booking order
    $transaction_uuid = mysqli_real_escape_string($con, $transaction_uuid); // Escape for security
    $total_amount = mysqli_real_escape_string($con, $total_amount); // Escape for security

    $query3 = "UPDATE `booking_order` SET 
    `trans_id` = '$transaction_uuid',
    `trans_amt` = '$total_amount',
    `trans_status` = 'TXN_SUCCESS',
    `booking_status` = 'booked',
    `trans_resp_msg` = 'Txn Success'
    WHERE `booking_id` = ?";
    $stmt2 = mysqli_prepare($con, $query3);
    mysqli_stmt_bind_param($stmt2, 'i', $booking_id);
    mysqli_stmt_execute($stmt2);

    // Close statement
    mysqli_stmt_close($stmt);
    mysqli_stmt_close($stmt2);

    header('Location: bookings.php?success=1');
} else {
    if (isset($_GET['order_id']) && isset($_GET['id']) && isset($_GET['?data']))
        echo "Invalid Request, Please contact support team";
    else
        redirect('index.php');
}
