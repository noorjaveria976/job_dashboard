<?php
session_start();
include 'include/config.php';

// Agar user login nahi hai to block kar do
if (!isset($_SESSION['user_id'])) {
    echo json_encode(["success" => false, "message" => "User not logged in"]);
    exit;
}

$user_id = $_SESSION['user_id'];

// Agar id pass nahi hui
if (!isset($_GET['id']) || empty($_GET['id'])) {
    echo json_encode(["success" => false, "message" => "Experience ID is required"]);
    exit;
}

$experience_id = intval($_GET['id']);

// Experience fetch query
$sql = "
    SELECT e.*, 
           c.name AS country_name, 
           s.name AS state_name, 
           ci.name AS city_name
    FROM job_seeker_experiences e
    LEFT JOIN countries c ON e.country_id = c.id
    LEFT JOIN states s ON e.state_id = s.id
    LEFT JOIN cities ci ON e.city_id = ci.id
    WHERE e.id = '$experience_id' AND e.user_id = '$user_id'
    LIMIT 1
";

$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $experience = mysqli_fetch_assoc($result);

    echo json_encode([
        "success" => true,
        "experience" => [
            "id" => $experience['id'],
            "title" => $experience['title'],
            "company" => $experience['company'],
            "country_id" => $experience['country_id'],
            "state_id" => $experience['state_id'],
            "city_id" => $experience['city_id'],
            "date_start" => $experience['date_start'],
            "date_end" => $experience['date_end'],
            "is_currently_working" => $experience['is_currently_working'],
            "description" => $experience['description'],
            "country_name" => $experience['country_name'],
            "state_name" => $experience['state_name'],
            "city_name" => $experience['city_name']
        ]
    ]);
} else {
    echo json_encode(["success" => false, "message" => "Experience not found"]);
}
?>
