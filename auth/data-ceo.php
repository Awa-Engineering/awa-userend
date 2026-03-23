<?php
require_once "./config/db.php";

// Initialize default values
$aboutID    = '';
$breadcrumb = '';
$ceoImage   = '';
$title      = '';
$text       = '';
$counter    = '';

// Fetch the first CEO row
$select_query = "SELECT * FROM ceo LIMIT 1";
$result = mysqli_query($conn, $select_query);

// Check for query errors
if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}

// If a row exists, populate variables
if ($row = mysqli_fetch_assoc($result)) {
    $aboutID    = $row['aboutID'] ?? '';
    $breadcrumb = $row['breadcrumb'] ?? '';
    $ceoImage   = $row['ceoImage'] ?? '';
    $title      = $row['title'] ?? '';
    $text       = $row['text'] ?? '';
    $counter    = $row['counter'] ?? '';
}
?>