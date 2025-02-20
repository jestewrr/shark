 <?php
    include "dbconnect.php";

    // Check if each expected key exists in the POST data before using them
    $pempID = isset($_POST['EmpID']) ? $_POST['EmpID'] : '';
    $pfn = isset($_POST['fname']) ? $_POST['fname'] : '';
    $pmn = isset($_POST['mname']) ? $_POST['mname'] : '';
    $plastn = isset($_POST['lname']) ? $_POST['lname'] : '';
    $pD_id = isset($_POST['D_id']) ? $_POST['D_id'] : '';
    $pRC = isset($_POST['rankcode']) ? $_POST['rankcode'] : '';

    // Proceed with the insert operation only if the necessary data is present
    if (isset($_POST['saverec']) && $pempID && $pfn && $pmn && $plastn && $pD_id && $pRC) {
        $sql = "INSERT INTO Employee (TEmpID, Tfn, Tmn, Tln, TDeptID, Trankcode) 
            VALUES ('$pempID', '$pfn', '$pmn', '$plastn', '$pD_id', '$pRC')";

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
    ?>

