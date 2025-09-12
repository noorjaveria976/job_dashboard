<?php
session_start();
include 'include/config.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = intval($_POST['id']);
    
    // Sirf ID ki basis par delete
    $sql = "DELETE FROM job_seeker_education WHERE id='$id'";

    if (mysqli_query($conn, $sql)) {
        if (mysqli_affected_rows($conn) > 0) {
            echo json_encode(["success" => true, "message" => "Education deleted successfully"]);
        } else {
            echo json_encode(["success" => false, "message" => "No matching record found"]);
        }
    } else {
        echo json_encode(["success" => false, "message" => mysqli_error($conn)]);
    }
} else {
    echo json_encode(["success" => false, "message" => "Invalid request"]);
}
?>
