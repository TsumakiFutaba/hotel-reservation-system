<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Palitan nyo na lang to ng title ng hotel naten !-->
    <title>Hotel Title - Home</title>

<!-- PHP REquirements for the links addons -->
 <?php require('inc/links.php'); ?>

<!-- SwiperJS addon -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

<!-- CSS styles -->
    <style>

        .availability-form{
          margin-top: -50px;
          z-index: 2;
          position: relative;
        }

         @media screen and (max-width: 575px) {
          .availability-form{
            margin-top: 0px;
            padding: 0 ;
          }
        }
    </style>
</head>
<body class="bg-light">


<!-- PHP Requirements for the Header -->
<?php require('inc/header.php'); ?> 

<!-- Image Swiper -->
<div class="container-fluid px-lg-4 mt-4">
 <div class="swiper swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="images/Carousel/01.png" class="w-100 d-block"/>
      </div>
      <div class="swiper-slide">
        <img src="images/Carousel/02.png" class="w-100 d-block"/>
      </div>
      <div class="swiper-slide">
        <img src="images/Carousel/03.png" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/Carousel/04.png" class="w-100 d-block"/>
      </div>
      <div class="swiper-slide">
        <img src="images/Carousel/05.png" class="w-100 d-block"/>
      </div>
      <div class="swiper-slide">
        <img src="images/Carousel/06.png" class="w-100 d-block"/>
      </div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>
</div>

<!-- Check Booking Availability -->
 <div class="container availability-form">
  <div class="row">
    <div class="col-lg-12 bg-white shadow p-4 rounded">
      <h5>Check Booking Availability</h5>
      <form>
        <div class="row align-items-end">
          <div class="col-lg-3 mb-3">
            <label class="form-label"style="font-weight 500;">Check-in</label>
            <input type="date" class="form-control shadow-none">
          </div>
          <div class="col-lg-3 mb-3">
            <label class="form-label"style="font-weight 500;">Check-out</label>
            <input type="date" class="form-control shadow-none">
          </div>
          <div class="col-lg-3 mb-3">
           <label class="form-label"style="font-weight 500;">Adult</label>
           <select class="form-select shadow-none">
             <option selected>Open this select menu</option>
             <option value="1">One</option>
             <option value="2">Two</option>
             <option value="3">Three</option>
            </select>
         </div>
         <div class="col-lg-2 mb-3">
           <label class="form-label"style="font-weight 500;">Children</label>
           <select class="form-select shadow-none">
             <option selected>Open this select menu</option>
             <option value="1">One</option>
             <option value="2">Two</option>
             <option value="3">Three</option>
            </select>
         </div>
         <div class="col-lg-1 mb-lg-3 mt-2">
          <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
         </div>
      </form>
    </div>
  </div>
 </div>

<!-- Rooms -->

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>

<!-- Types of Rooms -->
<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-6 my-3">
      <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
        <img src="images/Rooms/BG_Karaoke.jpg" class="card-img-top">    
        <div class="card-body">
          <h5>Simple Room Name</h5>
          <h6>₱250 per hour.</h6>
          <div class="features mb-4">
            <h6 class="mb-1>">Features</h6>
            <span class="badge rounded-pill bg-light text-dark text-warp">
              2 Rooms
            </span>
            <span class="badge rounded-pill bg-light text-dark text-warp">
              1 Bathroom
            </span>
            <span class="badge rounded-pill bg-light text-dark text-warp">
              1 Balcony
            </span>
            <span class="badge rounded-pill bg-light text-dark text-warp">
              3 Sofas
            </span>
          </div>
          <div class="facilities mb-4">
            <h6 class="mb-1>">Facilities</h6>
            <span class="badge rounded-pill bg-light text-dark text-warp">
              Wifi
            </span>
            <span class="badge rounded-pill bg-light text-dark text-warp">
              Televesion
            </span>
            <span class="badge rounded-pill bg-light text-dark text-warp">
              AC
            </span>
            <span class="badge rounded-pill bg-light text-dark text-warp">
              Room Heater
            </span>
          </div>
          <div class="guests mb-4">
            <h6 class="mb-1>">Guests</h6>
            <span class="badge rounded-pill bg-light text-dark text-warp">
              2 Adults
            </span>
            <span class="badge rounded-pill bg-light text-dark text-warp">
              2 Children
            </span>
          </div>
          <div class="rating mb-4">
            <h6 class="mb-1">Rating</h6>
            <span class="badge rounded-pill bg-light">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-half text-warning"></i>
            </span>
          </div>
          <div class="d-flex justify-content-evenly mb-2">
            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now!</a>
            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 my-3">
      <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
        <img src="images/Rooms/BG_Karaoke.jpg" class="card-img-top">    
        <div class="card-body">
          <h5>Simple Room</h5>
          <h6>₱250 per hour.</h6>
          <div class="features mb-4">
            <h6 class="mb-1>">Features</h6>
            <span class="badge rounded-pill bg-light text-dark text-warp">
              2 Rooms
            </span>
            <span class="badge rounded-pill bg-light text-dark text-warp">
              1 Bathroom
            </span>
            <span class="badge rounded-pill bg-light text-dark text-warp">
              1 Balcony
            </span>
            <span class="badge rounded-pill bg-light text-dark text-warp">
              3 Sofas
            </span>
          </div>
          <div class="facilities mb-4">
            <h6 class="mb-1>">Facilities</h6>
            <span class="badge rounded-pill bg-light text-dark text-warp">
              Wifi
            </span>
            <span class="badge rounded-pill bg-light text-dark text-warp">
              Televesion
            </span>
            <span class="badge rounded-pill bg-light text-dark text-warp">
              AC
            </span>
            <span class="badge rounded-pill bg-light text-dark text-warp">
              Room Heater
            </span>
          </div>
          <div class="guests mb-4">
            <h6 class="mb-1>">Guests</h6>
            <span class="badge rounded-pill bg-light text-dark text-warp">
              2 Adults
            </span>
            <span class="badge rounded-pill bg-light text-dark text-warp">
              2 Children
            </span>
          </div>
          <div class="rating mb-4">
            <h6 class="mb-1">Rating</h6>
            <span class="badge rounded-pill bg-light">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-half text-warning"></i>
            </span>
          </div>
          <div class="d-flex justify-content-evenly mb-2">
            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book now!</a>
            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 my-3">
      <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
        <img src="images/Rooms/BG_Karaoke.jpg" class="card-img-top">    
        <div class="card-body">
          <h5>Simple Room</h5>
          <h6>₱250 per hour.</h6>
          <div class="features mb-4">
            <h6 class="mb-1>">Features</h6>
            <span class="badge rounded-pill bg-light text-dark text-warp">
              2 Rooms
            </span>
            <span class="badge rounded-pill bg-light text-dark text-warp">
              1 Bathroom
            </span>
            <span class="badge rounded-pill bg-light text-dark text-warp">
              1 Balcony
            </span>
            <span class="badge rounded-pill bg-light text-dark text-warp">
              3 Sofas
            </span>
          </div>
          <div class="facilities mb-4">
            <h6 class="mb-1>">Facilities</h6>
            <span class="badge rounded-pill bg-light text-dark text-warp">
              Wifi
            </span>
            <span class="badge rounded-pill bg-light text-dark text-warp">
              Televesion
            </span>
            <span class="badge rounded-pill bg-light text-dark text-warp">
              AC
            </span>
            <span class="badge rounded-pill bg-light text-dark text-warp">
              Room Heater
            </span>
          </div>
          <div class="guests mb-4">
            <h6 class="mb-1>">Guests</h6>
            <span class="badge rounded-pill bg-light text-dark text-warp">
              2 Adults
            </span>
            <span class="badge rounded-pill bg-light text-dark text-warp">
              2 Children
            </span>
          </div>
          <div class="rating mb-4">
            <h6 class="mb-1">Rating</h6>
            <span class="badge rounded-pill bg-light">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-half text-warning"></i>
            </span>
          </div>
          <div class="d-flex justify-content-evenly mb-2">
            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book now!</a>
            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-12 text-center mt-5">
      <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >>></a>
    </div>
  </div>
</div>

<!-- Facilities -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>

<!-- Facilities Images -->
<div class="container">
  <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/Facilities/wifi.svg" width="80px">
      <h5 class="mt-3">Wifi</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/Facilities/wifi.svg" width="80px">
      <h5 class="mt-3">Wifi</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/Facilities/wifi.svg" width="80px">
      <h5 class="mt-3">Wifi</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/Facilities/wifi.svg" width="80px">
      <h5 class="mt-3">Wifi</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/Facilities/wifi.svg" width="80px">
      <h5 class="mt-3">Wifi</h5>
    </div>
    <div class="col-lg-12 text-center mt-5">
      <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities >>></a>
    </div>
  </div>
</div>

<!-- REVIEWS -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REVIEWS</h2>

<div class="container">
  <div class="swiper swiper-reviews">
    <div class="swiper-wrapper mb-5">

      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
          <img src="images/Facilities/star.svg" width="30px">
          <h6 class="m-0 ms-2">Random user1</h6>
         </div>
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
          Totam officia libero nihil nisi, error quisquam nam magnam, inventore ullam voluptatum minus suscipit. 
          Expedita ea laborum aliquam dolores impedit, dicta id!
        </p>
        <div class="rating">
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-half text-warning"></i>
        </div>
       </div>
      <div class="swiper-slide bg-white p-4">
       <div class="profile d-flex align-items-center mb-3">
         <img src="images/Facilities/star.svg" width="30px">
         <h6 class="m-0 ms-2">Random user1</h6>
        </div>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
         Totam officia libero nihil nisi, error quisquam nam magnam, inventore ullam voluptatum minus suscipit. 
         Expedita ea laborum aliquam dolores impedit, dicta id!
       </p>
       <div class="rating">
         <i class="bi bi-star-fill text-warning"></i>
         <i class="bi bi-star-fill text-warning"></i>
         <i class="bi bi-star-fill text-warning"></i>
         <i class="bi bi-star-fill text-warning"></i>
         <i class="bi bi-star-half text-warning"></i>
       </div>
       </div> 
      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
          <img src="images/Facilities/star.svg" width="30px">
          <h6 class="m-0 ms-2">Random user1</h6>
         </div>
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
          Totam officia libero nihil nisi, error quisquam nam magnam, inventore ullam voluptatum minus suscipit. 
          Expedita ea laborum aliquam dolores impedit, dicta id!
        </p>
        <div class="rating">
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-half text-warning"></i>
        </div>
       </div>
      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
          <img src="images/Facilities/star.svg" width="30px">
          <h6 class="m-0 ms-2">Random user1</h6>
         </div>
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
          Totam officia libero nihil nisi, error quisquam nam magnam, inventore ullam voluptatum minus suscipit. 
          Expedita ea laborum aliquam dolores impedit, dicta id!
        </p>
        <div class="rating">
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-half text-warning"></i>
        </div>
       </div>
     </div>
    <div class="swiper-pagination"></div>
  </div>
  <div class="col-lg-12 text-center mt-5">
    <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Know More >>></a>
  </div>
</div>

<!-- Reach Us -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REVIEWS</h2>

<div class="container">
  <div class="row">
    <div class="col-lg-8 cold-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
      <iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7723.494440955256!2d121.0171571283668!3d14.556442744058046!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c90264a0ed01%3A0x2b066ed57830cace!2sMakati%2C%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1732525198524!5m2!1sen!2sph" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="col-lg-4 cold-md-4">
      <div class="bg-white p-4 rounded mb-4">
        <h5>Call Us</h5>
        <a href="tel: +639000000000" class="d-inline-block mb-2 text-decoration-none text-dark">
          <i class="bi bi-telephone-fill">+639000000000</i>
        </a>
        <br>
        <a href="tel: +639000000000" class="d-inline-block text-decoration-none text-dark">
          <i class="bi bi-telephone-fill">+639000000000</i>
        </a>
      </div>
      <div class="bg-white p-4 rounded mb-4">
        <h5>Follow Us</h5>
        <a href="#" class="d-inline-block mb-3">
          <span class="badge bg-light text-dark fs-6 p-2">
          <i class="bi bi-twitter-x me-1"></i> X/Twitter
          </span>
        </a>
        <br>
        <a href="#" class="d-inline-block mb-3">
          <span class="badge bg-light text-dark fs-6 p-2">
          <i class="bi bi-facebook me-1"></i> Facebook
          </span>
        </a>
        <br>
        <a href="#" class="d-inline-block mb-3">
          <span class="badge bg-light text-dark fs-6 p-2">
          <i class="bi bi-instagram me-1"></i> Instagram
          </span>
        </a>
        <br>
      </div>
    </div>
  </div>
</div>

<!-- PHP Requirements for the Footer -->
<?php require('inc/footer.php'); ?>

<!-- SwiperJS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>    

<script>
  var swiper = new Swiper(".swiper-container", {
    spaceBetween: 30,
    effect: "fade",
    loop: true,
    autoplay: {
      delay: 3500,
      disableOnInteraction: false,
    },
  });

  var swiper = new Swiper(".swiper-reviews", {
      pagination: {
        el: ".swiper-pagination",
        dynamicBullets: true,
      },
    });
</script>
</body>
</html>