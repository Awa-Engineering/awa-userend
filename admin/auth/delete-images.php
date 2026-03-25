<?php

if (isset($_POST['delete_gallery_image_btn_six'])) {

    $mediaID = intval($_POST['gallery_image_id']);

    // STEP 1: Get the file path from the database securely
    $stmt = mysqli_prepare($conn, "SELECT filePath FROM media_six WHERE mediaID = ?");
    mysqli_stmt_bind_param($stmt, 'i', $mediaID);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);
    mysqli_stmt_close($stmt);

    if ($row) {
        $filePath = $row['filePath']; // e.g., upload/image.jpg

        // STEP 2: Build absolute path
        $fullPath = dirname(__DIR__) . '/' . $filePath; // Adjust based on project root

        // STEP 3: Delete file from folder
        if (!empty($filePath) && file_exists($fullPath)) {
            unlink($fullPath);
        } else {
            $_SESSION['error_message'] = "File not found in folder: " . $fullPath;
        }

        // STEP 4: Delete from database
        $deleteStmt = mysqli_prepare($conn, "DELETE FROM media_six WHERE mediaID = ?");
        mysqli_stmt_bind_param($deleteStmt, 'i', $mediaID);

        if (mysqli_stmt_execute($deleteStmt)) {
            $_SESSION['success_message'] = "Image deleted successfully.";
        } else {
            $_SESSION['error_message'] = "Failed to delete from database.";
        }

        mysqli_stmt_close($deleteStmt);

    } else {
        $_SESSION['error_message'] = "Image not found in database.";
    }

    // STEP 5: Redirect to refresh
    echo "<meta http-equiv='refresh' content='0; URL=" . $_SERVER['REQUEST_URI'] . "'>";
    exit();
}



if (isset($_POST['delete_gallery_image_btn_five'])) {

    $mediaID = intval($_POST['gallery_image_id']);

    // STEP 1: Get the file path from the database securely
    $stmt = mysqli_prepare($conn, "SELECT filePath FROM media_five WHERE mediaID = ?");
    mysqli_stmt_bind_param($stmt, 'i', $mediaID);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);
    mysqli_stmt_close($stmt);

    if ($row) {
        $filePath = $row['filePath']; // e.g., upload/image.jpg

        // STEP 2: Build absolute path
        $fullPath = dirname(__DIR__) . '/' . $filePath; // Adjust based on project root

        // STEP 3: Delete file from folder
        if (!empty($filePath) && file_exists($fullPath)) {
            unlink($fullPath);
        } else {
            $_SESSION['error_message'] = "File not found in folder: " . $fullPath;
        }

        // STEP 4: Delete from database
        $deleteStmt = mysqli_prepare($conn, "DELETE FROM media_five WHERE mediaID = ?");
        mysqli_stmt_bind_param($deleteStmt, 'i', $mediaID);

        if (mysqli_stmt_execute($deleteStmt)) {
            $_SESSION['success_message'] = "Image deleted successfully.";
        } else {
            $_SESSION['error_message'] = "Failed to delete from database.";
        }

        mysqli_stmt_close($deleteStmt);

    } else {
        $_SESSION['error_message'] = "Image not found in database.";
    }

    // STEP 5: Redirect to refresh
    echo "<meta http-equiv='refresh' content='0; URL=" . $_SERVER['REQUEST_URI'] . "'>";
    exit();
}




if (isset($_POST['delete_gallery_image_btn_four'])) {

    $mediaID = intval($_POST['gallery_image_id']);

    // STEP 1: Get the file path from the database securely
    $stmt = mysqli_prepare($conn, "SELECT filePath FROM media_four WHERE mediaID = ?");
    mysqli_stmt_bind_param($stmt, 'i', $mediaID);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);
    mysqli_stmt_close($stmt);

    if ($row) {
        $filePath = $row['filePath']; // e.g., upload/image.jpg

        // STEP 2: Build absolute path
        $fullPath = dirname(__DIR__) . '/' . $filePath; // Adjust based on project root

        // STEP 3: Delete file from folder
        if (!empty($filePath) && file_exists($fullPath)) {
            unlink($fullPath);
        } else {
            $_SESSION['error_message'] = "File not found in folder: " . $fullPath;
        }

        // STEP 4: Delete from database
        $deleteStmt = mysqli_prepare($conn, "DELETE FROM media_four WHERE mediaID = ?");
        mysqli_stmt_bind_param($deleteStmt, 'i', $mediaID);

        if (mysqli_stmt_execute($deleteStmt)) {
            $_SESSION['success_message'] = "Image deleted successfully.";
        } else {
            $_SESSION['error_message'] = "Failed to delete from database.";
        }

        mysqli_stmt_close($deleteStmt);

    } else {
        $_SESSION['error_message'] = "Image not found in database.";
    }

    // STEP 5: Redirect to refresh
    echo "<meta http-equiv='refresh' content='0; URL=" . $_SERVER['REQUEST_URI'] . "'>";
    exit();
}




if (isset($_POST['delete_gallery_image_btn_three'])) {

    $mediaID = intval($_POST['gallery_image_id']);

    // STEP 1: Get the file path from the database securely
    $stmt = mysqli_prepare($conn, "SELECT filePath FROM media_three WHERE mediaID = ?");
    mysqli_stmt_bind_param($stmt, 'i', $mediaID);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);
    mysqli_stmt_close($stmt);

    if ($row) {
        $filePath = $row['filePath']; // e.g., upload/image.jpg

        // STEP 2: Build absolute path
        $fullPath = dirname(__DIR__) . '/' . $filePath; // Adjust based on project root

        // STEP 3: Delete file from folder
        if (!empty($filePath) && file_exists($fullPath)) {
            unlink($fullPath);
        } else {
            $_SESSION['error_message'] = "File not found in folder: " . $fullPath;
        }

        // STEP 4: Delete from database
        $deleteStmt = mysqli_prepare($conn, "DELETE FROM media_three WHERE mediaID = ?");
        mysqli_stmt_bind_param($deleteStmt, 'i', $mediaID);

        if (mysqli_stmt_execute($deleteStmt)) {
            $_SESSION['success_message'] = "Image deleted successfully.";
        } else {
            $_SESSION['error_message'] = "Failed to delete from database.";
        }

        mysqli_stmt_close($deleteStmt);

    } else {
        $_SESSION['error_message'] = "Image not found in database.";
    }

    // STEP 5: Redirect to refresh
    echo "<meta http-equiv='refresh' content='0; URL=" . $_SERVER['REQUEST_URI'] . "'>";
    exit();
}



if (isset($_POST['delete_gallery_image_btn_two'])) {

    $mediaID = intval($_POST['gallery_image_id']);

    // STEP 1: Get the file path from the database securely
    $stmt = mysqli_prepare($conn, "SELECT filePath FROM media_two WHERE mediaID = ?");
    mysqli_stmt_bind_param($stmt, 'i', $mediaID);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);
    mysqli_stmt_close($stmt);

    if ($row) {
        $filePath = $row['filePath']; // e.g., upload/image.jpg

        // STEP 2: Build absolute path
        $fullPath = dirname(__DIR__) . '/' . $filePath; // Adjust based on project root

        // STEP 3: Delete file from folder
        if (!empty($filePath) && file_exists($fullPath)) {
            unlink($fullPath);
        } else {
            $_SESSION['error_message'] = "File not found in folder: " . $fullPath;
        }

        // STEP 4: Delete from database
        $deleteStmt = mysqli_prepare($conn, "DELETE FROM media_two WHERE mediaID = ?");
        mysqli_stmt_bind_param($deleteStmt, 'i', $mediaID);

        if (mysqli_stmt_execute($deleteStmt)) {
            $_SESSION['success_message'] = "Image deleted successfully.";
        } else {
            $_SESSION['error_message'] = "Failed to delete from database.";
        }

        mysqli_stmt_close($deleteStmt);

    } else {
        $_SESSION['error_message'] = "Image not found in database.";
    }

    // STEP 5: Redirect to refresh
    echo "<meta http-equiv='refresh' content='0; URL=" . $_SERVER['REQUEST_URI'] . "'>";
    exit();
}



if (isset($_POST['delete_gallery_image_btn_one'])) {

    $mediaID = intval($_POST['gallery_image_id']);

    // STEP 1: Get file path from DB (SECURE)
    $stmt = mysqli_prepare($conn, "SELECT filePath FROM media WHERE mediaID = ?");
    mysqli_stmt_bind_param($stmt, 'i', $mediaID);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);
    mysqli_stmt_close($stmt);

    if ($row) {

        $filePath = $row['filePath']; // e.g. upload/image.jpg

        // Correct path (project root)
        $fullPath = dirname(__DIR__) . '/' . $filePath;

        // STEP 2: Delete file from folder
        if (!empty($filePath) && file_exists($fullPath)) {
            unlink($fullPath);
        } else {
            $_SESSION['error_message'] = "File not found: " . $fullPath;
        }

        // STEP 3: Delete from database
        $deleteStmt = mysqli_prepare($conn, "DELETE FROM media WHERE mediaID = ?");
        mysqli_stmt_bind_param($deleteStmt, 'i', $mediaID);

        if (mysqli_stmt_execute($deleteStmt)) {
            $_SESSION['success_message'] = "Image deleted successfully.";
        } else {
            $_SESSION['error_message'] = "Failed to delete from database.";
        }

        mysqli_stmt_close($deleteStmt);

    } else {
        $_SESSION['error_message'] = "Image not found in DB.";
    }

    // STEP 4: Redirect
    echo "<meta http-equiv='refresh' content='0; URL=" . $_SERVER['REQUEST_URI'] . "'>";
    exit();
}



if (isset($_POST['delete_project_gallery_image_btn'])) {

    $projectMediaID = intval($_POST['gallery_image_id']);

    $stmt = mysqli_prepare($conn, "SELECT filePath FROM project_media WHERE projectMediaID = ?");
    mysqli_stmt_bind_param($stmt, 'i', $projectMediaID);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);
    mysqli_stmt_close($stmt);

    if ($row) {

        $filePath = $row['filePath']; // upload/image.jpg

        // Correct dynamic path
        $fullPath = dirname(__DIR__) . '/' . $filePath;

        if (!empty($filePath) && file_exists($fullPath)) {
            unlink($fullPath);
        } else {
            $_SESSION['error_message'] = "File not found: " . $fullPath;
        }

        $deleteStmt = mysqli_prepare($conn, "DELETE FROM project_media WHERE projectMediaID = ?");
        mysqli_stmt_bind_param($deleteStmt, 'i', $projectMediaID);
        mysqli_stmt_execute($deleteStmt);
        mysqli_stmt_close($deleteStmt);

        $_SESSION['success_message'] = "Image deleted successfully.";

    } else {
        $_SESSION['error_message'] = "Image not found in DB.";
    }

    echo "<meta http-equiv='refresh' content='0; URL=" . $_SERVER['REQUEST_URI'] . "'>";
    exit();
}