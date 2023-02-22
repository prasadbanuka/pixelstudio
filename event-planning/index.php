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
     <?php include '../assets/includes/footer.php'?>




  <script src="../assets/jquery/jquery-3.6.3.min.js"></script>
  <script src="../assets/bootstrap/bootstrap.bundle.js"></script>
  <script src="../assets/js/script.js"></script>
</body>

</html>