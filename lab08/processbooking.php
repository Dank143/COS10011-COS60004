<!DOCTYPE html>
<html lang="en">
<head>
	<title>Rohirrim Booking</title>
	<meta charset="utf-8"/>
	<meta name="description" content="Rohirrim Booking Form" />
	<meta name="keywords"    content="Lab 08" />
</head>

<body>
	<h1>"Rohirrim Tour Booking Confirmation"</h1>

<?php
    function sanitise_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // First name
    if (isset ($_POST["firstname"])) {
        $firstname = $_POST["firstname"];
        // echo "<p>This is a test: Your first name is $firstname</p>";
    }
    else {
        // Redirect to form, if process not triggered by a form submit
        header ("location: register.html");
    }
        
    // Last name
    if (isset ($_POST["lastname"])) {
        $lastname = $_POST["lastname"];
    }
    else {
        // Redirect to form, if process not triggered by a form submit
        header ("location: register.html");
    }
    
    $errMsg = "";
    // Age
    if (isset($_POST["age"])) 
    {
        $age = $_POST["age"];
        if (!is_numeric($age) || $age < 10 || $age > 10000) 
        {
            $errMsg .= "<p>Age must be a numeric value between 10 and 10,000.</p>";
        }
    } 
    else {
        // Redirect to form, if process not triggered by a form submit
        header ("location: register.html");
    }

    // Food
    if (isset ($_POST["food"])) {
        $food = $_POST["food"];
    }
    else {
        // Redirect to form, if process not triggered by a form submit
        header ("location: register.html");
    }
        
    // Party size
    if (isset ($_POST["partySize"])) {
        $partySize = $_POST["partySize"];
    }
    else {
        // Redirect to form, if process not triggered by a form submit
        header ("location: register.html");
    }

    // Species
    if (isset ($_POST["species"]))
        $species = $_POST["species"];
    else 
        $species = "Unknown species";

    // Tours
    $tour = "";
    if (isset ($_POST["1day"]))    $tour = $tour. "One-day tour   ";
    if (isset ($_POST["4day"]))    $tour = $tour. "Four-day tour   ";
    if (isset ($_POST["10day"]))    $tour = $tour. "Ten-day tour   ";

    $firstname = sanitise_input($firstname);
    $lastname = sanitise_input($lastname);
    $species = sanitise_input($species);
    $age = sanitise_input($age);
    $food = sanitise_input($food);
    $partySize = sanitise_input($partySize);

    // validate firstname 
    if ($firstname=="")
    {
        $errMsg .= "<p>You must enter your first name.</p>";
    }
    else if (!preg_match("/^[a-zA-Z]*$/",$firstname))
    {
        $errMsg .= "<p>Only alpha letters allowed in your first name.</p>";
    }

    // validate Lastname 
    if ($lastname=="")
    {
        $errMsg .= "<p>You must enter your Last name.</p>";
    }
    else if (!preg_match("/^[a-zA-Z]*$/",$lastname))
    {
        $errMsg .= "<p>Only alpha letters allowed in your Last name.</p>";
    }

    if($errMsg != "")
    {
        echo "<p>$errMsg</p>";
    }
    else 
    {
        // Print the confirmation message
        echo "<p> Welcome $firstname $lastname! <br />
            You are now booked on the $tour <br />
            Species: $species<br />
            Age: $age<br />
            Meal Preference: $food<br/>
            Number of travellers: $partySize</p>";
    }
?>

</body>