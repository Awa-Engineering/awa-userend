<?php

session_start();

//Connect database
include "./config/db.php";



//Login script
if (isset($_POST['login_btn'])) {

    // Ensure variables are set and escape them
    $email = $conn->real_escape_string($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';  // Don't escape yet, we hash later
    $statusInput = $_POST['status'] ?? '';
    $phoneInput = $_POST['phone'] ?? '';

    if (empty($email) || empty($password)) {
        $_SESSION['error_message'] = "<strong>Error!</strong> Email and Password required";
        header('location: login.php');
        exit();
    }

    // Hash password with SHA1 (if you can't change DB, otherwise use password_verify)
    $passwordHash = sha1($password);

    $query = "SELECT * FROM admin WHERE email='$email' AND password='$passwordHash'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        $_SESSION['firstName'] = $row['firstName'];
        $_SESSION['picture']   = $row['picture'];
        $_SESSION['email']     = $row['email'];
        $_SESSION['phone']     = $row['phone'];
        $_SESSION['adminID']   = $row['adminID'];
        $_SESSION['designation'] = $row['designation'];

        if ($row['status'] == 1) {
            $_SESSION['success_message'] = "Login Successful";
            header('location: dashboard');
            exit();
        } else {
            $_SESSION['error_message'] = "<strong>Error!</strong> Account not active, please contact admin.";
        }
    } else {
        $_SESSION['error_message'] = "<strong>Error!</strong> Incorrect login details";
    }
}