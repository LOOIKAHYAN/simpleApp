<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
include "db.php";

if (isset($_POST['fullname'])) {
    $fullname = $_POST['fullname'];
} else {
    // Handle case where 'fullname' key is not set
    $fullname = '';
}
$age = $_POST["age"];
$gender = $_POST["gender"];
$app = $_POST["app"];
$rating = $_POST["emoji"];
$comments = $_POST["comments"];

$sql = "INSERT INTO ratings (submitdatetime, fullname, age, gender, app, rating, comments) 
        VALUES (NOW(), ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "ssssss", $fullname, $age, $gender, $app, $rating, $comments);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);

mysqli_close($conn);
?>