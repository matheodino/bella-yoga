<? // Identity
$site = "Bella Yoga";
$address = "<a href=\"http://maps.google.fr/\" target=\"_blank\">31, rue du Bassin 38100 Grenoble</a>";
$phone = "<a href=\"tel:+33987654321\">09 87 65 43 21</a>";
$email = "<a href=\"mailto:hello@bella-yoga.com\">hello@bella-yoga.com</a>";

// Utility
$slug = stripslashes(str_replace("/", "", dirname($_SERVER["SCRIPT_NAME"]))); // Get current page slug
$path = dirname($_SERVER["SCRIPT_NAME"]);
$root = $path == "/bella-yoga" ? true : false;
$backward = $root == true ? "" : "../";
$active = "class=\"active\"";
