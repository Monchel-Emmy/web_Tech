<?php
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
    <link rel="stylesheet" href="courses2.css">
    <link rel="stylesheet" href="landing.css">
    
</head>
<body >


   <div class="firstpart">
   <?php
   include('header.php');
   ?>
        
      <div class="container">
         <div style="color: blue;">
      <!-- <center> <marquee>SAME NEW COURSES HERE!!! </marquee></center> </div> -->
         <h1 class="heading">Our Courses</h1> 
         <div class="conttitle" style="color: rgb(8, 16, 24); background-color: antiquewhite; justify-content: center; padding: 1rem;">Below are categories for different courses. <br><br> Explore a wide range of courses in various categories. Our courses are designed to help you develop the skills and knowledge you need for a successful career. Whether you're interested in mathematics, computer science, or any other field, you'll find valuable resources and engaging content here. Join us on a learning journey and unlock your full potential.</div>
    <div class="box-container">

         <?php
      
      while( $row = mysqli_fetch_assoc($result)){      			
?>


      
           <div class="box">
              <img src="study1.webp" alt="">
              <h4><?php echo $row['c_category']?></h4>
              <h3><?php echo $row['c_title']?></h3>
              <p><?php echo $row['c_description']?>.</p>
              <a href="studycourse.php" class="btn">Read more</a>
           </div>
       
<?php 
   
       }
       ?>
       
       
           </div>


       
   
       <center> <div class="other"> Help Center:</div>
  
       <?php
   include('footer.php');
   ?>
           </center>
</body>
</html>