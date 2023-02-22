<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home || Photo Gallery</title>
    <link rel="stylesheet" href="../../../../assets/bootstrap/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="../../../../assets/css/animate.css" media="screen">

    <link rel="stylesheet" href="../../../../assets/css/style.css" />
</head>

<body>
      <!-- Header -->
      <?php include '../../../../assets/includes/header.php'?>

    <!-- Hero Section -->
    <div class="hero-section-background-wedding-booking text-center" style="padding-top: 150px;">
        <div class="overlay-frame-2">
            <h1 class="position-absolute top-50 start-50 translate-middle display-4 text-white">Event Videography Booking</h1>
        </div>
    </div>

    <!-- Wedding Booking packages -->
    <div class="container my-5 pt-4">
        <h3 class="text-center mb-5 display-6">Why Waiting , Book Now</h3>
        <hr class="w-50 ms-auto me-auto" />
        <p class="fs-5 text-center my-5">Do you mind filling up this form to go ahead and confirm the booking. Thanks
        </p>

        <!-- Contact Form  Starts  -->
        <form role="form" id="event-videography-booking-form" class="contact-form mt-5 pt-4" data-toggle="validator" class="shake">
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
                        <label for="inputState" class="form-label">EVENT *</label>
                        <input type="text" id="event" class="form-control rounded-0 fs-4"   placeholder="1st Birthday" 
                        required data-error="Please name the event">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-4 pt-1">
                <div class="form-group">
                    <div class="controls">
                        <label for="inputState" class="form-label">EVENT DATE *</label>
                        <input type="date" id="eventDate" class="form-control rounded-0 fs-4" placeholder="Date of the event"
                        required data-error="Please enter the date of the event">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>


            <div class="col-12 mt-4 pt-1">
                <div class="form-group">
                    <div class="controls">
                        <label for="inputState" class="form-label">START TIME *</label>
                        <input type="time" id="eventTime" class="form-control rounded-0 fs-4" placeholder="What time do you want us to start" 
                        required data-error="Please enter the start time of the event">

                        <div class="help-block with-errors"></div>
                        <label for="" class="text-secondary mt-1">( What time you want us to start. The end time will depend on the package you choose.)</label>
                    </div>
                </div>
            </div>

            <div class="col-12 mt-4 pt-1">
                <div class="form-group">
                    <div class="controls">
                        <label for="inputState" class="form-label">LOCATION OF THE EVENT *</label>
                        <input type="text" id="eventLocation" class="form-control rounded-0 fs-4"  placeholder="Event Location"
                        required data-error="Please enter the location of event">

                        <label for="" class="text-secondary mt-1">( Please have a note if you want us on different
                            locations with the timing. A small travel fee will be involved if it is out of
                            Auckland)</label>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>

            <div class="col-12 mt-4 pt-1">
                <div class="form-group">
                    <div class="controls">
                        <label for="inputState" class="form-label">What's the Package you want to ahead please? *</label>

                        <input type="text" id="packageType" class="form-control rounded-0 fs-4"  placeholder="Gold Package"
                        required data-error="Please enter the hours of required services">

                        <div class="help-block with-errors"></div>

                    </div>
                </div>
            </div>
           
    
            <div class="col-12 mt-4 pt-1">
                <div class="form-group">
                    <div class="controls">
                        <label for="inputState" class="form-label">NUMBER OF GUESTS *</label>
                        <input type="text" id="numberGuests" class="form-control rounded-0 fs-4" placeholder="Number of guests"
                        required data-error="Please enter the number of guests">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>

            <div class="col-12 mt-4 pt-1">
                <div class="form-group">
                    <div class="controls">
                        <label for="inputState" class="form-label">DO YOU PROVIDE FOOD FOR THE PHOTOGRAPHER? *</label>
                        <br>
                        <input type="radio" id="food" name="food" value="Yes"> &nbsp;Yes<br>
                        <input type="radio" id="food" name="food" value="No"> &nbsp; No<br>
                        <label for="" class="text-secondary mt-1">If not please mention it. Our priority is your event,
                            not the food.</label>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>

            
            <div class="col-12 mt-4 pt-1 mb-4">
                <div class="form-group">
                    <div class="controls">
                        <label for="inputState" class="form-label">WHAT SERVICES DO YOU NEED FROM US? *</label>
                        <textarea id="services" rows="7" placeholder="Photography or Videography or DJ"
                            class="form-control rounded-0 fs-4" required
                            data-error="Please enter the informations"></textarea>
                        <label for="" class="text-secondary mt-1">Make sure if you select video or DJ services there
                            will be an extra cost. Mention the hours you need</label>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
        
            <div class="col-12 mt-4 pt-1">
                <div class="form-group">
                    <div class="controls">
                        <label for="inputState" class="form-label">ANYTHING THAT I NEED TO KNOW ABOUT THE EVENT</label>

                        <input type="text" id="anyOtherInformation" class="form-control rounded-0 fs-4" placeholder="Extra information about event">

                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
     
     
        
      
 

            <button type="submit" id="submit" class="btn btn-dark rounded-0 my-4 fs-5 px-4"></i> BOOK NOW</button>
            <div id="msgSubmit" class="h3 text-center hidden"></div>
            <div class="clearfix"></div>

        </form>
        <br />
        <!-- Contact Form Ends -->

        <h2 class="mt-5">More info ...</h2>
        <p>The final edited video will be the duration of the package you select. Please read and double check with me on this regard.</p>
        <p>Can’t wait to capture your awesome event. </p>
        <p class="mb-5 pb-5 mt-4">PIXEL TEAM.</p>
    </div>


    <!-- Footer -->
    <?php include '../../../../assets/includes/footer.php'?>
    <script type="text/javascript" src="../../../../assets/js/event-videography-booking-script.js"></script>
</body>

</html>