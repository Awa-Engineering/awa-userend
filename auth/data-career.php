<?php
require_once "./config/db.php";
                
    $select_query = "SELECT * FROM career";

    $result = mysqli_query($conn, $select_query);

    // Check for query errors
    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $careerID = $row['careerID'];
            $breadcrumb = $row['breadcrumb'];
            $quoteTitle = $row['quoteTitle'];
            $quoteOne = $row['quoteOne'];
            $quoteTwo = $row['quoteTwo'];
            $careerImage = $row['careerImage'];
            $title = $row['title'];
            $text = $row['text'];
            $careerInnerImage = $row['careerInnerImage'];
            $careerInnerImagetitle = $row['careerInnerImagetitle'];
        }
    }
