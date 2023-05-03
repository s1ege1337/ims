<?php
require 'db_connection.php';

$userName = $_POST['user_name'];
$userPass = $_POST['user_pass'];
$employeeName = $_POST['employee_name'];
$dateCreated = date("Y/m/d");

    $sql = "INSERT INTO tbl_user (user_name, user_pass, employee_name, date_created)
    VALUES ('$userName','$userPass','$employeeName','$dateCreated')";

    if ($conn->query($sql) === TRUE) {
        header('Location: ' . $_SERVER["HTTP_REFERER"] );
        exit;
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

$conn->close();
?>