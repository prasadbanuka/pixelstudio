<?php

$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Name is required ";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email is required ";
} else {
    $email = $_POST["email"];
}

// Phone
if (empty($_POST["phone"])) {
    $errorMSG .= "Phone is required ";
} else {
    $phone = $_POST["phone"];
}

// Event
if (empty($_POST["event"])) {
    $errorMSG .= "Event is required ";
} else {
    $event = $_POST["event"];
}

// Event Date
if (empty($_POST["eventDate"])) {
    $errorMSG .= "Event Date is required ";
} else {
    $eventDate = $_POST["eventDate"];
}

// Event Time
if (empty($_POST["eventTime"])) {
    $errorMSG .= "Event Time is required ";
} else {
    $eventTime = $_POST["eventTime"];
}

// Event Duration
if (empty($_POST["duration"])) {
    $errorMSG .= "Duration is required ";
} else {
    $duration = $_POST["duration"];
}

// Event Location
if (empty($_POST["location"])) {
    $errorMSG .= "Location is required ";
} else {
    $location = $_POST["location"];
}


// Services
if (empty($_POST["services"])) {
    $errorMSG .= "Services is required ";
} else {
    $services = $_POST["services"];
}

// Any Other Information
if (empty($_POST["anyOtherInformation"])) {
    $errorMSG .= "Any Other Information is required ";
} else {
    $anyOtherInformation = $_POST["anyOtherInformation"];
}

// Canvas Printing
if (empty($_POST["canvasPrint"])) {
    $errorMSG .= "Canvas Print is required ";
} else {
    $canvasPrint = $_POST["canvasPrint"];
}


$EmailTo = "banuka.mawelage@gmail.com";
$Subject = "Enquiry From Pixel Studio Outdoor Photography Order";

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Telephone: ";
$Body .= $phone;
$Body .= "\n";
$Body .= "Event: ";
$Body .= $event;
$Body .= "\n";
$Body .= "Event Date: ";
$Body .= $eventDate;
$Body .= "\n";
$Body .= "Event Time: ";
$Body .= $eventTime;
$Body .= "\n";
$Body .= "Event Duration: ";
$Body .= $duration;
$Body .= "\n";
$Body .= "Event Location: ";
$Body .= $location;
$Body .= "\n";
$Body .= "Services: ";
$Body .= $services;
$Body .= "\n";
$Body .= "Any Other Information: ";
$Body .= $anyOtherInformation;
$Body .= "\n";
$Body .= "Canvas Printing: ";
$Body .= $canvasPrint;
$Body .= "\n";

// "From:".$email

// send email
$success = mail($EmailTo, $Subject, $Body);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}

?>