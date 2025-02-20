<?php
include "dbconnect.php";

$prodID = isset($_POST['ProdID']) ? $_POST['ProdID'] : '';
if (isset($_POST['searchrec'])) {

    $sql = "Select * from product where ProductID ='$prodID'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
?>
        <table>

            <tr>
        <?php
        while ($row = $result->fetch_assoc()) {


            $pid = $row["ProductID"];
            $pb = $row["ProdBrand"];
            $pd = $row["ProdDesc"];
            $prc = $row["price"];
        }
    } else {
        echo "<script>alert('ID Not found...')</script>";
    }
}
        ?>

        <?php

        $prodID = isset($_POST['ProdID']) ? $_POST['ProdID'] : '';
        if (isset($_POST['deleterec'])) {

            $sql = "delete from product where ProductID ='$prodID'";
            $result = $conn->query($sql);
        ?>
            <table>

                <tr>
                <?php


                echo "<script>alert('Deleted Successfully')</script>";
            }
                ?>


                <!--Tig save-->
                <?php
                $prodID = isset($_POST['ProdID']) ? $_POST['ProdID'] : '';
                $prodBrand = isset($_POST['ProdBrand']) ? $_POST['ProdBrand'] : '';
                $prodDesc = isset($_POST['ProdDesc']) ? $_POST['ProdDesc'] : '';
                $price = isset($_POST['Price']) ? $_POST['Price'] : '';

                // Proceed with the insert operation only if the necessary data is present
                if (isset($_POST['svform']) && $prodID && $prodBrand && $prodDesc && $price) {
                    $sql = "UPDATE product SET ProdBrand='$prodBrand', ProdDesc='$prodDesc',price='$price'
                            WHERE ProductID = '$prodID'";

                    if ($conn->query($sql) === TRUE) {
                        $messAlert = "<script>alert('Record Successfully Saved...')</script>";
                        echo $messAlert;
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                } else
                ?>