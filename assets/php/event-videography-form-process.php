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

// Event Location
if (empty($_POST["eventLocation"])) {
    $errorMSG .= "Event Location is required ";
} else {
    $eventLocation = $_POST["eventLocation"];
}


// Package Type
if (empty($_POST["packageType"])) {
    $errorMSG .= "Package Type is required ";
} else {
    $packageType = $_POST["packageType"];
}

// Number of Guests
if (empty($_POST["numberGuests"])) {
    $errorMSG .= "Number of Guests is required ";
} else {
    $numberGuests = $_POST["numberGuests"];
}

// Foods
if (empty($_POST["food"])) {
    $errorMSG .= "Information about food supply is required ";
} else {
    $food = $_POST["food"];
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




$EmailTo = "banuka.mawelage@gmail.com";
$Subject = "Enquiry From Pixelstudio Event Videography Booking";

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Phone: ";
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
$Body .= "Selected Package: ";
$Body .= $packageType;
$Body .= "\n";
$Body .= "Event Location: ";
$Body .= $eventLocation;
$Body .= "\n";
$Body .= "Number of Guests: ";
$Body .= $numberGuests;
$Body .= "\n";
$Body .= "Food for Photographer: ";
$Body .= $food;
$Body .= "\n";
$Body .= "What Services Do you need from us?: ";
$Body .= $services;
$Body .= "\n";
$Body .= "Any Other Information: ";
$Body .= $anyOtherInformation;
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