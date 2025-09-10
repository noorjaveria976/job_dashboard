<?php
session_start();
include 'include/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_SESSION['user_id'];

    $degree_level   = mysqli_real_escape_string($conn, $_POST['degree_level_id']);
    $degree_type    = mysqli_real_escape_string($conn, $_POST['degree_type_id']);
    $degree_title   = mysqli_real_escape_string($conn, $_POST['degree_title']);
    $major_subjects = isset($_POST['major_subjects']) ? implode(", ", $_POST['major_subjects']) : '';
    $country        = mysqli_real_escape_string($conn, $_POST['country_id']);
    $state          = mysqli_real_escape_string($conn, $_POST['state_id']);
    $city           = mysqli_real_escape_string($conn, $_POST['city_id']);
    $institution    = mysqli_real_escape_string($conn, $_POST['institution']);
    $date_completion= mysqli_real_escape_string($conn, $_POST['date_completion']);
    $degree_result  = mysqli_real_escape_string($conn, $_POST['degree_result']);
    $result_type    = mysqli_real_escape_string($conn, $_POST['result_type_id']);

    $sql = "INSERT INTO job_seeker_education 
            (user_id, degree_level, degree_type, degree_title, major_subjects, country, state, city, institution, date_completion, degree_result, result_type, created_at) 
            VALUES 
            ('$user_id', '$degree_level', '$degree_type', '$degree_title', '$major_subjects', '$country', '$state', '$city', '$institution', '$date_completion', '$degree_result', '$result_type', NOW())";

    if (mysqli_query($conn, $sql)) {
        header("Location: build_resume.php?success=education_added");
        exit;
    } else {
        echo "SQL Error: " . mysqli_error($conn);
    }
}
