<?php
include 'SaveProd.php'; // Include the SaveEmp script that handles the insert operation
?>

<html>

<head>
    <style>
        .center {
            margin-top: auto;
            margin-bottom: auto;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>

<body>

    <table class="center">
        <tr>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <td> Product ID: </td>
                <td><input type="text" name="ProdID" /> </td>
        </tr>
        <tr>
            <td> Product Brand: </td>
            <td><input type="text" name="ProdBrand" /> </td>
        </tr>
        <tr>
            <td> Product Description: </td>
            <td><input type="text" name="ProdDesc" /> </td>
        </tr>
        <tr>
            <td> Price: </td>
            <td><input type="text" name="Price" /> </td>
        </tr>
        <tr>
            <td><input type="submit" name="saveprod" value="Save Record"></td>
            <td><input type="submit" name="cls" value="Clear Form"></td>
        </tr>
        </form>
    </table>

    <?php
    // Initialize $messAlert to avoid "undefined variable" error
    $messAlert = isset($messAlert) ? $messAlert : '';

    // Display the message alert if it's set
    if (!empty($messAlert)) {
        echo $messAlert;
    }
    ?>

</body>

</html>