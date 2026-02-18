<?php
// set a default environment
$WEBSITE_ENVIRONMENT = "Development";

// detect if the site is live
if (stristr($_SERVER['HTTP_HOST'], 'localhost') === FALSE) {
    $WEBSITE_ENVIRONMENT = "Production";
}

// database and error reporting setup
if ($WEBSITE_ENVIRONMENT == "Development") {
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "awa";

    // show all errors except notices
    error_reporting(E_ALL ^ E_NOTICE);
} else {
    $host = "localhost";
    $user = "awaengin_app";
    $password = "o5%4+7XJ=0Y0lEy]";
    $database = "awaengin_app";

    if (!defined("APP_ENVIRONMENT")) define("APP_ENVIRONMENT", "Production");
    if (!defined("APP_BASE_URL")) define("APP_BASE_URL", "https://www.awaengineeringng.com/admin");

    // optionally: turn off notices but show warnings/errors
    error_reporting(E_ALL ^ E_NOTICE);
}

// connect to the database
$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

// now $conn is ready for queries
?>