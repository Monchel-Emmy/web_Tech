<?php
session_start();
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
      <div class="logo"><img src="logo.png" alt=""> </div>  <div class="logo"><a href="landingpage.php">HOME</a><a href="courses.php">COURSES</a> <a href="question.php">QUESTIONS</a> <a href="contact.php">CONTACT</a><a href="registerr.php">REGISTER</a> </div>
   </div>
<center> 
<div id="welcomeMessage">
  <?php
   if (isset($_SESSION['error'])) {
           echo('<p style="color:red">'.$_SESSION['error']."</p>");
    }
    ?>
</div> 
<div class="container"  style="margin-top: 1.6rem; background-color: rgb(15, 122, 136); width: 30rem;height: 35rem; border-radius: 10PX;">
                    <div class="grid1" style="" >
                    <p><h3>REGISTER</h3></p>   
                    </div>
                    <form action="register.php" method="post">
                    <div class="grid2" >
                        Firstname:<br>
                        <input type="text" name="fname" id="" placeholder="Enter Your Firstname..." style=" height: 1.6rem; width: 20rem; border-top-left-radius: 10px; border-bottom-right-radius: 10px; border: 3px solid cornflowerblue;  padding: 5px"><br>
                        Lastname:<br>
                        <input type="text" name="lname" id="" placeholder="Enter Your Lastname..." style=" height: 1.6rem; width: 20rem; border-top-left-radius: 10px; border-bottom-right-radius: 10px; border: 3px solid cornflowerblue;  padding: 5px"><br>
                        Email:<br>
                        <!-- <h4>please check your email to make sure it's correct.</h4> -->
                        <input type="text" name="email" id="" placeholder="Enter Your Email..." style=" height: 1.6rem; width: 20rem; border-top-left-radius: 10px; border-bottom-right-radius: 10px; border: 3px solid cornflowerblue;  padding: 5px"><br>
                        Password:<br>
                        <input type="text" name="pname" id="" placeholder="Enter Your Password..." style=" height: 1.6rem; width: 20rem; border-top-left-radius: 10px; border-bottom-right-radius: 10px; border: 3px solid cornflowerblue;  padding: 5px"><br>
                       <p>Stay up to date with Emails about special offers,new courses and recommendations.</p>
                      <h4>Choose your category:</h4>
                       <select name="category" id="" style=" height: 1.6rem; width: 20rem; border-top-left-radius: 10px; border-bottom-right-radius: 10px; border: 3px solid cornflowerblue;">
                        <option value="student" >Student</option>
                        <option value="lecturer">Lecturer</option>
                       </select><br> <p>
                      <button type="submit" style="background-color: rgb(119, 117, 115); height: 2rem; width: 12rem; border-radius: 8px;  "><b> Register </b></button></p>
                    </div></form>
                   <p><h3>You can <a href="login.php" style="color: rgb(15, 122, 136); text-decoration: none; font-weight: 900;background-color: rgb(0, 0, 0);" > LOGIN </a> here if you Already have account</h3></p>
                   </div> </center> 

</div>
<center> <div class="other"> Help Center:</div><hr>
    <div class="thirdpart">
        <div class="part0"><h3>EDUCATIONAL TOOLS</h3></div>
        <div class="part0"> <h3>SUPPORT</h3> </div>
        <div class="part0"> <h3>CONNECT</h3></div>
        <div class="part0"> <h3>About</h3></div>
        <div class="part0"> <h3>Address</h3></div>
        <div class="part0">
            <span>Learning Library</span><br>
            <span>Guided Lessons</span><br>
            <span></span><br>
         </div>
        <div class="part0"> 
            <span>Help Center</span><br>
            <span>Give Gift</span><br>
            <span>Contact Us</span><br>
            <span>FeedBack</span><br></div>
        <div class="part0">

            <span>Our Blog</span><br>
            <span>Tell us what you think</span><br>
            <span>Youtube</span><br>
            <span>Whatsapp</span><br>
            <span>Tweeter</span><br>
            <span>LinkedIn</span><br>
        </div>
        <div class="part0">
            <span>Company</span><br>
            <span>Privacy Policy</span><br>
            <span>Terms and Service</span><br>
        </div>
        <div class="part0">
            <span>Rwanda , Kigali city</span><br>
            <span>phoneNumber:+25782419365</span><br>
            <span>Email: LearnAll@gmail.com</span><br>
        </div>
        <div class="partcopy"> CopyRight &copy2023 , Developed By PROGRAMMER <b>MONCHEL</b></div>
    </div>
       </center>
       
       <script>
        const welcomeMessage = document.getElementById("welcomeMessage");
        setTimeout(() => {
                welcomeMessage.style.display = "none";
            }, 2000);
      </script>
</body>
</html>


 