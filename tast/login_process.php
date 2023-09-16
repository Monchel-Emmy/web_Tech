<?php
session_start();
include('config.php');

$email = $_POST["email"];
$password = $_POST["pname"];
$category = $_POST["category"];
if($email =="admin@gmail.com" && $password == "admin2023"){
    header("location: admin/admin.html" );
}else
if($category =="student"){
    $result = mysqli_query( $con,"SELECT * FROM students WHERE s_email ='$email' AND s_password = '$password '");
    
    if($result){

        if ($row = mysqli_num_rows($result) > 0) {
            header("Location: homepage.php");
            $_SESSION['success'] = " student  Login successfully!!";
            $_SESSION['fname'] = $row['s_firstname'] ;

        } else{

        header("Location: login.php");
        $_SESSION['error']="No Account found please! ";

       }   
} }



if($category =="lecturer"){
    $result = mysqli_query( $con,"SELECT l_email && l_password FROM lecturer WHERE l_email ='$email' AND l_password = '$password '");
    
    if($result){

        if (mysqli_num_rows($result) > 0) {
            header("Location: homepage_lecturer.php");
            $_SESSION['success'] = " lecturer Login successfully!!";
        } else{

        header("Location: login.php");
        $_SESSION['error']="No Account found! ";

       } 
    
     
} }
       ?>
