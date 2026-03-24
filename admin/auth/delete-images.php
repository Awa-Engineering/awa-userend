<?php

if (isset($_POST['delete_gallery_image_btn_six'])) {
    $mediaID = $_POST['gallery_image_id'];
    $filePath = $_POST['filePath'];

    $uploadDir = __DIR__ . '/'; // adjust if needed
    $fullPath = $uploadDir . $filePath;

    // Debug (optional)
    // echo $fullPath;

    if (file_exists($fullPath)) {
        unlink($fullPath); // delete image from upload folder
    }

    // delete from database
    $delete_query = "DELETE FROM media_six WHERE mediaID = ?";
    $stmt = mysqli_prepare($conn, $delete_query);
    mysqli_stmt_bind_param($stmt, 'i', $mediaID);
    mysqli_stmt_execute($stmt);

    // redirect to refresh
    $_SESSION['success_message'] = "Image Deleted";
    header("Location: " . $_SERVER['REQUEST_URI']);
    exit();
}



if (isset($_POST['delete_gallery_image_btn_five'])) {
    $mediaID = $_POST['gallery_image_id'];
    $filePath = $_POST['filePath'];

    $uploadDir = __DIR__ . '/'; // adjust if needed
    $fullPath = $uploadDir . $filePath;

    // Debug (optional)
    // echo $fullPath;

    if (file_exists($fullPath)) {
        unlink($fullPath); // delete image from upload folder
    }

    // delete from database
    $delete_query = "DELETE FROM media_five WHERE mediaID = ?";
    $stmt = mysqli_prepare($conn, $delete_query);
    mysqli_stmt_bind_param($stmt, 'i', $mediaID);
    mysqli_stmt_execute($stmt);

    // redirect to refresh
    $_SESSION['success_message'] = "Image Deleted";
    header("Location: " . $_SERVER['REQUEST_URI']);
    exit();
}




if (isset($_POST['delete_gallery_image_btn_four'])) {
    $mediaID = $_POST['gallery_image_id'];
    $filePath = $_POST['filePath'];

    $uploadDir = __DIR__ . '/'; // adjust if needed
    $fullPath = $uploadDir . $filePath;

    // Debug (optional)
    // echo $fullPath;

    if (file_exists($fullPath)) {
        unlink($fullPath); // delete image from upload folder
    }

    // delete from database
    $delete_query = "DELETE FROM media_four WHERE mediaID = ?";
    $stmt = mysqli_prepare($conn, $delete_query);
    mysqli_stmt_bind_param($stmt, 'i', $mediaID);
    mysqli_stmt_execute($stmt);

    // redirect to refresh
    $_SESSION['success_message'] = "Image Deleted";
    header("Location: " . $_SERVER['REQUEST_URI']);
    exit();
}




if (isset($_POST['delete_gallery_image_btn_three'])) {
    $mediaID = $_POST['gallery_image_id'];
    $filePath = $_POST['filePath'];

    $uploadDir = __DIR__ . '/'; // adjust if needed
    $fullPath = $uploadDir . $filePath;

    // Debug (optional)
    // echo $fullPath;

    if (file_exists($fullPath)) {
        unlink($fullPath); // delete image from upload folder
    }

    // delete from database
    $delete_query = "DELETE FROM media_three WHERE mediaID = ?";
    $stmt = mysqli_prepare($conn, $delete_query);
    mysqli_stmt_bind_param($stmt, 'i', $mediaID);
    mysqli_stmt_execute($stmt);

    // redirect to refresh
    $_SESSION['success_message'] = "Image Deleted";
    header("Location: " . $_SERVER['REQUEST_URI']);
    exit();
}



if (isset($_POST['delete_gallery_image_btn_two'])) {
    $mediaID = $_POST['gallery_image_id'];
    $filePath = $_POST['filePath'];

    $uploadDir = __DIR__ . '/'; // adjust if needed
    $fullPath = $uploadDir . $filePath;

    // Debug (optional)
    // echo $fullPath;

    if (file_exists($fullPath)) {
        unlink($fullPath); // delete image from upload folder
    }

    // delete from database
    $delete_query = "DELETE FROM media_two WHERE mediaID = ?";
    $stmt = mysqli_prepare($conn, $delete_query);
    mysqli_stmt_bind_param($stmt, 'i', $mediaID);
    mysqli_stmt_execute($stmt);

    // redirect to refresh
    $_SESSION['success_message'] = "Image Deleted";
    header("Location: " . $_SERVER['REQUEST_URI']);
    exit();
}



if (isset($_POST['delete_gallery_image_btn_one'])) {
    $mediaID = $_POST['gallery_image_id'];
    $filePath = $_POST['filePath'];

    $uploadDir = __DIR__ . '/'; // adjust if needed
    $fullPath = $uploadDir . $filePath;

    // Debug (optional)
    // echo $fullPath;

    if (file_exists($fullPath)) {
        unlink($fullPath); // delete image from upload folder
    }

    // delete from database
    $delete_query = "DELETE FROM media WHERE mediaID = ?";
    $stmt = mysqli_prepare($conn, $delete_query);
    mysqli_stmt_bind_param($stmt, 'i', $mediaID);
    mysqli_stmt_execute($stmt);

    // redirect to refresh
    $_SESSION['success_message'] = "Image Deleted";
    header("Location: " . $_SERVER['REQUEST_URI']);
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

        // ✅ Correct dynamic path
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