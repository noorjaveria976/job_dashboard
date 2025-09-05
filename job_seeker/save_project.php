<?php
session_start();
include 'include/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id          = isset($_POST['project_id']) ? intval($_POST['project_id']) : 0;
    $name        = mysqli_real_escape_string($conn, $_POST['name']);
    $url         = mysqli_real_escape_string($conn, $_POST['url']);
    $date_start  = mysqli_real_escape_string($conn, $_POST['date_start']);
    $date_end    = mysqli_real_escape_string($conn, $_POST['date_end']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);

    $imageName = '';

    // Agar file upload hui hai
    if (!empty($_FILES['image']['name'])) {
        $imageName = time() . "_" . basename($_FILES['image']['name']);
        $target = "uploads/projects/" . $imageName;
        move_uploaded_file($_FILES['image']['tmp_name'], $target);
    }

    if ($id > 0) {
        // Update
        if ($imageName != '') {
            $sql = "UPDATE projects 
                    SET name='$name', url='$url', date_start='$date_start', date_end='$date_end', description='$description', image='$imageName' 
                    WHERE id=$id";
        } else {
            $sql = "UPDATE projects 
                    SET name='$name', url='$url', date_start='$date_start', date_end='$date_end', description='$description' 
                    WHERE id=$id";
        }
        mysqli_query($conn, $sql);
    } else {
        // Insert
        $sql = "INSERT INTO projects (name, url, date_start, date_end, description, image) 
                VALUES ('$name', '$url', '$date_start', '$date_end', '$description', '$imageName')";
        mysqli_query($conn, $sql);
    }

    // echo json_encode(["success" => true, "message" => "Project saved successfully"]);
    header("Location: build_resume.php");
}
?>
