<?php
  require('admin/inc/db_config.php');
  require('admin/inc/essentials.php');


  $contact_q = "SELECT * FROM contact_details_view WHERE `sr_no`=?";
  $values = [1];
  $contact_r = mysqli_fetch_assoc(select($contact_q,$values,'i'));
?>

<!-- NavBar !-->
<nav id="nav-bar" class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm mb-5 sticky-top">
 <div class="container-fluid">
   <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="landingpage.php">Hotel Title</a>
   <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav me-auto mb-2 mb-lg-0">
       <li class="nav-item">
         <a class="nav-link me-2" href="landingpage.php">Home</a>
       </li>
       <li class="nav-item">
         <a class="nav-link me-2" href="rooms.php">Rooms</a>
       </li>
       <li class="nav-item">
         <a class="nav-link me-2" href="facilities.php">Facilities</a>
       </li>
       <li class="nav-item">
         <a class="nav-link me-2" href="contact.php">Contact Us</a>
       </li>
       <li class="nav-item">
         <a class="nav-link me-2" href="about.php">About</a>
       </li>
     </ul>
     <div class="d-flex">
       <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
         Login
       </button>
       <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModal">
         Register
       </button>
      </div>
   </div>
 </div>
</nav>

<!-- Login Modal -->
<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="loginForm">
        <div class="modal-header">
          <h5 class="modal-title">
            <i class="bi bi-person-circle fs-3 me-2"></i> User Login
          </h5>
          <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" id="loginEmail" class="form-control shadow-none" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" id="loginPassword" class="form-control shadow-none" required>
          </div>
          <div class="d-flex align-items-center justify-content-between">
            <button type="submit" class="btn btn-dark shadow-none">LOGIN</button>
            <a href="javascript:void(0)" class="text-secondary text-decoration-none forgot-password-link">Forgot password?</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Register Modal -->
<div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <form id="registerForm">
        <div class="modal-header">
          <h5 class="modal-title">
            <i class="bi bi-person-lines-fill"></i> User Registration
          </h5>
          <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="mb-3">
              <label class="form-label">Full Name</label>
              <input type="text" id="registerFullName" class="form-control shadow-none" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Email</label>
              <input type="email" id="registerEmail" class="form-control shadow-none" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="password" id="registerPassword" class="form-control shadow-none" required>
            </div>
          </div>
          <div class="text-center my-1">
            <button type="submit" class="btn btn-dark shadow-none">REGISTER</button>
          </div>
          <div class="text-center my-3">
            <p>Or sign up with:</p>
            <button id="googleSignUp" type="button" class="btn-google shadow-none me-2">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 48" width="48" height="48">
                <path fill="#4285F4" d="M39.2 24.45c0-1.55-.16-3.04-.43-4.45H20v8h10.73c-.45 2.53-1.86 4.68-4 6.11v5.05h6.5c3.78-3.48 5.97-8.62 5.97-14.71z"></path>
                <path fill="#34A853" d="M20 44c5.4 0 9.92-1.79 13.24-4.84l-6.5-5.05C24.95 35.3 22.67 36 20 36c-5.19 0-9.59-3.51-11.15-8.23h-6.7v5.2C5.43 39.51 12.18 44 20 44z"></path>
                <path fill="#FABB05" d="M8.85 27.77c-.4-1.19-.62-2.46-.62-3.77s.22-2.58.62-3.77v-5.2h-6.7C.78 17.73 0 20.77 0 24s.78 6.27 2.14 8.97l6.71-5.2z"></path>
                <path fill="#E94235" d="M20 12c2.93 0 5.55 1.01 7.62 2.98l5.76-5.76C29.92 5.98 25.39 4 20 4 12.18 4 5.43 8.49 2.14 15.03l6.7 5.2C10.41 15.51 14.81 12 20 12z"></path>
              </svg>
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- Forgot Password Modal -->
<div class="modal fade" id="forgotPasswordModal" tabindex="-1" aria-labelledby="forgotPasswordModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="forgotPasswordModalLabel">Forgot Password</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="forgotPasswordForm">
          <div class="mb-3">
            <label for="forgotEmail" class="form-label">Enter your email address:</label>
            <input type="email" id="forgotEmail" class="form-control" required>
          </div>
          <button type="submit" class="btn btn-dark w-100">Send Reset Email</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script type="module" src="scripts/formHandler.js"></script>
<script type="module" src="scripts/firebaseauth.js"></script>