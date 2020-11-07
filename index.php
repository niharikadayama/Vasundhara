<!doctype html>
<html>

<head>
  <title>Vasundhara_Homepage</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    .cover-bg {
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }

    .mt-20 {
      margin-top: 20px;
    }

    .mb-20 {
      margin-bottom: 20px;
    }

    h1,
    h2,
    h3,
    h4 {
      font-family: 'lato', sans-serif;
      color: #151515;
      font-weight: 700;
    }

    p {
      line-height: 1.6;
      color: #777;
    }

    span,
    a {
      display: inline-block;
    }

    .banner {
      background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url("Homepage_bg.png");
      background-attachment: fixed;
      height: 100vh;
      width: 100%;
    }

    .banner .caption h4 {
      color: white;
      font-size: 20px;
      font-weight: 400;
    }

    .banner .caption h2 {
      color: white;
      font-size: 70px;
      letter-spacing: -1px;
    }

    .banner .caption p {
      color: white;
      font-size: 17px;
      line-height: 32px;
      opacity: 0.7;
    }

    .banner .caption .social_icon a {
      color: black;
      width: 40px;
      height: 40px;
      line-height: 40px;
      background-color: white;
      border-radius: 50%;
      text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
      font-size: 16px;
      transition: 0.5s all;
    }

    .banner .caption .social_icon a:hover {
      color: teal;
    }

    .section_padding {
      padding: 100px 0;
    }

    .mb-30 {
      margin-bottom: 30px;
    }

    .pb-35 {
      padding-bottom: 35px;
    }

    .section_title {
      position: relative;
      margin-bottom: 70px;
      width: 100%;
    }

    .section_title p {
      display: inline-block;
      color: white;
      background-color: teal;
      margin-bottom: 5px;
      text-align: center;
      padding: 0 12px;
      letter-spacing: 1px;
    }

    .section_title h3 {
      position: relative;
      font-size: 36px;
      line-height: 1.14;
      letter-spacing: 1.4px;
      padding-bottom: 13px;
    }

    .btn {
      background-color: teal;
      border: 2px solid teal;
      padding: 10px 15px;
      box-shadow: inset 0 0 0 0 #ffffff;
      letter-spacing: 1px;
      border-radius: 5px;
      color: white;
      font-size: 14px;
      transition: 0.8s all;
      margin-bottom: 10px;
    }

    .btn:hover {
      box-shadow: inset 12em 0 0 0 #ffffff;
      color: teal;
    }

    .about .part_text h4 {
      font-size: 24px;
    }

    .join_us {
      background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url("Homepage_bg2.jpg");
      background-attachment: fixed;
    }

    .join_us h2 {
      color: white;
      font-size: 52px;
      font-weight: 800;
    }

    .mt-30 {
      margin-top: 30px;
    }

    .footer {
      background-color: white;
      padding: 80px;
    }

    .footer .logo {
      width: 100%;
      margin-bottom: 30px;
    }

    .footer .logo .custom_logo {
      background: teal;
      color: white;
      text-align: center;
      text-transform: uppercase;
      padding: 0 25px;
      letter-spacing: 1px;
      line-height: 2;
    }

    .footer .social_icon {
      margin: 0 auto;
      width: 100%;
    }

    .footer .social_icon a {
      display: inline-block;
      width: 40px;
      height: 40px;
      line-height: 40px;
      border-radius: 50%;
      margin-right: 10px;
      background: black;
      transition: 0.8s all;
    }

    .footer .social_icon a i {
      color: teal;
      font-size: 14px;
    }

    .footer .social_icon a i:hover {
      color: white;
      font-size: 17px;
    }

    .footer .copy {
      width: 100%;
      padding-top: 30px;
    }

    .footer .copy h6 {
      color: #999;
      font-size: 14px;
      font-weight: 400;
      letter-spacing: 2px;
    }

    .logo img {
      float: left;
      width: 200px;
      height: auto;
    }

    .navbar-dark .navbar-nav .nav-link {
      color: white;
      font-weight: 700;
      letter-spacing: 1px;
      font-size: 14px;
      transition: 0.5s all;
    }

    .navbar {
      padding: 15px 0;
      background: transparent;
    }

    .navbar-dark .navbar-nav .nav-link:hover {
      color: teal;
    }

    .nav-scroll {
      background: white;
      box-shadow: 0 1px 8px 3px rgba(0, 0, 0, 0.05);
      transition: 0.5s all;
    }

    .nav-scroll .navbar-nav li a {
      color: teal !important;
    }

    .navbar .navbar-toggler span {
      color: white;
    }

    .navbar .navbar-toggler {
      border: none;
    }

    .navbar .navbar-toggler:focus,
    .navbar .navbar-toggler:active {
      outline: none;
      box-shadow: none;
    }

    @media only screen and (max-width: 991px) {
      .navbar .container {
        max-width: 100%;
      }

      .navbar .logo {
        margin-left: 20px;
        padding: 0 10px;
        width: 120px;
      }

      .nav-scroll .navbar-toggler span {
        color: teal;
      }

      .navbar .navbar-collapse {
        overflow: hidden;
        background: #111;
        color: white !important;
        text-align: center;
        padding: 10px 0;
        margin: 10px 0;
      }

      .nav-scroll .navbar-collapse {
        background: white !important;
      }
    }

    @media only screen and (max-width: 767px) {
      .banner .caption h4 {
        font-size: 16px;
      }

      .banner .caption h2 {
        font-size: 35px;
      }

      .join_us h2 {
        font-size: 30px;
      }

      .join_us h2 {
        font-size: 30px;
      }
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
      <div class="logo">
        <img src="Vasundhara2(black bg).png">
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fa fa-bars"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item ml-2">
            <a class="nav-link" href="#">HOME</a>
          </li>
          <li class="nav-item ml-2">
            <a class="nav-link" href="explore.html">EXPLORE</a>
          </li>
          <li class="nav-item ml-2">
            <a class="nav-link" href="loginpage.php">LOGIN</a>
          </li>
          <li class="nav-item ml-2">
            <a class="nav-link" href="registerpage.html">SIGNUP</a>
          </li>
          <li class="nav-item ml-2">
            <a class="nav-link" href="services.html">SERVICES</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <section class="banner cover-bg">
    <div class="container h-100">
      <div class="row align-items-center h-100">
        <div class="col-12 caption text-center">
          <h4 class="mt-20 mb-20"> A Noble Perspective</h4>
          <h2 class="mt-20">VASUNDHARA</h2>
          <p class="mt-20">Intiative targeting Sustainable growth, Vocal for Local, Cleaner and greener Earth.</p>
          <div class="social_icon text-center mt-20">
            <a href="https://www.facebook.com/vasundhara.nobleperspective.7"><span><i class="fa fa-facebook"></i></span></a>
            <a href="#"><span><i class="fa fa-twitter"></i></span></a>
            <a href="https://www.instagram.com/vasundharaperspectivenoble/"><span><i class="fa fa-instagram"></i></span></a>
            <a href="#"><span><i class="fa fa-linkedin"></i></span></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="about section_padding pb-0">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-12 section_title text-center">
          <p>WHO ARE WE</p>
          <h3>About <b>VASUNDHARA</b></h3>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="part_photo">
            <img class="img-fluid" src="Vasundhara2(white bg).png">
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="part_text">
            <h4 class="mb-30">Namaste</h4>
            <p class="pb-35">
              With the ever growing population grows pollution, waste, umemployment, high rate of
              adulteratation in products. Vasundhara as a group focuses on finding the solution to
              these issues by supporting eco-friendly waste managing Indian Start-ups.
            </p>
            <a href="meet-our-team.html" class="btn">ABOUT US</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="join_us section_padding text-center cover-bg">
    <div class="container">
      <h2>Approach us to connect as a seller or a customer</h2>
      <a href="index1.php" class="btn mt-30">CONTACT US</a>
    </div>
  </section>
  <footer class="footer text-center">
    <div class="container">
      <div class="row">
        <div class="logo">
          <a href="#" class="navbar-brand custom_logo"><span>VASUNDHARA</span></a>
        </div>
        <div class="social_icon text-center">
          <a href="#"><span><i class="fa fa-facebook"></i></span></a>
          <a href="#"><span><i class="fa fa-twitter"></i></span></a>
          <a href="#"><span><i class="fa fa-instagram"></i></span></a>
          <a href="#"><span><i class="fa fa-linkedin"></i></span></a>
        </div>
        <div class="copy">
          <h6>&copy Designed by web developers at Vasundhara group</h6>
        </div>
      </div>
    </div>
  </footer>
  <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <script>
    $(window).scroll(function() {
      var scroll = $(window).scrollTop();

      if (scroll >= 10) {
        $(".navbar").addClass("nav-scroll");
      } else {
        $(".navbar").removeClass("nav-scroll");
      }
    });
  </script>
</body>

</html>