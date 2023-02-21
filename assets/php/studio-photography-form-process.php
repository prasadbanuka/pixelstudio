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

// photoshootType
if (empty($_POST["photoshootType"])) {
    $errorMSG .= "Photoshoot Type is required ";
} else {
    $photoshootType = $_POST["photoshootType"];
}

// Event Date
if (empty($_POST["date"])) {
    $errorMSG .= "Event Date is required ";
} else {
    $date = $_POST["date"];
}

// Event Time
if (empty($_POST["time"])) {
    $errorMSG .= "Event Time is required ";
} else {
    $time = $_POST["time"];
}

// Event Duration
if (empty($_POST["duration"])) {
    $errorMSG .= "Duration is required ";
} else {
    $duration = $_POST["duration"];
}

// Any Other Information
if (empty($_POST["anyOtherInformation"])) {
    $errorMSG .= "Any Other Information is required ";
} else {
    $anyOtherInformation = $_POST["anyOtherInformation"];
}

// Members Count
if (empty($_POST["membersAmount"])) {
    $errorMSG .= "Members Count is required ";
} else {
    $membersAmount = $_POST["membersAmount"];
}


// Canvas Printing
if (empty($_POST["canvasPrint"])) {
    $errorMSG .= "Canvas Print is required ";
} else {
    $canvasPrint = $_POST["canvasPrint"];
}


$EmailTo = "banuka.mawelage@gmail.com";
$Subject = "Enquiry From Pixel Studio Studio Photography Order";

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
$Body .= "Type of Photoshoot: ";
$Body .= $photoshootType;
$Body .= "\n";
$Body .= "Event Date: ";
$Body .= $date;
$Body .= "\n";
$Body .= "Event Time: ";
$Body .= $time;
$Body .= "\n";
$Body .= "Event Duration: ";
$Body .= $duration;
$Body .= "\n";
$Body .= "Any Other Information: ";
$Body .= $anyOtherInformation;
$Body .= "\n";
$Body .= "Amount of Members: ";
$Body .= $membersAmount;
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