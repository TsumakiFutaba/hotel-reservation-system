<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Palitan nyo na lang to ng title ng hotel naten !-->
    <title>Hotel Title - Contact Us</title>

<!-- PHP REquirements for the links addons -->
  <?php require('inc/links.php'); ?>

</head>
<body class="bg-light">

  <?php require('inc/header.php'); ?> 
 
  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">CONTACT US</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Explicabo porro reprehenderit delectus <br> distinctio nesciunt dolore at laborum vel, 
        molestiae modi quia ratione reiciendis illum odit ipsam iure quaerat mollitia fuga!
    </p>
  </div>
 
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4">
         <iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7723.494440955256!2d121.0171571283668!3d14.556442744058046!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c90264a0ed01%3A0x2b066ed57830cace!2sMakati%2C%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1732525198524!5m2!1sen!2sph" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

          <h5>Address</h5>
         <a href="https://maps.app.goo.gl/T1op5thkTeerektS7" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
          <i class="bi bi-geo-alt-fill"></i> XYZ, Metro Manila, Makati City
         </a>
         <h5 class="mt-4">Call Us</h5>
        <a href="tel: +639000000000" class="d-inline-block mb-2 text-decoration-none text-dark">
          <i class="bi bi-telephone-fill">+639000000000</i>
        </a>
        <br>
        <a href="tel: +639000000000" class="d-inline-block text-decoration-none text-dark">
          <i class="bi bi-telephone-fill">+639000000000</i>
        </a>

        <h5 class="mt-4">Email</h5>
        <a href="mailto: ask.exampleemailnamehere@gmail.com" class="d-inline-block text-decoration-none text-dark mb-2">
          <i class="bi bi-envelope-fill"></i> ask.exampleemailnamehere@gmail.com
        </a>
        
        <h5 class="mt-4">Follow Us</h5>
        <a href="#" class="d-inline-block text-dark fs-5 me-2">         
          <i class="bi bi-twitter-x me-1"></i>
        </a>
        <a href="#" class="d-inline-block text-dark fs-5 me-2">
          <i class="bi bi-facebook me-1"></i>
        </a>
        <a href="#" class="d-inline-block text-dark fs-5">
          <i class="bi bi-instagram me-1"></i>
        </a>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4">
          <form>
            <h5>Send a message</h5>
            <div class="mb-3">
              <label class="form-label" style="font-weight: 500">Name</label>
              <input type="text" class="form-control shadow-none">
            </div>
            <div class="mb-3">
              <label class="form-label" style="font-weight: 500">Email</label>
              <input type="text" class="form-control shadow-none">
            </div>
            <div class="mb-3">
              <label class="form-label" style="font-weight: 500">Subject</label>
              <input type="text" class="form-control shadow-none">
            </div>
            <div class="mb-3">
              <label class="form-label" style="font-weight: 500">Message</label>
              <textarea type="text" class="form-control shadow-none" rows="1"></textarea>
            </div>
            <button type="submit" class="btn text-white custom-bg mt-3">SEND</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  
 <?php require('inc/footer.php'); ?>


</body>
</html>