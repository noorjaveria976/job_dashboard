<?php
session_start();
include 'include/config.php';

$user_id = $_SESSION['user_id'];

$id = mysqli_real_escape_string($conn, $_POST['experience_id']);
$title = mysqli_real_escape_string($conn, $_POST['title']);
$company = mysqli_real_escape_string($conn, $_POST['company']);
$country_id = mysqli_real_escape_string($conn, $_POST['experience_country_id']);
$state_id = mysqli_real_escape_string($conn, $_POST['experience_state_id']);
$city_id = mysqli_real_escape_string($conn, $_POST['city_id']);
$date_start = mysqli_real_escape_string($conn, $_POST['date_start']);
$date_end = mysqli_real_escape_string($conn, $_POST['date_end']);
$is_currently_working = isset($_POST['is_currently_working']) ? 1 : 0;
$description = mysqli_real_escape_string($conn, $_POST['description']);

if (!empty($id)) {
    // ✅ UPDATE query (title included)
    $sql = "UPDATE job_seeker_experiences 
            SET title='$title', company='$company', country_id='$country_id',
                state_id='$state_id', city_id='$city_id', date_start='$date_start',
                date_end='$date_end', is_currently_working='$is_currently_working',
                description='$description'
            WHERE id='$id' AND user_id='$user_id'";

    if (mysqli_query($conn, $sql)) {
        echo json_encode(["success" => true, "message" => "Experience updated successfully"]);
    } else {
        echo json_encode(["success" => false, "message" => mysqli_error($conn)]);
    }
} else {
    // ✅ INSERT query
    $sql = "INSERT INTO job_seeker_experiences 
            (user_id, title, company, country_id, state_id, city_id, date_start, date_end, is_currently_working, description) 
            VALUES 
            ('$user_id', '$title', '$company', '$country_id', '$state_id', '$city_id', '$date_start', '$date_end', '$is_currently_working', '$description')";

    if (mysqli_query($conn, $sql)) {
        echo json_encode(["success" => true, "message" => "Experience added successfully"]);
    } else {
        echo json_encode(["success" => false, "message" => mysqli_error($conn)]);
    }
}
?>
