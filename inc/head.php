<!-- Settings -->
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Imports -->
<link rel="stylesheet" href="/style/style.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Nixie+One&display=swap" rel="stylesheet">
<!-- Favicon -->
<link rel="icon" href="/images/favicon.png" type="image/png">
<!-- Author -->
<meta name="author" content="matheodino, hi@matheonlht.com">

<?php // Variables

// Identity
$site = "Bella Yoga";
$address = "31, rue du Bassin 38100 Grenoble";
$phone = "09.87.65.43.21";
$email = "hello@bella-yoga.com";

// Utility
$slug = stripslashes(str_replace("/", "", dirname($_SERVER["SCRIPT_NAME"]))); // Get current page slug
$active = "class=\"active\"" ?>