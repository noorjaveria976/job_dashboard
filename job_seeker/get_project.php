<?php
session_start();
include 'include/config.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $result = mysqli_query($conn, "SELECT * FROM projects WHERE id='$id' LIMIT 1");

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        echo json_encode(["success" => true, "project" => $row]);
    } else {
        echo json_encode(["success" => false]);
    }
}
?>
