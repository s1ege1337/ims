<?php
require 'db_connection.php';

$categoryName = $_POST['category_name'];
$dateCreated = date("Y/m/d");

    $sql = "INSERT INTO tbl_category (category_name,category_created)
    VALUES ('$categoryName','$dateCreated')";

    if ($conn->query($sql) === TRUE) {
        header('Location: ' . $_SERVER["HTTP_REFERER"] );
        exit;
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

$conn->close();
?>