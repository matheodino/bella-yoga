<? // Identity
$site = "Bella Yoga";
$address = "31, rue du Bassin 38100 Grenoble";
$phone = "09.87.65.43.21";
$email = "hello@bella-yoga.com";

// Utility
$slug = stripslashes(str_replace("/", "", dirname($_SERVER["SCRIPT_NAME"]))); // Get current page slug
$active = "class=\"active\"";
