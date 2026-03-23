<?php
// Connect database
include "./config/db.php";


// Delete Admin script
if (isset($_POST['delete_admin_btn'])) {

    $id = $_GET['id'];

    $id = $conn->real_escape_string($_POST['id']);

    $query = "DELETE FROM admin WHERE adminID = '$id'";
    $result = mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0 ) {
        $_SESSION['success_message'] = "Admin Account Deleted";
        echo "<meta http-equiv='refresh' content='0; URL=admins'>";
        exit();
    }else{
        $_SESSION['error_message'] = "Error deleting admin account.";
        echo "<meta http-equiv='refresh' content='0; URL=admins'>";
        exit();
    }

}



// Delete Support script
if (isset($_POST['delete_support_btn'])) {

    $id = $_GET['id'];

    $id = $conn->real_escape_string($_POST['id']);

    $query = "DELETE FROM support WHERE supportID = '$id'";
    $result = mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0 ) {
        $_SESSION['success_message'] = "Support Enquiry Deleted";
        echo "<meta http-equiv='refresh' content='0; URL=support'>";
        exit();
    }else{
        $_SESSION['error_message'] = "Error support enquiry.";
        echo "<meta http-equiv='refresh' content='0; URL=support'>";
        exit();
    }

}



// Delete Quote script
if (isset($_POST['delete_quote_btn'])) {

    if (isset($_POST['id'])) {

        $id = $_POST['id'];

        // Validate ID (assuming it's numeric)
        if (!is_numeric($id)) {
            $_SESSION['error_message'] = "Invalid ID.";
            echo '<meta http-equiv="refresh" content="0; url=quote">';
            exit();
        }

        // Use prepared statement
        $stmt = $conn->prepare("DELETE FROM quote WHERE quoteID = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            $_SESSION['success_message'] = "Quotation Request Deleted";
        } else {
            $_SESSION['error_message'] = "Error deleting quote request.";
        }

        $stmt->close();

        echo '<meta http-equiv="refresh" content="0; url=quote">';
        exit();

    } else {
        $_SESSION['error_message'] = "No ID provided.";
        echo '<meta http-equiv="refresh" content="0; url=quote">';
        exit();
    }
}


// Delete Certificate script
if (isset($_POST['delete_certificate_btn'])) {

    if (!empty($_POST['id'])) {

        $id = intval($_POST['id']);

        // Get the file path from DB
        $stmt = $conn->prepare("SELECT filePath FROM certificate WHERE certificateID = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {

            $row = $result->fetch_assoc();
            $fileName = $row['filePath']; // includes 'upload/...'

            // Build absolute path correctly
            $filePath = __DIR__ . "/../" . $fileName;

            // Debug (remove in production)
            // echo "Deleting file: " . $filePath; exit();

            // Delete DB record
            $deleteStmt = $conn->prepare("DELETE FROM certificate WHERE certificateID = ?");
            $deleteStmt->bind_param("i", $id);
            $deleteStmt->execute();

            if ($deleteStmt->affected_rows > 0) {

                // Delete file if it exists
                if (!empty($fileName) && file_exists($filePath)) {
                    unlink($filePath);
                }

                $_SESSION['success_message'] = "Certificate and file deleted successfully.";

            } else {
                $_SESSION['error_message'] = "Failed to delete certificate.";
            }

        } else {
            $_SESSION['error_message'] = "Certificate not found.";
        }

    } else {
        $_SESSION['error_message'] = "Certificate ID missing.";
    }

    // Refresh page
    echo '<meta http-equiv="refresh" content="0; url=certifications">';
    exit();
}




// Delete Team script
if (isset($_POST['delete_team_btn'])) {

    $id = $_GET['id'];

    $id = $conn->real_escape_string($_POST['id']);

    $query = "DELETE FROM team WHERE teamID = '$id'";
    $result = mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0 ) {
        $_SESSION['success_message'] = "Team Member Deleted";
        echo "<meta http-equiv='refresh' content='0; URL=team'>";
        exit();
    }else{
        $_SESSION['error_message'] = "Error deleting team member.";
        echo "<meta http-equiv='refresh' content='0; URL=team'>";
        exit();
    }

}



// Delete FAQ script
if (isset($_POST['delete_faq_btn'])) {

    $id = $_GET['id'];

    $id = $conn->real_escape_string($_POST['id']);

    $query = "DELETE FROM faq WHERE faqID = '$id'";
    $result = mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0 ) {
        $_SESSION['success_message'] = "FAQ Deleted";
        echo "<meta http-equiv='refresh' content='0; URL=faq'>";
        exit();
    }else{
        $_SESSION['error_message'] = "Error deleting FAQ.";
        echo "<meta http-equiv='refresh' content='0; URL=faq'>";
        exit();
    }

}



// Delete Job script
if (isset($_POST['delete_job_btn'])) {

    $id = $_GET['id'];

    $id = $conn->real_escape_string($_POST['id']);

    $query = "DELETE FROM jobs WHERE jobID = '$id'";
    $result = mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0 ) {
        $_SESSION['success_message'] = "Job Deleted";
        echo "<meta http-equiv='refresh' content='0; URL=jobs'>";
        exit();
    }else{
        $_SESSION['error_message'] = "Error deleting Job.";
        echo "<meta http-equiv='refresh' content='0; URL=jobs'>";
        exit();
    }

}



// Delete Project Category script
if (isset($_POST['delete_project_category_btn'])) {

    $id = $_GET['id'];

    $id = $conn->real_escape_string($_POST['id']);

    $query = "DELETE FROM project_categories WHERE categoryID = '$id'";
    $result = mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0 ) {
        $_SESSION['success_message'] = "Project Category Deleted";
        echo "<meta http-equiv='refresh' content='0; URL=project-categories'>";
        exit();
    }else{
        $_SESSION['error_message'] = "Error deleting project category.";
        echo "<meta http-equiv='refresh' content='0; URL=project-categories'>";
        exit();
    }

}



// Delete Project Category script
if (isset($_POST['delete_project_btn'])) {

    $id = $_GET['id'];

    $id = $conn->real_escape_string($_POST['id']);

    $query = "DELETE FROM projects WHERE projectID = '$id'";
    $result = mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0 ) {
        $_SESSION['success_message'] = "Project Deleted";
        echo "<meta http-equiv='refresh' content='0; URL=projects'>";
        exit();
    }else{
        $_SESSION['error_message'] = "Error deleting project.";
        echo "<meta http-equiv='refresh' content='0; URL=projects'>";
        exit();
    }

}