<?php
include "./config/db.php";
//GET VISTORS
$user_ip = $_SERVER['REMOTE_ADDR'];
$check_ip = mysqli_query($conn, "SELECT visitorip FROM traffic WHERE page ='home' and visitorip ='$user_ip'");
if(mysqli_num_rows($check_ip) >=1){
    //not unique user
}else{
    $insertQuery = mysqli_query($conn, "INSERT INTO traffic (page, visitorip) VALUE ('home','$user_ip')");
}

?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>AWA Engineering Limited&reg; :: Keeping the environment green</title>

    <meta name="description" content="Delivering professional engineering and environmental solutions for the oil and gas sector, including waste management, environmental studies, fumigation and pest control, procurement, corrosion control, and EMS services.">
    <meta name="keywords" content="environmental engineering, waste management, environmental studies, fumigation, pest control, odor control, procurement services, corrosion control, environmental management system, EMS, oil and gas engineering, upstream oil and gas services, downstream oil and gas services, environmental consulting, engineering solutions, environmental compliance, project management, technical consulting, sustainability solutions, industrial waste management, environmental monitoring">
    <meta name="author" content="Webify.com.ng">

    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">

    <link rel="apple-touch-icon" sizes="57x57" href="./assets/img/favicon.svg">
    <link rel="apple-touch-icon" sizes="60x60" href="./assets/img/favicon.svg">
    <link rel="apple-touch-icon" sizes="72x72" href="./assets/img/favicon.svg">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/favicon.svg">
    <link rel="apple-touch-icon" sizes="114x114" href="./assets/img/favicon.svg">
    <link rel="apple-touch-icon" sizes="120x120" href="./assets/img/favicon.svg">
    <link rel="apple-touch-icon" sizes="144x144" href="./assets/img/favicon.svg">
    <link rel="apple-touch-icon" sizes="152x152" href="./assets/img/favicon.svg">
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/img/favicon.svg">
    <link rel="icon" type="image/png" sizes="192x192" href="./assets/img/favicon.svg">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/img/favicon.svg">
    <link rel="icon" type="image/png" sizes="96x96" href="./assets/img/favicon.svg">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/img/favicon.svg">

    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="./assets/img/favicon.svg">

    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&amp;family=Outfit:wght@100..900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/app.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body class="">
    <div class="cursor-follower"></div>
    <div class="slider-drag-cursor">
        <i class="fas fa-angle-left me-2"></i> DRAG <i class="fas fa-angle-right ms-2"></i>
    </div>
    <div class="preloader">
        <button class="th-btn preloaderCls">Cancel Preloader</button>
        <div class="preloader-inner">
            <div class="mb-4">
                <img src="./assets/img/awa-logo-alldark.svg" width="200" alt="img">
            </div>
        </div>
    </div>