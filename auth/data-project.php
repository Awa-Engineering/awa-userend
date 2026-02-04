<?php
require_once "./config/db.php";

//Sanitize input
$projectID = isset($_GET['id']) ? mysqli_real_escape_string($conn, $_GET['id']) : null;

if (!$projectID) {
    die("Project ID not provided.");
}

//Fetch project details without JOIN on media
$select_query = "
    SELECT 
        p.projectID,
        p.title,
        p.filePath AS heroImage,
        p.client,
        p.projectDate,
        p.projectCategoryID,
        p.location,
        p.description,
        c.categoryID,
        c.title AS categoryTitle
    FROM projects p
    JOIN project_categories c ON c.categoryID = p.projectCategoryID
    WHERE p.projectID = '$projectID'
";

$result = mysqli_query($conn, $select_query);

if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}

if (mysqli_num_rows($result) === 0) {
    die("No project found with the given ID.");
}

//Fetch single row
$project = mysqli_fetch_assoc($result);

//Assign project fields
$title = $project['title'];
$heroImage = $project['heroImage'];
$client = $project['client'];
$projectDate = $project['projectDate'];
$date = strtotime($projectDate);
$projectCategoryID = $project['projectCategoryID'];
$categoryTitle = $project['categoryTitle'];
$location = $project['location'];
$description = $project['description'];

//Fetch project media separately
$project_media_images = [];
$project_media_query = "SELECT filePath FROM project_media WHERE projectID = '$projectID'";
$project_media_result = mysqli_query($conn, $project_media_query);

if ($project_media_result && mysqli_num_rows($project_media_result) > 0) {
    while ($row = mysqli_fetch_assoc($project_media_result)) {
        $project_media_images[] = $row['filePath'];
    }
}
?>
