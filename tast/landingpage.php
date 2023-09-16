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
    <link rel="stylesheet" href="landing.css">
    <title>Document</title>
</head>
<body>
    <div class="firstpart">
   <div class="top">
      <div class="logo"><img src="logo.png" alt=""> </div>  <div class="logo"><a href="landingpage.php">HOME</a> <a href="courses.php">COURSES</a> <a href="question.php">QUESTIONS</a>  <a href="contact.php">CONTACT</a><a href="registerr.php">REGISTER</a> </div>
   </div>
   <div class="p"><P> <h2>WELCOME TO LearnAll.Com</h2></P></div>

      <div class="explain" > 
        <p  style=" margin-left: 100px; font-size: 2rem;">
        <h4>Welcome to LearnAll.com </h4>
        <p>LearnAll.com is an all-inclusive online platform designed to help students expand their 
            knowledge and excel academically. 
        It offers a vast library of books, notes, and study materials covering various subjects.
         The platform facilitates direct interaction with passionate educators through live chat sessions and Q&A forums. 
         Engaging video lessons, interactive learning tools like quizzes and flashcards,
          and collaborative discussion forums enrich the learning experience.</p>
         LearnAll.com aims to foster a supportive community and provides a user-friendly interface for easy navigation. 
        Join LearnAll.com to embark on an exciting journey of limitless learning possibilities..<br>

    </p>
    <p>Join The Class! where you interact with others and start with us your journey! <a href="register.php">Register</a> Or 
        <a href="login.php">Login</a> </p>
    </div>

    </div>
    <div class="ex"><P><marquee>Join your Online Class with your Coleages and Lecturers!:</marquee><hr></P></div>
    <div class="other" style="color: black;"> <center>New Courses:</center></div>
 


     <div class="box-container">

<?php

while( $row = mysqli_fetch_assoc($result)){      			
?>

  <div class="box">
   <span> <img src="study.jpg" alt="">
     <h4><?php echo $row['c_category']?></h4>
     <h3><?php echo $row['c_title']?></h3>
     <p><?php echo $row['c_description']?>.</p>
     <a href="studycourse0.php" class="btn">Read more</a></span> 
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