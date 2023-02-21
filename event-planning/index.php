<?php

  $page = "event-planning";

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

  <!-- Client Area -->
  <div class="container pt-5">
    <div class="mt-5 p-1">
      <h1 class="text-center mt-5 pt-5 pb-4">Client Area</h1>
      <p class="lh-lg w-75 ms-auto me-auto pb-5">Use this space to showcase your Pixieset Client Gallery collections.
        Click edit and enter
        your own text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nec felis libero. Ut blandit
        viverra urna quis scelerisque. Praesent non venenatis ex. Morbi in pellentesque dui. Aliquam erat volutpat.</p>
      <div class="row">
        <div class="col-12 col-md-4">
          <div class="client-img-container">
            <div class="overlay-frame text-white text-center">
              <p class="fs-5 position-absolute bottom-0 start-50 translate-middle-x">TEST COLLECTION<br />JANUARY 20TH,
                2023</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-8">

        </div>
      </div>
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