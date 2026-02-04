<?php
require_once "./config/db.php";
                
    $select_query = "SELECT * FROM about";

    $result = mysqli_query($conn, $select_query);

    // Check for query errors
    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $aboutID = $row['aboutID'];
            $breadcrumb = $row['breadcrumb'];
            $quoteTitle = $row['quoteTitle'];
            $quote = $row['quote'];
            $sectionOneSubTitle = $row['sectionOneSubTitle'];
            $sectionOneTitle = $row['sectionOneTitle'];
            $sectionOneText = $row['sectionOneText'];
            $sectionTwoImage = $row['sectionTwoImage'];
            $sectionTwoTitle = $row['sectionTwoTitle'];
            $sectionTwoText = $row['sectionTwoText'];
            $sectionThreeText = $row['sectionThreeText'];
            $sectionThreeImage = $row['sectionThreeImage'];
            $sectionThreeSubTextOne = $row['sectionThreeSubTextOne'];
            $sectionThreeSubTextTwo = $row['sectionThreeSubTextTwo'];
            $sectionThreeSubTextThree = $row['sectionThreeSubTextThree'];
            $sectionFourSubTitle = $row['sectionFourSubTitle'];
            $sectionFourText = $row['sectionFourText'];
            $sectionFourImage = $row['sectionFourImage'];
        }
    }