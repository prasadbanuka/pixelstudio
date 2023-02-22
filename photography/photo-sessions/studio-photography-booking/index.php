<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home || Photo Gallery</title>
    <link rel="stylesheet" href="../../../assets/bootstrap/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="../../../assets/css/animate.css" media="screen">

    <link rel="stylesheet" href="../../../assets/css/style.css" />
</head>

<body>
      <!-- Header -->
      <?php include '../../../assets/includes/header.php'?>

    <!-- Hero Section -->
    <div class="hero-section-background-outdoor-photography-booking text-center" style="padding-top: 150px;">
        <div class="overlay-frame-2">
            <h1 class="position-absolute top-50 start-50 translate-middle display-4 text-white">Studio Photography</h1>
        </div>
    </div>

    <!-- Wedding Booking packages -->
    <div class="container my-5 pt-4">
        <h3 class="text-center mb-5 display-6">Why Waiting , Book Now</h3>
        <hr class="w-50 ms-auto me-auto" />
        <p class="text-center mt-4" style="letter-spacing: 5px;">STUDIO PORTRAIT SESSION FORM</p>
        <p class="fs-5 text-center my-5">Thanks for choosing us. Please answer these questions to go ahead and confirm
            the booking.
        </p>

        <!-- Contact Form  Starts  -->
        <form role="form" id="studioPhotographyForm" class="contact-form mt-5 pt-4" data-toggle="validator" class="shake">
            <div class="col-12 mt-4 pt-1">

                <div class="form-group">
                    <div class="controls">
                        <label for="inputState" class="form-label">FULL NAME *</label>
                        <input type="text" id="name" class="form-control rounded-0 fs-4" placeholder="Your Name"
                            required data-error="Please enter your name">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-4 pt-1">
                <div class="form-group">
                    <div class="controls">
                        <label for="inputState" class="form-label">EMAIL *</label>
                        <input type="email" class="email form-control rounded-0 fs-4" id="email"
                            placeholder="Your e-mail address" required data-error="Please enter your email">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-4 pt-1">
                <div class="form-group">
                    <div class="controls">
                        <label for="inputState" class="form-label">PHONE NUMBER *</label>
                        <input type="text" id="phone" class="form-control rounded-0 fs-4"
                            placeholder="Your phone number" required data-error="Please enter your telephone number"
                            pattern="^[0-9]*">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-4 pt-1">
                <div class="form-group">
                    <div class="controls">
                        <label for="inputState" class="form-label">WHAT'S THE PHOTOSHOOT *</label>
                        <input type="text" id="photoshootType" class="form-control rounded-0 fs-4"
                            placeholder="What type of photoshoot" required data-error="Please name the photoshoot">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-4 pt-1">
                <div class="form-group">
                    <div class="controls">
                        <label for="inputState" class="form-label">DATE IN MIND *</label>
                        <input type="date" id="date" class="form-control rounded-0 fs-4"
                            placeholder="Date of the photoshoot" required
                            data-error="Please enter the date of the photoshoot">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-4 pt-1">
                <div class="form-group">
                    <div class="controls">
                        <label for="inputState" class="form-label">START TIME *</label>
                        <input type="time" id="time" class="form-control rounded-0 fs-4"
                            placeholder="What time do you want us to start" required
                            data-error="Please enter the start time of the event">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-4 pt-1">
                <div class="form-group">
                    <div class="controls">
                        <label for="inputState" class="form-label">HOW MANY HOURS *</label>
                        <input type="text" id="duration" class="form-control rounded-0 fs-4"
                            placeholder="How many hours do you require our services" required
                            data-error="Please enter the hours of required services">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-4 pt-1">
                <div class="form-group">
                    <div class="controls">
                        <label for="inputState" class="form-label">ANY THING THAT I NEED TO KNOW ABOUT THE
                            PHOTOSHOOT</label>
                        <input type="text" id="anyOtherInformation" class="form-control rounded-0 fs-4"
                            placeholder="Extra information your photoshoot" data-error="Please enter the informations">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-4 pt-1">
                <div class="form-group">
                    <div class="controls">
                        <label for="inputState" class="form-label">HOW MANY MEMBERS YOU ARE BRINGING IN FOR THE
                            PHOTOSHOOT *</label>
                        <input type="text" id="membersAmount" class="form-control rounded-0 fs-4"
                            placeholder="Number of members in photoshoot" data-error="" >
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>

            <div class="col-12 mt-4 pt-1">
                <label for="inputState" class="form-label">DO YOU NEED A CANVAS PRINT</label><br />
                <input type="radio" id="canvasPrint" name="canvasPrint" value="Yes"> &nbsp;Yes<br>
                <input type="radio" id="canvasPrint" name="canvasPrint" value="No"> &nbsp; No<br>
                <label for="" class="text-secondary mt-2">We do print canvas. Let me know if you need a canvas
                    print.</label>
            </div>



            <button type="submit" id="submit" class="btn btn-dark rounded-0 my-4 fs-5 px-4"></i> BOOK NOW</button>
            <div id="msgSubmit" class="h3 text-center hidden"></div>
            <div class="clearfix"></div>

        </form>
        <br />
        <!-- Contact Form Ends -->

        <h2 class="mt-5">More info ...</h2>
        <ul class="mt-4 fs-5">
            <li class="mt-3">You will have to pay an advance payment to go ahead and lock the date for your studio
                photoshoot.</li>
            <li class="mt-3">To edit the photos it will take up-to working 14-20 days. If you want sooner that it will
                be an extra cost.</li>
            <li class="mt-3">Photos will be provided on a private online downloadable gallery.</li>
        </ul>
        <p class="mb-5 pb-5 mt-4">STUDIO ADDRESS - 41 KILLARNEY AVE TORBAY<br />PIXEL TEAM.</p>
    </div>


    <!-- Banner -->
    <div class="banner-2 position-relative mb-5">
        <div class="overlay-frame">
            <div class="position-absolute top-50 start-50 translate-middle text-white">
                <h1 class="display-5 text-center">Can't wait to capture your big day!</h1>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include '../../../assets/includes/footer.php'?>
</body>

</html>