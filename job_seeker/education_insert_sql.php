<?php
session_start();
include 'include/config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_SESSION['user_id'];

    $degree_level_id = mysqli_real_escape_string($conn, $_POST['degree_level_id']);
    $degree_type_id = mysqli_real_escape_string($conn, $_POST['degree_type_id']);
    $degree_title = mysqli_real_escape_string($conn, $_POST['degree_title']);
    $major_subjects = isset($_POST['major_subjects']) ? implode(',', $_POST['major_subjects']) : ''; // multiple select
    $country_id = mysqli_real_escape_string($conn, $_POST['country_id']);
    $state_id = mysqli_real_escape_string($conn, $_POST['state_id']);
    $city_id = mysqli_real_escape_string($conn, $_POST['city_id']);
    $institution = mysqli_real_escape_string($conn, $_POST['institution']);
    $date_completion = mysqli_real_escape_string($conn, $_POST['date_completion']);
    $degree_result = mysqli_real_escape_string($conn, $_POST['degree_result']);
    $result_type_id = mysqli_real_escape_string($conn, $_POST['result_type_id']);

    $sql = "INSERT INTO job_seeker_education 
            (user_id, degree_level_id, degree_type_id, degree_title, major_subjects, country_id, state_id, city_id, institution, date_completion, degree_result, result_type_id, created_at)
            VALUES 
            ('$user_id', '$degree_level_id', '$degree_type_id', '$degree_title', '$major_subjects', '$country_id', '$state_id', '$city_id', '$institution', '$date_completion', '$degree_result', '$result_type_id', NOW())";

    if (mysqli_query($conn, $sql)) {
        echo "success";
    } else {
        echo "SQL Error: " . mysqli_error($conn);
    }
}
?>
 