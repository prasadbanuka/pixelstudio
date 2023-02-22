<?php

  $page = "contact-us";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home || Photo Gallery</title>
    <link rel="stylesheet" href="../assets/bootstrap/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="../assets/css/animate.css" media="screen">

    <link rel="stylesheet" href="../assets/css/style.css" />
</head>

<body>
  <!-- Header -->
  <?php include '../assets/includes/header.php'?>

    <!-- Hero Section -->
    <div class="hero-section-background-videography text-center" style="padding-top: 150px;">
        <div class="overlay-frame-2">
            <h1 class="position-absolute top-50 start-50 translate-middle display-4 text-white">Contact Us</h1>
        </div>
    </div>

    <!-- Pricing & Packages -->
    <div class="container my-5 w-75 px-5 pt-4">
        <div class="">
            <h1>Let's Start Your Journey</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nec felis libero. Ut blandit viverra
                urna
                quis scelerisque. Praesent non venenatis ex. Morbi in pellentesque dui. Aliquam erat volutpat. Nam
                imperdiet, eros quis mattis mollis, elit ligula egestas nisi, scelerisque cursus enim orci in nisl.
                Phasellus eros metus, rutrum quis dapibus a, interdum et elit.
            </p>

            <!-- Contact Form  Starts  -->
            <form role="form" id="contactForm" class="contact-form mt-5" data-toggle="validator" class="shake">
                <div class="col-12 mt-4 pt-1">
                    <div class="form-group">
                        <div class="controls">
                            <label for="inputState" class="form-label">YOUR NAME *</label>
                            <input type="text" id="name" class="form-control rounded-0 fs-4" placeholder="" required
                                data-error="Please enter your name">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-4 pt-1">
                    <div class="form-group">
                        <div class="controls">
                            <!-- <p class="m-0">EMAIL ADDRESS *</p> -->
                            <label for="inputState" class="form-label">EMAIL ADDRESS *</label>
                            <input type="email" class="email form-control rounded-0 fs-4" id="email" placeholder=""
                                required data-error="Please enter your email">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>

                <div class="col-12 mt-4 pt-1">
                    <label for="inputState" class="form-label">WHAT TYPE OF SESSION ARE YOU LOOKING FOR?</label><br />
                    <input type="radio" name="session" id="" class="mt-3">&nbsp<label>Wedding</label><br />
                    <input type="radio" name="session" id="" class="mt-3">&nbsp<label>Engagement</label><br />
                    <input type="radio" name="session" id="" class="mt-3">&nbsp<label>Fashion</label><br />
                    <input type="radio" name="session" id="" class="mt-3">&nbsp<label>Casual</label><br />
                </div>

                <div class="col-12 mt-4 pt-1">
                    <label for="inputState" class="form-label">HOW DID YOU HEAR ABOUT ME?</label>
                    <select id="inputState" class="form-select rounded-0 fs-4">
                        <option selected>Select option</option>
                        <option>Facebook Ads</option>
                        <option>Google search</option>
                        <option>Form a friend</option>
                        <option>Other</option>
                    </select>
                </div>
                <div class="col-12 mt-4 pt-1 mb-4">
                    <div class="form-group">
                        <div class="controls">
                            <label for="inputState" class="form-label">MESSAGE *</label>
                            <textarea id="message" rows="7" placeholder="" class="form-control rounded-0 fs-4" required
                                data-error="Write your message"></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>

                <button type="submit" id="submit" class="btn btn-dark rounded-0 mb-4 fs-5 px-4"></i> Send
                    Message</button>
                <div id="msgSubmit" class="h3 text-center hidden"></div>
                <div class="clearfix"></div>

            </form>
            <br />
            <!-- Contact Form Ends -->
        </div>


    </div>

    <!-- Footer -->
    <?php include '../assets/includes/footer.php'?>
</body>

</html>