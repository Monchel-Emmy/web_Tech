<?php
require_once '../config.php';
?>
<?php

if(isset($_POST['delete'])){
    $id = $_POST["id"];

$sql = "DELETE FROM students WHERE s_id = $id";

$result = mysqli_query($con, $sql);

// Check if the row was deleted successfully
if ($result === true) {
 header("location: users.php");
} else {
  echo "Error deleting row: " . mysqli_error($con);
}

// Close the connection
mysqli_close($con);
}
?>
