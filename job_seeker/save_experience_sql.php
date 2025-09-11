<?php
// save_experience_sql.php
while (ob_get_level()) { ob_end_clean(); }
header('Content-Type: application/json; charset=utf-8');
ini_set('display_errors', 0);
error_reporting(E_ALL);

session_start();
include 'include/config.php';

if (!isset($_SESSION['user_id'])) {
    echo json_encode(['success'=>false,'message'=>'Not logged in']);
    exit;
}

$user_id = intval($_SESSION['user_id']);
$experience_id = isset($_POST['experience_id']) ? intval($_POST['experience_id']) : 0;

// sanitize & defaults
$title = mysqli_real_escape_string($conn, $_POST['title'] ?? '');
$company = mysqli_real_escape_string($conn, $_POST['company'] ?? '');
$country_id = mysqli_real_escape_string($conn, $_POST['country_id'] ?? '');
$state_id = mysqli_real_escape_string($conn, $_POST['state_id'] ?? '');
$city_id = mysqli_real_escape_string($conn, $_POST['city_id'] ?? '');
$date_start = !empty($_POST['date_start']) ? $_POST['date_start'] : null;
$is_current = isset($_POST['is_currently_working']) ? intval($_POST['is_currently_working']) : 0;
$date_end = (!empty($_POST['date_end']) && $is_current == 0) ? $_POST['date_end'] : null;
$description = mysqli_real_escape_string($conn, $_POST['description'] ?? '');

if ($experience_id > 0) {
    $sql = "UPDATE job_seeker_experiences SET
            title = '$title',
            company = '$company',
            country_id = '$country_id',
            state_id = '$state_id',
            city_id = '$city_id',
            date_start = ".($date_start ? "'$date_start'" : "NULL").",
            date_end = ".($date_end ? "'$date_end'" : "NULL").",
            is_currently_working = '$is_current',
            description = '$description'
            WHERE id = '$experience_id' AND user_id = '$user_id'
    ";
} else {
    $sql = "INSERT INTO job_seeker_experiences
            (user_id, title, company, country_id, state_id, city_id, date_start, date_end, is_currently_working, description, created_at)
            VALUES
            ('$user_id', '$title', '$company', '$country_id', '$state_id', '$city_id',
             ".($date_start ? "'$date_start'" : "NULL").",
             ".($date_end ? "'$date_end'" : "NULL").",
             '$is_current', '$description', NOW())
    ";
}

$res = mysqli_query($conn, $sql);
if (!$res) {
    echo json_encode(['success'=>false,'message'=>mysqli_error($conn)]);
    exit;
}

while (ob_get_level()) { ob_end_clean(); }
echo json_encode(['success'=>true,'message'=> $experience_id ? 'Updated' : 'Saved']);
exit;
