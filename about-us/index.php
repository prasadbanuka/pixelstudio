<?php

  $page = "about-us";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home || Photo Gallery</title>
  <link rel="stylesheet" href="../assets/bootstrap/bootstrap.css" />

  <link rel="stylesheet" href="../assets/css/style.css" />
</head>

<body>

  <!-- Header -->
  <?php include '../assets/includes/header.php'?>

  <div class="container text-center ff" style="padding-top: 150px;">
    <!-- About Us -->
    <h1 class="fw-bold display-3 ">About Us</h1>
    <div class="underline ms-auto me-auto mb-5"></div>
    <h1 class="pt-4">Candid is our style</h1>
    <p class="fs-5 mt-4 col-12 col-md-6 ms-auto me-auto">Pixel Studio specialises in Photography, Videography, and
      canvas printing. Our team consists of industry professionals with over 5 years of experience. We have the crew and
      materials to create high-quality photos/videos on a low and efficient budget. Most of our photographers are based
      in Auckland, New Zealand but can travel outside of Auckland.</p>
    <img src="../assets/images/About_Us/about-cover.webp" class="img-fluid mt-5 pt-4" alt="" />

    <!-- Our Story -->
    <h1 class="mt-5 pt-5">Our Story</h1>
    <p class="fs-5 mt-4 pb-5 col-12 col-md-6 ms-auto me-auto">Nishi and Duli are the proud owners of pixel studio, which
      started in 2017. Duli manages Videography and Photography and Nishi manages canvas and photo prints. Pixel studio
      has more than 10 professional photographers and videographers working at present and we have completed more than
      1000 canvas and photo prints.</p>

    <!-- Meet The Team -->
    <h1 class="mt-5">Meet The Team</h1>
    <div class="row mx-md-5 text-start justify-content-between">
      <div class="col-12 col-md-6">
        <img src="../assets/images/About_Us/team_members/dulith_gunasekera.webp" class="img-fluid-custome mt-4" alt="" />
        <h4 class="">Dulith Gunasekera</h4>
        <h5 class="fw-light">Founder - Photographer/videographer</h4>
      </div>
      <div class="col-12 col-md-6">
        <img src="../assets/images/About_Us/team_members/nishi_de_silva.webp" class="img-fluid-custome mt-4" alt="" />
        <h4 class="mt-1">Nishi De Silva</h4>
        <h5 class="fw-light">Founder - Pixel printing | Accountant</h5>
      </div>

      <div class="col-12 col-md-6">
        <img src="../assets/images/About_Us/team_members/james_fink-jensen.webp" class="img-fluid-custome mt-4" alt="" />
        <h4 class="mt-1">James Fink-Jensen</h4>
        <h5 class="fw-light">Videographer/Live stream</h5>
      </div>
      <div class="col-12 col-md-6">
        <img src="../assets/images/About_Us/team_members/mevuni_weerackody.webp"class="img-fluid-custome mt-4" alt="" />
        <h4 class="mt-1">Mevuni Weerackody</h4>
        <h5 class="fw-light">Photographer</h5>
      </div>
      <div class="col-12 col-md-6">
        <img src="../assets/images/About_Us/team_members/ashik_chahwala.webp" class="img-fluid-custome mt-4" alt="" />
        <h4 class="mt-1">Ashik Chahwala</h4>
        <h5 class="fw-light">Photographer/Videographer</h5>
      </div>
      <div class="col-12 col-md-6">
        <img src="../assets/images/About_Us/team_members/john_hemmingsen.webp" class="img-fluid-custome mt-4" alt="" />
        <h4 class="mt-1">John Hemmingsen</h4>
        <h5 class="fw-light">Photographer</h5>
      </div>
      <div class="col-12 col-md-6">
        <img src="../assets/images/About_Us/team_members/zakiah_henderson.webp" class="img-fluid-custome mt-4" alt="" />
        <h4 class="mt-1">Zakiah Henderson</h4>
        <h5 class="fw-light">Photographer/Videographer</h5>
      </div>
      <div class="col-12 col-md-6">
        <img src="../assets/images/About_Us/team_members/aliyasenn.webp" class="img-fluid-custome mt-4" alt="" />
        <h4 class="mt-1">Aliyasenn</h4>
        <h5 class="fw-light">Photographer/Videographer</h5>
      </div>
      <div class="col-12 col-md-6">
        <img src="../assets/images/About_Us/team_members/shashika_prasad.webp" class="img-fluid-custome mt-4" alt="" />
        <h4 class="mt-1">Shashika Prasad</h4>
        <h5 class="fw-light">Editor</h5>
      </div>
      <div class="col-12 col-md-6">
        <img src="../assets/images/About_Us/team_members/lan_quigley.webp"class="img-fluid-custome mt-4" alt="" />
        <h4 class="mt-1">Ian Quigley</h4>
        <h5 class="fw-light">Camera Operator</h5>
      </div>

      <p class="text-center mt-5">© Pixel studio 2022</p>
    </div>
  </div>

  <!-- Footer -->
  <section class="bg-light">
    <div class="container">
      <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
        <div class="col mb-3">
          <div class="logo px-3">
            <a href="./"><img src="../assets/images/Pixel Studio-dark.png"
                style="max-width: 140px; max-height: 80px;"></a>
          </div>

          <p class="text-muted pt-3">Pixel Studio specialises in Photography, Videography, and canvas
            printing. Our team consists of industry professionals with over 5 years of experience.</p>
        </div>

        <div class="col mb-3">

        </div>

        <div class="col mb-3">
          <h5>Quick Links</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="../index.html" class="nav-link p-0 text-muted">Home</a></li>
            <li class="nav-item mb-2"><a href="../photography/index.html"
                class="nav-link p-0 text-muted">Photography</a></li>
            <li class="nav-item mb-2"><a href="../videography/index.html"
                class="nav-link p-0 text-muted">Videography</a></li>
            <li class="nav-item mb-2"><a href="../event-planning/index.html" class="nav-link p-0 text-muted">Event
                Planning</a></li>
            <li class="nav-item mb-2"><a href="../contact-us/index.html" class="nav-link p-0 text-muted">Contact Us</a>
            </li>
          </ul>
        </div>

        <div class="col mb-3">
          <h5>Services</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="../about-us/index.html" class="nav-link p-0 text-muted">About
                Us</a></li>
            <li class="nav-item mb-2"><a href="../photography/index.html"
                class="nav-link p-0 text-muted">Photography</a></li>
            <li class="nav-item mb-2"><a href="../videography/index.html"
                class="nav-link p-0 text-muted">Videography</a></li>
            <li class="nav-item mb-2"><a href="../event-planning/index.html" class="nav-link p-0 text-muted">Event
                Planning</a></li>
          </ul>
        </div>

        <div class="col mb-3">
          <h5>Contact</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Address:</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"></a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Phone: </a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Email: </a></li>
          </ul>
        </div>
      </footer>
    </div>
    <div class="line"></div>
  </section>

  <script src="../assets/jquery/jquery-3.6.3.min.js"></script>
  <script src="../assets/bootstrap/bootstrap.bundle.js"></script>
  <script src="../assets/js/script.js"></script>
</body>

</html>