<?php
session_start();
include 'include/config.php';

$user_id = $_SESSION['user_id'] ?? 0;

$query = "
    SELECT e.id, e.title, e.company, e.date_start, e.date_end, e.is_currently_working, e.description,
           c.name AS country_name,
           s.name AS state_name,
           ci.name AS city_name
    FROM job_seeker_experiences e
    LEFT JOIN countries c ON e.country_id = c.id
    LEFT JOIN states s ON e.state_id = s.id
    LEFT JOIN cities ci ON e.city_id = ci.id
    WHERE e.user_id = '$user_id'
    ORDER BY e.date_start DESC
";

$result = mysqli_query($conn, $query);

$experiences = [];
while ($row = mysqli_fetch_assoc($result)) {
    $experiences[] = $row;
}

echo json_encode($experiences);
