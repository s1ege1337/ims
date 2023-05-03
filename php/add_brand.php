<?php
require 'db_connection.php';

$brandName = $_POST['brand_name'];
$dateCreated = date("Y/m/d");

    $sql = "INSERT INTO tbl_brand (brand_name,brand_created)
    VALUES ('$brandName','$dateCreated')";

    if ($conn->query($sql) === TRUE) {
        header('Location: ' . $_SERVER["HTTP_REFERER"] );
        exit;
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

$conn->close();
?>