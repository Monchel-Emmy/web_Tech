<?php
session_start();
include('../config.php');
$c_title = $_POST['c_title'];
$c_description =  $_POST['c_description'];
$c_category = $_POST['c_category'];
$c_picturer = $_POST['c_picturer'];
// $folder = "./images/" . $c_picturer;
   $sql = "INSERT into courses( c_title,c_description,c_picturer,c_category) values('$c_title','$c_description','$c_picturer', '$c_category');";
     $myquery = mysqli_query($con, $sql);
     if( $myquery ){
         $_SESSION['success'] = "insert new course successfully!!";
        header("Location: course.php");
    

    // Close connection
    mysqli_close($con);
}  
   else{
    header("Location: course.php");
    $_SESSION['error'] = "Not inserted!!";

   }
   ?>
