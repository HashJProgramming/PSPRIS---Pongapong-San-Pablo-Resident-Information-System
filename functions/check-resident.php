<?php

// Include the connection file
include_once 'connection.php';

// Get the form data
$resident = $_POST['resident'];

// Check if the resident exists
$sql = "SELECT * FROM residents WHERE firstname= '$resident' OR lastname ='$resident'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) === 1) {

  // The resident exists, so show a success message
  echo "<script>
    alert('Resident exists!');
  </script>";

  // Add the following code after the alert message
  echo "<script>
    $(document).ready(function() {
      $('#alert').alert('Resident exists!');
    });
  </script>";

} else {

  // The resident does not exist, so show an error message
  echo "<script>
    alert('Resident does not exist!');
  </script>";

}

?>