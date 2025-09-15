<?php
session_start();
include 'include/config.php';

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); // Error report ON

// Current user ki ID session se lo
$user_id = $_SESSION['user_id'] ?? 0;
if ($user_id == 0) {
    die("User not logged in.");
}

// Upload directories
$profileDir = __DIR__ . "/uploads/profile/";
$coverDir   = __DIR__ . "/uploads/cover/";

// Agar folder exist nahi hai to create kar do
if (!is_dir($profileDir)) {
    mkdir($profileDir, 0777, true);
}
if (!is_dir($coverDir)) {
    mkdir($coverDir, 0777, true);
}

// Profile image upload
$profileImage = null;
if (!empty($_FILES['image']['name'])) {
    $profileImage = time() . "_" . basename($_FILES['image']['name']);
    if (!move_uploaded_file($_FILES['image']['tmp_name'], $profileDir . $profileImage)) {
        die("Profile image upload failed!");
    }
}

// Cover image upload
$coverImage = null;
if (!empty($_FILES['cover_image']['name'])) {
    $coverImage = time() . "_" . basename($_FILES['cover_image']['name']);
    if (!move_uploaded_file($_FILES['cover_image']['tmp_name'], $coverDir . $coverImage)) {
        die("Cover image upload failed!");
    }
}

// Baaki form fields
$email          = $_POST['email'] ?? '';
$password       = $_POST['password'] ?? '';
$first_name     = $_POST['first_name'] ?? '';
$last_name      = $_POST['last_name'] ?? '';
$middle_name    = $_POST['middle_name'] ?? '';
$gender         = $_POST['gender'] ?? '';
$marital_status = $_POST['marital_status'] ?? '';
$country        = $_POST['country'] ?? '';
$state          = $_POST['state'] ?? '';
$city           = $_POST['city'] ?? '';
$nationality    = $_POST['nationality'] ?? '';
$date_of_birth  = $_POST['date_of_birth'] ?? '';
$phone          = $_POST['phone'] ?? '';
$mobile_num     = $_POST['mobile_num'] ?? '';
$street_address = $_POST['street_address'] ?? '';
$job_experience = $_POST['job_experience'] ?? '';
$career_level   = $_POST['career_level'] ?? '';
$industry       = $_POST['industry'] ?? '';
$functional_area= $_POST['functional_area'] ?? '';
$salary_currency= $_POST['salary_currency'] ?? '';
$current_salary = $_POST['current_salary'] ?? '';
$expected_salary= $_POST['expected_salary'] ?? '';
$summary        = $_POST['summary'] ?? '';
$is_subscribed  = isset($_POST['is_subscribed']) ? 1 : 0;

// Pehle check karo ki user ka profile already exist karta hai ya nahi
$check = mysqli_query($conn, "SELECT * FROM job_seeker_profiles WHERE user_id='$user_id'");
if (mysqli_num_rows($check) > 0) {
    // Update query
    $query = "UPDATE job_seeker_profiles SET 
        email='$email',
        password='$password',
        first_name='$first_name',
        last_name='$last_name',
        middle_name='$middle_name',
        gender='$gender',
        marital_status='$marital_status',
        country='$country',
        state='$state',
        city='$city',
        nationality='$nationality',
        date_of_birth='$date_of_birth',
        phone='$phone',
        mobile_num='$mobile_num',
        street_address='$street_address',
        job_experience='$job_experience',
        career_level='$career_level',
        industry='$industry',
        functional_area='$functional_area',
        salary_currency='$salary_currency',
        current_salary='$current_salary',
        expected_salary='$expected_salary',
        summary='$summary',
        is_subscribed='$is_subscribed'";

    if ($profileImage) {
        $query .= ", profile_image='$profileImage'";
    }
    if ($coverImage) {
        $query .= ", cover_images='$coverImage'";
    }

    $query .= " WHERE user_id='$user_id'";

    if (!mysqli_query($conn, $query)) {
        die("Update failed: " . mysqli_error($conn));
    }

} else {
    // Insert query
    $query = "INSERT INTO job_seeker_profiles (
        user_id, email, password, first_name, last_name, middle_name, gender, marital_status, country, state, city, nationality, date_of_birth, phone, mobile_num, street_address, job_experience, career_level, industry, functional_area, salary_currency, current_salary, expected_salary, summary, is_subscribed, profile_image, cover_image
    ) VALUES (
        '$user_id', '$email', '$password', '$first_name', '$last_name', '$middle_name', '$gender', '$marital_status', '$country', '$state', '$city', '$nationality', '$date_of_birth', '$phone', '$mobile_num', '$street_address', '$job_experience', '$career_level', '$industry', '$functional_area', '$salary_currency', '$current_salary', '$expected_salary', '$summary', '$is_subscribed', '$profileImage', '$coverImage'
    )";

    if (!mysqli_query($conn, $query)) {
        die("Insert failed: " . mysqli_error($conn));
    }
}

echo "<script>alert('Profile updated successfully!'); window.location.href='profile.php';</script>";
?>
