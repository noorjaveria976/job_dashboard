<?php
session_start();
include 'include/config.php';

$user_id = $_SESSION['user_id'];

$title = mysqli_real_escape_string($conn, $_POST['title']);
$start_date = mysqli_real_escape_string($conn, $_POST['start_date']);
$end_date = mysqli_real_escape_string($conn, $_POST['end_date']);
$description = mysqli_real_escape_string($conn, $_POST['description']);
$project_id = isset($_POST['project_id']) ? (int)$_POST['project_id'] : 0;

$image_name = '';
if (!empty($_FILES['image']['name'])) {
    $image_name = time() . '_' . $_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/' . $image_name);
}

if ($project_id > 0) {
    // Update Project
    $sql = "UPDATE projects SET title='$title', start_date='$start_date', end_date='$end_date', description='$description'";
    if ($image_name != '') $sql .= ", image='$image_name'";
    $sql .= " WHERE id='$project_id' AND user_id='$user_id'";
    mysqli_query($conn, $sql);
    echo json_encode(["status" => "success", "message" => "Project updated successfully!"]);
} else {
    // Insert New Project
    $sql = "INSERT INTO projects (user_id, title, start_date, end_date, description, image) 
            VALUES ('$user_id', '$title', '$start_date', '$end_date', '$description', '$image_name')";
    mysqli_query($conn, $sql);
    echo json_encode(["status" => "success", "message" => "Project added successfully!"]);
}
?>
