<? // Identity
$site = "Bella Yoga";
$address = "<a href=\"http://maps.google.fr/\" target=\"_blank\">31, rue du Bassin 38100 Grenoble</a>";
$phone = "<a href=\"tel:+33987654321\">09 87 65 43 21</a>";
$email = "<a href=\"mailto:hello@bella-yoga.com\">hello@bella-yoga.com</a>";

// Utility
$root = $page == "Accueil" ? true : false; // Detect if the page is the root index
$backward = $root == true ? "" : "../";
$active = "class=\"active\"";
