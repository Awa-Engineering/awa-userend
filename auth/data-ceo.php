<?php
require_once "./config/db.php";
                
    $select_query = "SELECT * FROM ceo";

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
            $ceoImage = $row['ceoImage'];
            $title = $row['title'];
            $subTitle = $row['subTitle'];
            $text = $row['text'];
            $counter = $row['counter'];
        }
    }