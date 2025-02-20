<?php
include "dbconnect.php";

// Check if each expected key exists in the POST data before using them
$prodID = isset($_POST['ProdID']) ? $_POST['ProdID'] : '';
$prodBrand = isset($_POST['ProdBrand']) ? $_POST['ProdBrand'] : '';
$prodDesc = isset($_POST['ProdDesc']) ? $_POST['ProdDesc'] : '';
$price = isset($_POST['Price']) ? $_POST['Price'] : '';

// Proceed with the insert operation only if the necessary data is present
if (isset($_POST['saveprod']) && $prodID && $prodBrand && $prodDesc && $price) {
    $sql = "INSERT INTO product (ProductID,ProdBrand, ProdDesc,price) 
            VALUES ('$prodID', '$prodBrand', '$prodDesc', '$price')";

    if ($conn->query($sql) === TRUE) {
        $messAlert = "<script>alert('Record Successfully Created...')</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    // Display a message if required fields are missing
    echo "<script>alert('Please fill in all required fields.');</script>";
}

$conn->close();
