<?php
session_start();
include('config.php');
$result = mysqli_query( $con,"SELECT * FROM courses");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COURSES</title>
    <link rel="stylesheet" href="landing.css">
    
</head>
<body >


   <div class="firstpart">
   <div class="top">
      <div class="logo"><img src="logo.png" alt=""> </div>  <div class="logo"><a href="landingpage.php">HOME</a><a href="courses.php">COURSES</a> <a href="question.php">QUESTIONS</a> <a href="contact.php">CONTACT</a><a href="registerr.php">REGISTER</a> </div>
   </div>
        
      <div class="container">
         <div style="color: blue;">
      <!-- <center> <marquee>SAME NEW COURSES HERE!!! </marquee></center> </div> -->
         <h1 class="heading" style="color:  rgb(61, 238, 215); margin-left: 30rem; ">Our Courses</h1> 
         <div class="conttitle" style="color: rgb(8, 16, 24); background-color: antiquewhite; justify-content: center; padding: 1rem;"><h3>Below are categories for different courses.</h3> <br>SO you can choose one or more to study due to your choose:<br></div>
    <div class="box-container">

         <?php
      
      while( $row = mysqli_fetch_assoc($result)){      			
?>


      
           <div class="box">
              <img src="study1.webp" alt="">
              <h4><?php echo $row['c_category']?></h4>
              <h3><?php echo $row['c_title']?></h3>
              <p><?php echo $row['c_description']?>.</p>
              <a href="studycourse0.php" class="btn">Read more</a>
           </div>
       
<?php 
   
       }
       ?>
       
       
           </div>


       
   
       <center> <div class="other"> Help Center:</div><hr>
         
            
       <?php
   include('footer.php');
   ?>
            </center>
</body>
</html>