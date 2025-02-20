<?php
include 'SearchProd.php'
?>
<html>
<style>
    .center {
        margin-top: auto;
        margin-bottom: auto;
        margin-left: auto;
        margin-right: auto;
    }
</style>

<body>

    <?php
    if (!isset($pid)) $pid = "";
    if (!isset($pb)) $pb = "";
    if (!isset($pd)) $pd = "";
    if (!isset($prc)) $prc = "";
    ?>


    <form action="<?php $_PHP_SELF ?>" method="POST">

        <table class="center">

            <tr>
                <td> Product ID: </td>
                <td><input type="text" name="ProdID" value="<?php echo $pid ?>" /></td>
                <td><input type="submit" name="searchrec" value="Search Record"></td>
                <td><input type="submit" name="deleterec" value="Delete Record"></td>



            </tr>s
            <tr>


                <td> Product Brand: </td>
                <td><input type="text" name="ProdBrand" value=" <?php echo $pb ?>"></td>

            </tr>
            <tr>
                <td> Product Description: </td>
                <td><input type="text" name="ProdDesc" value=" <?php echo $pd ?>"> </td>

            </tr>
            <tr>


                <td> Price: </td>
                <td><input type="text" name="Price" value=" <?php echo $prc ?>"> </td>

            </tr>
            <tr>



                <td><input type="submit" name="cls" value="Clear Form"></td>
                <td><input type="submit" name="svform" value="Save"></td>



            </tr>

        </table>

    </form>


</body>

</html>