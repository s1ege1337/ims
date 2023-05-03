<?php
require 'db_connection.php';

$category = $_POST['category_id'];
$brand = $_POST['brand_id'];
$productName = $_POST['product_name'];
$productModel = $_POST['product_model'];
$productQty = $_POST['product_qty'];
$dateCreated = date("Y/m/d");

    $sql = "INSERT INTO tbl_product (category_id,brand_id,product_name,product_model,product_qty,date_created)
    VALUES ('$category','$brand','$productName','$productModel','$productQty','$dateCreated')";

    if ($conn->query($sql) === TRUE) {
        header('Location: ' . $_SERVER["HTTP_REFERER"] );
        exit;
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

$conn->close();
?>