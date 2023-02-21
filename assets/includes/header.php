<?php 

  $baseUrl = "http://" . $_SERVER['SERVER_NAME'] . "/URGENT/photography/final-site"; 

?>

<!-- Navigation Bar Starts -->
<section class="navigation">
  <div class="nav-container">

    <div class="logo">
      <a href="#"><img src="./assets/images/logo.png" class="logo-mobile" width="140"></a>
    </div>

    <nav>
      <div class="nav-mobile">
        <div id="navbar-toggle" style="z-index: 2;" href=""><span></span></div>
      </div>
      <ul class="justify-content-center" style="z-index: 1;">
        <li>
          <a href="<?php echo $baseUrl ?>">Home</a>
        </li>
        <li>
          <a href="<?php echo $baseUrl ?>/about-us">About Us</a>
        </li>
        <li>
          <a href="<?php echo $baseUrl ?>/photography">Photography</a>
        </li>

        <div class="logo px-3">
          <a href="./"><img src="<?php echo $baseUrl ?>/assets/images/logo.png" class="logo-img"></a>
        </div>

        <li>
          <a href="<?php echo $baseUrl ?>/videography">Videography</a>
        </li>
        <li>
          <a href="<?php echo $baseUrl ?>/event-planning">Event Planning</a>
        </li>

        <li>
          <a href="<?php echo $baseUrl ?>/contact-us">Contact Us</a>
        </li>


        <!-- <li>
          <div class="dropdown">
            <a href="#more" class="dropbtn">More</a>
            <div class="dropdown-content">
              <a href="" style="color: black;">CONTACT US</a>
              <a href="photography/photo-sessions/index.html" style="color: black;">PHOTO SESSION COPY</a>
            </div>
          </div>
        </li> -->
      </ul>
    </nav>
  </div>
</section>
<!-- Navigation Bar Ends -->