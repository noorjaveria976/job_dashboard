<?php
session_start();
include 'include/config.php';

header('Content-Type: application/json');

if (!isset($_SESSION['user_id'])) {
    echo json_encode(["success" => false, "message" => "User not logged in"]);
    exit;
}

if (!isset($_GET['id']) || empty($_GET['id'])) {
    echo json_encode(["success" => false, "message" => "Experience ID is required"]);
    exit;
}

$user_id = $_SESSION['user_id'];
$id = intval($_GET['id']);

$sql = "SELECT e.*, c.name AS country_name, s.name AS state_name, ci.name AS city_name
        FROM job_seeker_experiences e
        LEFT JOIN countries c ON e.country_id = c.id
        LEFT JOIN states s ON e.state_id = s.id
        LEFT JOIN cities ci ON e.city_id = ci.id
        WHERE e.id = '$id' AND e.user_id = '$user_id' LIMIT 1";

$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $experience = mysqli_fetch_assoc($result);
    echo json_encode(["success" => true, "experience" => $experience]);
} else {
    echo json_encode(["success" => false, "message" => "Experience not found"]);
}
