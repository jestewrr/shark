<?php
include "dbconnect.php";

$pempID = isset($_POST['EmpID']) ? $_POST['EmpID'] : '';
$hid = $hfn = $hmn = $hln = $hdid = $hrc = "";
if (isset($_POST['searchrec'])) {

  $sql = "Select * from Employee where TEmpID ='$pempID'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
?>
    <table>

      <tr>
    <?php
    while ($row = $result->fetch_assoc()) {


      $hid = $row["TEmpID"];
      $hfn = $row["Tfn"];
      $hmn = $row["Tmn"];
      $hln = $row["Tln"];
      $hdid = $row["TdeptID"];
      $hrc = $row["Trankcode"];
    }
  } else {
    echo "<script>alert('ID Not found...')</script>";
  }
}

if (isset($_POST['delete']) && $pempID) {
  $sql = "DELETE FROM Employee WHERE TEmpID = '$pempID'";

  if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Record Successfully Deleted...');</script>";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
} else if (isset($_POST['delete'])) {
  echo "<script>alert('Please provide a valid Employee ID.');</script>";
}

if (isset($_POST['update']) && $pempID) {
  $pfn = isset($_POST['fname']) ? $_POST['fname'] : '';
  $pmn = isset($_POST['mname']) ? $_POST['mname'] : '';
  $pln = isset($_POST['lname']) ? $_POST['lname'] : '';
  $pD_id = isset($_POST['D_id']) ? $_POST['D_id'] : '';
  $pRC = isset($_POST['rankcode']) ? $_POST['rankcode'] : '';

  $sql = "UPDATE Employee SET Tfn='$pfn', Tmn='$pmn', Tln='$pln', TdeptID='$pD_id', Trankcode='$pRC' WHERE TEmpID='$pempID'";

  if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Record Successfully Updated...');</script>";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
} else if (isset($_POST['update'])) {
  echo "<script>alert('Please provide a valid Employee ID.');</script>";
}

$conn->close();
    ?>
    ?>