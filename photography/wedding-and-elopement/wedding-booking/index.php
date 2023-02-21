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
    <!-- Navigation Bar Starts -->
    <section class="navigation">
        <div class="nav-container">

            <div class="logo">
                <a href="../../../index.html"><img src="../../../assets/images/logo.png" class="logo-mobile"
                        width="140"></a>
            </div>

            <nav>
                <div class="nav-mobile">
                    <div id="navbar-toggle" style="z-index: 2;" href=""><span></span></div>
                </div>
                <ul class="justify-content-center" style="z-index: 1;">
                    <li>
                        <a href="../../../index.html">Home</a>
                    </li>
                    <li>
                        <a href="../../../about-us/index.html">About Us</a>
                    </li>
                    <li>
                        <a href="../index.html">Photography</a>
                    </li>

                    <div class="logo px-3">
                        <a href="../../../index.html"><img src="../../../assets/images/logo.png" class="logo-img"></a>
                    </div>

                    <li>
                        <a href="#videography">Videography</a>
                    </li>
                    <li>
                        <a href="#eventplanning">Event Planning</a>
                    </li>
                    <li>
                        <div class="dropdown">
                            <a href="#more" class="dropbtn">More</a>
                            <div class="dropdown-content">
                                <a href="#more" style="color: black;">CONTACT US</a>
                                <a href="#more" style="color: black;">PHOTO SESSION COPY</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
    <!-- Navigation Bar Ends -->

    <!-- Hero Section -->
    <div class="hero-section-background-wedding-booking text-center" style="padding-top: 150px;">
        <div class="overlay-frame-2">
            <h1 class="position-absolute top-50 start-50 translate-middle display-4 text-white">Wedding Photography</h1>
        </div>
    </div>

    <!-- Wedding Booking packages -->
    <div class="container my-5 pt-4">
        <h3 class="text-center mb-5 display-6">Why Waiting , Book Now</h3>
        <hr class="w-50 ms-auto me-auto" />
        <p class="fs-5 text-center my-5">Do you mind filling up this form to go ahead and confirm the booking. Thanks
        </p>

        <!-- Contact Form  Starts  -->
        <form role="form" id="wedding-booking-form" class="contact-form mt-5 pt-4" data-toggle="validator" class="shake">
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
                        <input type="text" id="event" class="form-control rounded-0 fs-4"   placeholder="Ruby and Sam's wedding" 
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
                    </div>
                </div>
            </div>
            <div class="col-12 mt-4 pt-1">
                <div class="form-group">
                    <div class="controls">
                        <label for="inputState" class="form-label">HOW MANY HOURS *</label>
                        <input type="text" id="duration" class="form-control rounded-0 fs-4"  placeholder="How many hours do you require our services"
                        required data-error="Please enter the hours of required services">

                        <div class="help-block with-errors"></div>

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
     
            <div class="col-12 mt-4 pt-1">
                <div class="form-group">
                    <div class="controls">
                        <label for="inputState" class="form-label">BEST PERSON TO CONTACT ON THE DAY *</label>

                        <input type="text" id="bestPersonToContact" class="form-control rounded-0 fs-4" placeholder="Person to contact"
                        required data-error="Please enter the name of the person to contact">

                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>

        
            <div class="col-12 mt-4 pt-1">
                <label for="inputState" class="form-label">IF YOU NEED A CANVAS PRINT</label><br />
                <input type="radio" id="canvasPrint" name="canvasPrint" value="Yes"> &nbsp;Yes<br>
                <input type="radio" id="canvasPrint" name="canvasPrint" value="No"> &nbsp; No<br>
            </div>


            <div class="col-12 mt-4 pt-1">
                <div class="form-group">
                    <div class="controls">
                        <label for="inputState" class="form-label">WHERE DID YOU HEAR ABOUT US *</label>
                        <input type="text" id="howKnow" class="form-control rounded-0 fs-4" placeholder="How do you know about us"
                        required data-error="Please enter the name of the person to contact">



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
        <ul class="mt-4 fs-5">
            <li class="mt-3">You will have to pay advance payment to go ahead and lock the date for your event.</li>
            <li class="mt-3">Edit the photos will take up to 50 working days. If you want sooner that it will be an
                extra cost.</li>
            <li class="mt-3">Photos will be provided on a private online downloadable gallery.</li>
            <li class="mt-3">We capture 60 good photos per hour.</li>
            <li class="mt-3">Please note that if you need more than that please write a comment "Extra information your
                event" in above form.</li>
            <li class="mt-3">There will be an extra charge for additional photos.</li>
        </ul>
        <p class="mb-5 pb-5 mt-4">PIXEL TEAM.</p>
    </div>

    <!-- Footer -->
    <section class="bg-light">
        <div class="container">
            <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
                <div class="col mb-3">

                    <div class="logo px-3">
                        <a href="./"><img src="../../../assets/images/Pixel Studio-dark.png"
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
                        <li class="nav-item mb-2"><a href="../../../index.html" class="nav-link p-0 text-muted">Home</a></li>
                        <li class="nav-item mb-2"><a href="../../../photography/index.html"
                                class="nav-link p-0 text-muted">Photography</a></li>
                        <li class="nav-item mb-2"><a href="../../../videography/index.html"
                                class="nav-link p-0 text-muted">Videography</a></li>
                        <li class="nav-item mb-2"><a href="../../../event-planning/index.html"
                                class="nav-link p-0 text-muted">Event Planning</a></li>
                        <li class="nav-item mb-2"><a href="../../../contact-us/index.html"
                                class="nav-link p-0 text-muted">Contact Us</a></li>
                    </ul>
                </div>

                <div class="col mb-3">
                    <h5>Services</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="../../../about-us/index.html"
                                class="nav-link p-0 text-muted">About
                                Us</a></li>
                        <li class="nav-item mb-2"><a href="../../../photography/index.html"
                                class="nav-link p-0 text-muted">Photography</a></li>
                        <li class="nav-item mb-2"><a href="../../../videography/index.html"
                                class="nav-link p-0 text-muted">Videography</a></li>
                        <li class="nav-item mb-2"><a href="../../../event-planning/index.html"
                                class="nav-link p-0 text-muted">Event Planning</a></li>
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


    <!-- Banner -->
    <div class="banner-2 position-relative mb-5">
        <div class="overlay-frame">
            <div class="position-absolute top-50 start-50 translate-middle text-white">
                <h1 class="display-5 text-center">Can't wait to capture your big day!</h1>
            </div>
        </div>
    </div>


    <script src="../../../assets/jquery/jquery-3.6.3.min.js"></script>
    <script src="../../../assets/bootstrap/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="../../../assets/js/form-validator.min.js"></script>
    <script type="text/javascript" src="../../../assets/js/wedding-booking-script.js"></script>
    <script src="../../../assets/js/script.js"></script>
</body>

</html>