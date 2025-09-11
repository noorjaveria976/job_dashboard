<?php
// get_experience_sql.php
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

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
if ($id <= 0) {
    echo json_encode(['success'=>false,'message'=>'Missing id']);
    exit;
}

$user_id = intval($_SESSION['user_id']);

$sql = "
 SELECT e.id, e.user_id, e.title, e.company, e.date_start, e.date_end, e.is_currently_working, e.description,
        e.country_id, e.state_id, e.city_id,
        c.country_name AS country_name, s.state_name AS state_name, ci.city_name AS city_name
 FROM job_seeker_experiences e
 LEFT JOIN countries c ON e.country_id = c.id
 LEFT JOIN states s ON e.state_id = s.id
 LEFT JOIN cities ci ON e.city_id = ci.id
 WHERE e.id = $id AND e.user_id = $user_id
 LIMIT 1
";

$res = mysqli_query($conn, $sql);
if (!$res) {
    echo json_encode(['success'=>false,'message'=>mysqli_error($conn)]);
    exit;
}

$row = mysqli_fetch_assoc($res);
if (!$row) {
    echo json_encode(['success'=>false,'message'=>'Experience not found']);
    exit;
}

// ensure no extra HTML output remains
while (ob_get_level()) { ob_end_clean(); }
echo json_encode(['success'=>true, 'experience'=>$row], JSON_UNESCAPED_UNICODE);
exit;
