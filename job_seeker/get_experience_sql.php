<?php
session_start();
include 'include/config.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $user_id = $_SESSION['user_id'];

    $sql = "SELECT * FROM job_seeker_experiences WHERE id='$id' AND user_id='$user_id' LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        echo json_encode(["success" => true, "experience" => $row]);
    } else {
        echo json_encode(["success" => false, "message" => "Experience not found"]);
    }
}
?>
