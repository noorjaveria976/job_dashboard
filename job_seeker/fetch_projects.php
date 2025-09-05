<?php
session_start();
include 'include/config.php';

$result = mysqli_query($conn, "SELECT * FROM projects ORDER BY id DESC");
$projects = [];

while ($row = mysqli_fetch_assoc($result)) {
    $projects[] = [
        "id"          => $row['id'],
        "name"        => $row['name'],
        "url"         => $row['url'],
        "date_start"  => $row['date_start'],
        "date_end"    => $row['date_end'],
        "description" => $row['description'],
        "image"       => $row['image'] // sirf filename (uploads/projects/ ka path JS me add hoga)
    ];
}

echo json_encode($projects);
?>
