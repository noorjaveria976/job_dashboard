<?php
session_start();
include 'include/config.php';

$user_id = $_SESSION['user_id'];
$project_id = (int)$_POST['id'];

mysqli_query($conn, "DELETE FROM projects WHERE id='$project_id' AND user_id='$user_id'");

echo json_encode(["status" => "success", "message" => "Project deleted successfully!"]);
?>
