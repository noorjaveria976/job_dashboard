<?php
session_start();
include 'include/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = intval($_POST['id']);
    $user_id = $_SESSION['user_id'];

    $sql = "SELECT * FROM job_seeker_skills WHERE id='$id' AND user_id='$user_id'";
    $result = mysqli_query($conn, $sql);

    if ($row = mysqli_fetch_assoc($result)) {
        echo json_encode(["success" => true, "data" => $row]);
    } else {
        echo json_encode(["success" => false]);
    }
}
?>
