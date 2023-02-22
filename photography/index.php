<?php

  $page = "photography";

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home || Photography</title>
    <link rel="stylesheet" href="../assets/bootstrap/bootstrap.css" />

    <link rel="stylesheet" href="../assets/css/style.css" />
  </head>

  <body>
     <!-- Header -->
    <?php include '../assets/includes/header.php'?>

    <div class="container text-center ff mb-5" style="padding-top: 150px">
      <div class="row">
        <div class="col-12 col-md-6 mt-4">
          <div class="p-img">
            <a href="./wedding-and-elopement">
              <img
                src="../assets/images/Photography/wedding.jpg"
                class="img-fluid"
                alt=""
              />
              <div class="overlay-frame">
                <div class="center text-white">
                  <h1>Wedding and Elopement</h1>
                  <p></p>
                  <img
                    src="../assets/icons/right-arrow.png"
                    width="25"
                    alt=""
                  />
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-12 col-md-6 mt-4">
          <div class="p-img">
            <a href="./events">
              <img
                src="../assets/images/Photography/events.jpg"
                class="img-fluid"
                alt=""
              />
              <div class="overlay-frame">
                <div class="center text-white">
                  <h1>Events</h1>
                  <p></p>
                  <img
                    src="../assets/icons/right-arrow.png"
                    width="25"
                    alt=""
                  />
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-12 col-md-6 mt-4">
          <div class="p-img">
            <a href="./photo-sessions">
              <img
                src="../assets/images/Photography/photosession.jpg"
                class="img-fluid"
                alt=""
              />
              <div class="overlay-frame">
                <div class="center text-white">
                  <h1>Photo Session</h1>
                  <p></p>
                  <img
                    src="../assets/icons/right-arrow.png"
                    width="25"
                    alt=""
                  />
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-12 col-md-6 mt-4">
          <div class="p-img">
            <a href="./commercial-photography">
              <img
                src="../assets/images/Photography/commercial.jpg"
                class="img-fluid"
                alt=""
              />
              <div class="overlay-frame">
                <div class="center text-white">
                  <h1>Commercial Photography</h1>
                  <p></p>
                  <img
                    src="../assets/icons/right-arrow.png"
                    width="25"
                    alt=""
                  />
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer -->
    <?php include '../assets/includes/footer.php'?>
    
  </body>
</html>
