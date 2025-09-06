<?php
include 'include/config.php';
session_start();

header('Content-Type: application/json');

// Agar user login hai to uska ID
if (!isset($_SESSION['user_id'])) {
    echo json_encode(["success" => false, "message" => "User not logged in."]);
    exit;
}

$user_id = $_SESSION['user_id'];

// ✅ Form fields safely assign
$experience_id = isset($_POST['experience_id']) ? intval($_POST['experience_id']) : 0;

$title   = !empty($_POST['title']) ? $_POST['title'] : NULL;
$company = !empty($_POST['company']) ? $_POST['company'] : NULL;
$country_id = !empty($_POST['country_id']) ? intval($_POST['country_id']) : NULL;
$state_id   = !empty($_POST['state_id']) ? intval($_POST['state_id']) : NULL;
$city_id    = !empty($_POST['city_id']) ? intval($_POST['city_id']) : NULL;

$date_start = !empty($_POST['date_start']) ? $_POST['date_start'] : NULL;
$is_currently_working = isset($_POST['is_currently_working']) ? intval($_POST['is_currently_working']) : 0;

// Agar currently working = Yes (1), to date_end NULL hoga
$date_end = (!empty($_POST['date_end']) && $is_currently_working == 0) ? $_POST['date_end'] : NULL;

$description = !empty($_POST['description']) ? $_POST['description'] : NULL;

// ✅ Update or Insert
if ($experience_id > 0) {
    // --- UPDATE ---
    $sql = "UPDATE job_seeker_experiences 
            SET title = ?, company = ?, country_id = ?, state_id = ?, city_id = ?, 
                date_start = ?, date_end = ?, is_currently_working = ?, description = ?
            WHERE id = ? AND user_id = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param(
        "ssiiisssii",
        $title, $company, $country_id, $state_id, $city_id,
        $date_start, $date_end, $is_currently_working, $description,
        $experience_id, $user_id
    );

    if ($stmt->execute()) {
        echo json_encode(["success" => true, "message" => "Experience updated successfully."]);
    } else {
        echo json_encode(["success" => false, "message" => "Failed to update experience."]);
    }

} else {
    // --- INSERT ---
    $sql = "INSERT INTO job_seeker_experiences 
            (user_id, title, company, country_id, state_id, city_id, date_start, date_end, is_currently_working, description, created_at) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param(
        "issiiissis",
        $user_id, $title, $company, $country_id, $state_id, $city_id,
        $date_start, $date_end, $is_currently_working, $description
    );

    if ($stmt->execute()) {
        echo json_encode(["success" => true, "message" => "Experience added successfully."]);
    } else {
        echo json_encode(["success" => false, "message" => "Failed to add experience."]);
    }
}
?>
