<?php
session_start();
include 'include/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_SESSION['user_id'];

    $title       = mysqli_real_escape_string($conn, $_POST['title']);
    $company     = mysqli_real_escape_string($conn, $_POST['company']);
    $country     = mysqli_real_escape_string($conn, $_POST['country_text']);
    $state       = mysqli_real_escape_string($conn, $_POST['state_text']);
    $city        = mysqli_real_escape_string($conn, $_POST['city_text']);
    $date_start  = mysqli_real_escape_string($conn, $_POST['date_start']);
    $date_end    = mysqli_real_escape_string($conn, $_POST['date_end']);
    $is_current  = isset($_POST['is_currently_working']) ? (int)$_POST['is_currently_working'] : 0;
    $description = mysqli_real_escape_string($conn, $_POST['description']);

    $sql = "INSERT INTO job_seeker_experiences 
            (user_id, title, company, country, state, city, date_start, date_end, is_currently_working, description, created_at)
            VALUES 
            ('$user_id', '$title', '$company', '$country', '$state', '$city', '$date_start', '$date_end', '$is_current', '$description', NOW())";

    if (mysqli_query($conn, $sql)) {
        echo json_encode(["success" => true]);
    } else {
        echo json_encode([
            "success" => false,
            "error" => mysqli_error($conn),
            "query" => $sql
        ]);
    }
}
?>
