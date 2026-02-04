<?php

    $jobID = $_GET['id'];
                
    $select_query = "SELECT * FROM jobs WHERE jobID ='$jobID'";
    $result = mysqli_query($conn, $select_query);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            $jobID = $row['jobID'];
            $title = $row['title'];
            $jobSummary = $row['jobSummary'];
            $mainTasks = $row['mainTasks'];
            $jobSpecification = $row['jobSpecification'];
        }
    }