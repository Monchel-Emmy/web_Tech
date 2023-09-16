<?php
session_start();
require_once '../config.php';
?>
<?php

if(isset($_POST['delete'])){
    $id = $_POST["id"];

$sql = "DELETE FROM courses WHERE c_id = $id";

$result = mysqli_query($con, $sql);

if ($result === true) {
 header("location: course.php");
 $_SESSION['success'] = "delete course successfully!!";
} else {
  echo "Error deleting row: " . mysqli_error($con);
}

// Close the connection
mysqli_close($con);
}
?>