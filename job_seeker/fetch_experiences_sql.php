<?php
session_start();
include 'include/config.php';

header('Content-Type: application/json');

if (!isset($_SESSION['user_id'])) {
    echo json_encode([]);
    exit;
}

$user_id = $_SESSION['user_id'];

$sql = "SELECT e.*, c.name AS country_name, s.name AS state_name, ci.name AS city_name
        FROM job_seeker_experiences e
        LEFT JOIN countries c ON e.country_id = c.id
        LEFT JOIN states s ON e.state_id = s.id
        LEFT JOIN cities ci ON e.city_id = ci.id
        WHERE e.user_id = '$user_id'
        ORDER BY e.date_start DESC";

$result = mysqli_query($conn, $sql);

$experiences = [];
while ($row = mysqli_fetch_assoc($result)) {
    $experiences[] = $row;
}

echo json_encode($experiences);
