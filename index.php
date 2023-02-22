<?php

  $page = "homepage";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pixelstudio - Home</title>
  <link rel="stylesheet" href="assets/bootstrap/bootstrap.css" />
  <link rel="stylesheet" href="assets/slick/slick.css" />
  <link rel="stylesheet" href="assets/slick/slick-theme.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/css/animate.css" media="screen">

  <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body style="font-family: 'Playfair Display', serif;">
  
  <!-- Header -->
  <?php include './assets/includes/header.php'?>

  <!-- Slider Starts -->
  <div class="slider">
    <div class="slider-img img-1"></div>
    <div class="slider-img img-2"></div>
    <div class="slider-img img-3"></div>
  </div>
  <div class="btn-wrap w-100 row justify-content-between">
    <img src="assets/icons/left-arrow.png" alt="" class="prev-btn" />
    <img src="assets/icons/right-arrow.png" alt="" class="next-btn" />
  </div>
  <!-- Slider Ends -->

  <!-- AboutUs section Starts -->
  <section class="aboutus container py-4 px-4">
    <hr />
    <h1 class="mb-4 fs-2">About Us</h1>
    <p class="mb-5">
      Pixel Studio specialises in Photography, Videography, and canvas printing. Our team consists of industry
      professionals with over 5 years of experience. We have the crew and materials to create high-quality photos/videos
      on a low and efficient budget. Most of our photographers are based in Auckland, New Zealand but can travel outside
      of Auckland.
    </p>
    <a href="./about-us" class="btn btn-dark rounded-0 mb-4">Our Team</a>
  </section>

  <!-- Video background -->
  <div class="video-container">
    <video class="video-background" autoplay loop muted plays-inline border="0">
      <source src="assets/Videos/Epic Engagement shoot of Nishi and Duli - Kiwi Lankan Couple.mp4" type="video/mp4">
    </video>
  </div>

  <!-- What we offer -->
  <div class="container py-5 text-center">
    <div>
      <h1 class="mb-4 fs-2">What we Offer</h1>
      <hr class="w-50 ms-auto me-auto" />
      <div class="row mt-5">
        <div class="col-12 col-md me-2 bc bc-1">
          <a href="photography/index.html">
            <div class="col-container">
              <div class="center text-white">
                <h2>Photography</h2>
                <p>WEDDINGS AND EVENTS</p>
                <img src="assets/icons/right-arrow.png" width="25" alt="">
              </div>
            </div>
          </a>
        </div>
        <div class="col-12 col-md me-2 bc bc-2">
          <a href="videography/index.html">
            <div class="col-container">
              <div class="center text-white">
                <h2>Videography</h2>
                <p>WEDDINGS AND EVENTS</p>
                <img src="assets/icons/right-arrow.png" width="25" alt="">
              </div>
            </div>
          </a>
        </div>
        <div class="col-12 col-md bc bc-3">
          <a href="event-planning/index.html">
            <div class="col-container">
              <div class="center text-white">
                <h2>Event Planning</h2>
                <p>Any Events</p>
                <img src="assets/icons/right-arrow.png" width="25" alt="">
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- See our works -->
  <section class="ourworks text-center py-5 mb-5">
    <h1 class="my-5">See Our Works</h1>
    <div class="wic-1 wedding-img-container">
      <div class="overlay-frame">
        <div class="center text-white">
          <h1>Olivia and Regan</h1>
          <p>MEADOWOOD HOUSE, HASTINGS, HAWKE'S BAY</p>
          <img src="assets/icons/right-arrow.png" width="25" alt="" />
        </div>
      </div>
    </div>
    <div class="wic-2 wedding-img-container">
      <div class="overlay-frame">
        <div class="center text-white">
          <h1>Olivia and Regan</h1>
          <p>MEADOWOOD HOUSE, HASTINGS, HAWKE'S BAY</p>
          <img src="assets/icons/right-arrow.png" width="25" alt="" />
        </div>
      </div>
    </div>
    <div class="wic-3 wedding-img-container">
      <div class="overlay-frame">
        <div class="center text-white">
          <h1>Olivia and Regan</h1>
          <p>MEADOWOOD HOUSE, HASTINGS, HAWKE'S BAY</p>
          <img src="assets/icons/right-arrow.png" width="25" alt="" />
        </div>
      </div>
    </div>
    <div class="wic-4 wedding-img-container">
      <div class="overlay-frame">
        <div class="center text-white">
          <h1>Olivia and Regan</h1>
          <p>MEADOWOOD HOUSE, HASTINGS, HAWKE'S BAY</p>
          <img src="assets/icons/right-arrow.png" width="25" alt="" />
        </div>
      </div>
    </div>
  </section>


  <!-- Quote -->
  <section class="quote py-5">
    <div class="quote-container my-5">
      <div class="banner-container">
        <div class="center text-center w-75">
          <h1>“ True Love Stories Never Have Endings ”</h1>
        </div>
      </div>
    </div>
  </section>

  <!-- See our loving albums -->
  <div class="container py-5 text-center album">
    <h1 class="my-4 fs-2">See our Loving albums</h1>
    <hr class="w-50 ms-auto me-auto mb-5" />
    <div class="row">
      <div class="col-12 col-md-6 album-1">
        <img src="assets/images/21b614895c6c1ec447b629e1a60be9b9-large.jpg" width="100%" alt="" />
        <div class="overlay-frame">
          <div class="overlay-text">
            <h2>Test Collection</h2>
            <p>JANUARY 20TH, 2023</p>
          </div>
        </div>
      </div>
      <div class="col"></div>
    </div>
    <button class="btn btn-dark rounded-0 mt-5">See more Galleries</button>
  </div>

  <!-- Contact Form  Starts  -->
  <div class="container py-5">
    <div class="col-12 col-md-6 ms-auto me-auto">
      <h1 class="mb-4 fs-2 text-center">Contact Us</h1>
      <hr class="w-50 ms-auto me-auto" />
      <form role="form" id="contactForm" class="contact-form mt-5" data-toggle="validator" class="shake">
        <div class="form-group mb-4">
          <div class="controls">
            <input type="text" id="name" class="form-control" placeholder="Name" required
              data-error="Please enter your name">
            <div class="help-block with-errors"></div>
          </div>
        </div>
        <div class="form-group mb-4">
          <div class="controls">
            <input type="email" class="email form-control" id="email" placeholder="Email" required
              data-error="Please enter your email">
            <div class="help-block with-errors"></div>
          </div>
        </div>
        <div class="form-group mb-4">
          <div class="controls">
            <input type="text" id="phone" class="form-control" placeholder="Telephone (No spaces)" required
              data-error="Please enter your telephone number" pattern="^[0-9]*">
            <div class="help-block with-errors"></div>
          </div>
        </div>
        <div class="form-group mb-4">
          <div class="controls">
            <textarea id="message" rows="7" placeholder="Message" class="form-control" required
              data-error="Write your message"></textarea>
            <div class="help-block with-errors"></div>
          </div>
        </div>

        <button type="submit" id="submit" class="btn btn-dark rounded-0"></i> Send Message</button>
        <div id="msgSubmit" class="h3 text-center hidden"></div>
        <div class="clearfix"></div>

      </form>
      <br />
    </div>
  </div>
  <!-- Contact Form Ends -->

  <!-- Footer -->
  <?php include './assets/includes/footer.php'?>
  <script type="text/javascript" src="<?php echo $baseUrl ?>/assets/js/contact-form-script.js"></script>


 

</body>

</html>