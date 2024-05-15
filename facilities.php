<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php require('inc/links.php'); ?>
  <title><?php echo $settings_r['site_title'] ?> - FACILITIES</title>
  <style>
    .pop:hover {
      border-top-color: var(--teal) !important;
      transform: scale(1.03);
      transition: all 0.3s;
    }
  </style>
</head>

<body class="bg-light">

  <?php require('inc/header.php'); ?>

  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">OUR FACILITIES</h2>
    <!-- <div class="h-line bg-dark"></div> -->
    <p class="text-center mt-3">
    Explore our range of facilities designed to make your stay comfortable and convenient!
    </p>
  </div>

  <div class="container">
    <div class="row">

      <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
          <div class="d-flex align-items-center mb-2">
            <img src="images/facilities/IMG_43553.svg" width="40px">
            <h5 class="m-0 ms-3">Wifi</h5>
          </div>
          <p> Enjoy seamless connectivity throughout your stay with our high-speed WiFi facility, ensuring you stay connected with ease. 
              Whether you're catching up on work or staying in touch with loved ones, our reliable WiFi ensures you never miss a beat. </p>
        </div>
      </div>
      <!-- <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
          <div class="d-flex align-items-center mb-2">
            <img src="images/facilities/IMG_27079.svg" width="40px">
            <h5 class="m-0 ms-3">Geyser</h5>
          </div>
          <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia commodi quisquam dolorum reiciendis blanditiis. Velit, cupiditate nesciunt numquam libero dolorem accusamus pariatur consequuntur sapiente, itaque in quae ipsum aspernatur consectetur. </p>
        </div>
      </div> -->
      <!-- <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
          <div class="d-flex align-items-center mb-2">
            <img src="images/facilities/IMG_41622.svg" width="40px">
            <h5 class="m-0 ms-3">Television</h5>
          </div>
          <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia commodi quisquam dolorum reiciendis blanditiis. Velit, cupiditate nesciunt numquam libero dolorem accusamus pariatur consequuntur sapiente, itaque in quae ipsum aspernatur consectetur. </p>
        </div>
      </div> -->
      <!-- <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
          <div class="d-flex align-items-center mb-2">
            <img src="images/facilities/IMG_47816.svg" width="40px">
            <h5 class="m-0 ms-3">SPA</h5>
          </div>
          <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia commodi quisquam dolorum reiciendis blanditiis. Velit, cupiditate nesciunt numquam libero dolorem accusamus pariatur consequuntur sapiente, itaque in quae ipsum aspernatur consectetur. </p>
        </div>
      </div> -->
      <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
          <div class="d-flex align-items-center mb-2">
            <img src="images/facilities/IMG_49949.svg" width="40px">
            <h5 class="m-0 ms-3 mb-2">Air Conditioner</h5>
          </div>
          <p>Beat the heat and stay cool during your stay with our efficient air conditioning facility. 
              Designed to provide ultimate comfort, our AC units ensure a refreshing atmosphere, 
              allowing you to relax and unwind after a long day of exploration or work. </p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
          <div class="d-flex align-items-center mb-2">
            <img src="images/facilities/parking.svg" width="40px">
            <h5 class="m-0 ms-3">Parking Space</h5>
          </div>
          <p> Our designated parking area offers ample space for your vehicle, 
            providing peace of mind for both short and long-term guests. 
            Enjoy hassle-free parking throughout your stay at RR Boys Hostel.</p>
        </div>
      </div>




    </div>
  </div>


  <?php require('inc/footer.php'); ?>

</body>

</html>