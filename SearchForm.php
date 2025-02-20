<?php
include 'SearchEmp.php'
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
    if (!isset($hid)) $hid = "";
    if (!isset($hfn)) $hfn = "";
    if (!isset($hmn)) $hmn = "";
    if (!isset($hln)) $hln = "";
    if (!isset($hdid)) $hdid = "";
    if (!isset($hrc)) $hrc = "";
    ?>


    <form action="<?php $_PHP_SELF ?>" method="POST">

        <table class="center">

            <tr>
                <td> EmployeeID: </td>
                <td><input type="text" name="EmpID" value="<?php echo $hid ?>" /></td>
                <td><input type="submit" name="searchrec" value="Search Record"></td>
                <td><input type="submit" name="delete" value="Delete Record"></td>
                <td><input type="submit" name="update" value="Update Record"></td>

            </tr>
            <tr>


                <td> Firstname: </td>
                <td><input type="text" name="fname" value=" <?php echo $hfn ?>"></td>

            </tr>
            <tr>
                <td> Middle Name: </td>
                <td><input type="text" name="mname" value=" <?php echo $hmn ?>"> </td>

            </tr>
            <tr>


                <td> Lastname: </td>
                <td><input type="text" name="lname" value=" <?php echo $hln ?>"> </td>

            </tr>
            <tr>


                <td> DeptID: </td>
                <td><input type="text" name="D_id" value=" <?php echo $hdid ?>"> </td>

            </tr>
            <tr>


                <td> Rankcode: </td>
                <td><input type="text" name="rankcode" value=" <?php echo $hrc ?>"> </td>

            </tr>
            <tr>



                <td><input type="submit" name="cls" value="Clear Form"></td>
            </tr>

        </table>

    </form>


</body>

</html>