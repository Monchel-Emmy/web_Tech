<?php 
session_start();
   include('../config.php');
   $fname = $_POST["fname"];
   $lname = $_POST["lname"];
   $email = $_POST["email"];
   $password = $_POST["pname"];
   $category = $_POST["category"];
 
   if(empty($fname)   ||
      empty($lname)   ||
       empty($email)      ||
       empty($password)   )
   {
           $_SESSION['error']="Please Fill out all the fields";
           header("Location:registerr.php");
           return;
       }else if($category =="student"){
   $sql = "insert into students( s_firstname,s_lastname,s_email,s_password ) values('$fname','$lname','$email', '$password');";
     $myquery = mysqli_query($con, $sql);
     if( $myquery ){
        $_SESSION['fname'] = $fname ;
        $_SESSION['lname'] = $lname ;
         $_SESSION['success']=" Sudent Now Account created successfully!!";
        header("Location: users.php");
    } }else if($category =="lecturer"){
$sql = "insert into  lecturer( l_firstname,l_lastname,l_email,l_password ) values('$fname','$lname','$email', '$password');";
  $myquery = mysqli_query($con, $sql);
  if( $myquery ){
     $_SESSION['fname'] = $fname ;
     $_SESSION['lname'] = $lname ;
      $_SESSION['success']="Lecturer Now Account created successfully!!";
     header("Location: users.php");
 } 



    
    // Close connection
    mysqli_close($con);
   }
   else{
    header("Location: newuser.php");

   }
                      
        
       
 



    ?>



   
