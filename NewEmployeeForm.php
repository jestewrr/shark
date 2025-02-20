<?php
include 'SaveEmp.php'; // Include the SaveEmp script that handles the insert operation
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
        <td> EmployeeID: </td>
        <td><input type="text" name="EmpID" /> </td>
    </tr>
    <tr>
      <td> Firstname: </td>
      <td><input type="text" name="fname" /> </td>
    </tr>
    <tr>
      <td> Middle Name: </td>
      <td><input type="text" name="mname" /> </td>
    </tr>
    <tr>
      <td> Lastname: </td>
      <td><input type="text" name="lname" /> </td>
    </tr>
    <tr>
      <td> DeptID: </td>
      <td><input type="text" name="D_id" /> </td>
    </tr>
    <tr>
      <td> Rankcode: </td>
      <td><input type="text" name="rankcode" /> </td>
    </tr>
    <tr>
      <td><input type="submit" name="saverec" value="Save Record"></td>
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