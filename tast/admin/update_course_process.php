<?php
session_start();
include('../config.php');

$c_title = $_POST['c_title'];
$c_description =  $_POST['c_description'];
$c_category = $_POST['c_category'];
$c_picturer = $_POST['c_picturer'];

if(isset($_POST['update'])){
    $id = $_POST['id'];
// $folder = "./images/" . $c_picturer;
   $sql = "UPDATE  courses SET c_title ='$c_title' ,c_description = '$c_description',c_picturer = '$c_picturer',c_category ='$c_category' WHERE c_id= $id;";
     $myquery = mysqli_query($con, $sql);
     if( $myquery ){
         $_SESSION['success'] = "updating course successfully!!";
        header("Location: course.php");
    

    // Close connection
    mysqli_close($con);
}  
   else{
    header("Location: course.php");
    $_SESSION['error'] = "Not inserted!!";

   }}
   ?>