<?php
session_start();
include 'include/config.php';

$user_id = $_SESSION['user_id'];

$project_id = isset($_POST['project_id']) ? intval($_POST['project_id']) : 0;
$name = mysqli_real_escape_string($conn, $_POST['name']);
$url = mysqli_real_escape_string($conn, $_POST['url']);
$date_start = mysqli_real_escape_string($conn, $_POST['date_start']);
$date_end = mysqli_real_escape_string($conn, $_POST['date_end']);
$description = mysqli_real_escape_string($conn, $_POST['description']);
$is_on_going = isset($_POST['is_on_going']) ? 1 : 0;

// Agar naya project hai (insert)
if ($project_id == 0) {
    $query = "INSERT INTO projects (user_id, name, url, date_start, date_end, description, is_on_going, created_at) 
              VALUES ('$user_id', '$name', '$url', '$date_start', '$date_end', '$description', '$is_on_going', NOW())";
    if (mysqli_query($conn, $query)) {
        echo json_encode(["success" => true, "message" => "Project added successfully!"]);
    } else {
        echo json_encode(["success" => false, "message" => "Insert failed"]);
    }
} 
// Agar existing project hai (update)
else {
    $query = "UPDATE projects SET 
                name='$name',
                url='$url',
                date_start='$date_start',
                date_end='$date_end',
                description='$description',
                is_on_going='$is_on_going'
              WHERE id='$project_id' AND user_id='$user_id'";
    if (mysqli_query($conn, $query)) {
        echo json_encode(["success" => true, "message" => "Project updated successfully!"]);
    } else {
        echo json_encode(["success" => false, "message" => "Update failed"]);
    }
}
?>
