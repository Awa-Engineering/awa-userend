<?php
require_once "./config/db.php";

    $title = "";
    $firstParagraph = "";
    $secondParagraph = "";
    $thirdParagraph = "";
    $fourthParagraph = "";
    $fifthParagraph = "";
    $sixthParagraph = "";
    $hero_filePath = "";
    $breadcrumb_filePath = "";
                
    $select_query = "SELECT 
        services.serviceID AS service_id,
        services.title,
        services.firstParagraph,
        services.secondParagraph,
        services.thirdParagraph,
        services.fourthParagraph,
        services.fifthParagraph,
        services.sixthParagraph,
        hero.serviceID AS hero_serviceID,
        hero.filePath AS hero_filePath,
        breadcrumb.serviceID AS breadcrumb_serviceID,
        breadcrumb.filePath AS breadcrumb_filePath
    FROM services
    LEFT JOIN hero ON hero.serviceID = services.serviceID
    LEFT JOIN breadcrumb ON breadcrumb.serviceID = services.serviceID
    WHERE services.serviceID = '8' LIMIT 1";

    $result = mysqli_query($conn, $select_query);

    // Check for query errors
    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $service_id = $row['service_id'];
            $title = $row['title'];
            $firstParagraph = $row['firstParagraph'];
            $secondParagraph = $row['secondParagraph'];
            $thirdParagraph = $row['thirdParagraph'];
            $fourthParagraph = $row['fourthParagraph'];
            $fifthParagraph = $row['fifthParagraph'];
            $sixthParagraph = $row['sixthParagraph'];
            $hero_filePath = $row['hero_filePath'];
            $breadcrumb_filePath = $row['breadcrumb_filePath'];
        }
    }

    $media_images = [];
    $media_two_images = [];
    $media_three_images = [];
    $media_four_images = [];
    $media_five_images = [];
    $media_six_images = [];

    $media_query = "SELECT filePath FROM media WHERE serviceID = '8'";
    $media_result = mysqli_query($conn, $media_query);

    if ($media_result && mysqli_num_rows($media_result) > 0) {
        while ($row = mysqli_fetch_assoc($media_result)) {
            $media_images[] = $row['filePath'];
        }
    }

    $media_two_query = "SELECT filePath FROM media_two WHERE serviceID = '8'";
    $media_two_result = mysqli_query($conn, $media_two_query);
    if ($media_two_result && mysqli_num_rows($media_two_result) > 0) {
        while ($row = mysqli_fetch_assoc($media_two_result)) {
            $media_two_images[] = $row['filePath'];
        }
    }

    $media_three_query = "SELECT filePath FROM media_three WHERE serviceID = '8'";
    $media_three_result = mysqli_query($conn, $media_three_query);
    if ($media_three_result && mysqli_num_rows($media_three_result) > 0) {
        while ($row = mysqli_fetch_assoc($media_three_result)) {
            $media_three_images[] = $row['filePath'];
        }
    }

    $media_four_query = "SELECT filePath FROM media_four WHERE serviceID = '8'";
    $media_four_result = mysqli_query($conn, $media_four_query);
    if ($media_four_result && mysqli_num_rows($media_four_result) > 0) {
        while ($row = mysqli_fetch_assoc($media_four_result)) {
            $media_four_images[] = $row['filePath'];
        }
    }

    $media_five_query = "SELECT filePath FROM media_five WHERE serviceID = '8'";
    $media_five_result = mysqli_query($conn, $media_five_query);
    if ($media_five_result && mysqli_num_rows($media_five_result) > 0) {
        while ($row = mysqli_fetch_assoc($media_five_result)) {
            $media_five_images[] = $row['filePath'];
        }
    }

    $media_six_query = "SELECT filePath FROM media_six WHERE serviceID = '8'";
    $media_six_result = mysqli_query($conn, $media_six_query);
    if ($media_six_result && mysqli_num_rows($media_six_result) > 0) {
        while ($row = mysqli_fetch_assoc($media_six_result)) {
            $media_six_images[] = $row['filePath'];
        }
    }