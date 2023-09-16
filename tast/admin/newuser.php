
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="landing.css"> -->
    <title>Document</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <div class="firstpart">
   <div class="top">
   <div class="header"><span> <img src="../logo.png" alt="" height="90%" style="margin:0.3rem;"></span><li>monchel</li> <li></li> <li>Logout</li> </div>
   </div>
<center> 
  <div id="welcomeMessage">
<?php
   if (isset($_SESSION['error'])) {
           echo('<p style="color:red">'.$_SESSION['error']."</p>");
    }
    ?>
</div> 
<div class="container"  style="margin-top: 4rem; background-color: rgb(15, 122, 136); width: 30rem;height: 30rem; border-radius: 10PX;">
                    <div class="grid1" style="" >
                    <p><h3>REGISTER new user here</h3></p> 
                    <p><h3>REGISTER</h3></p> 
                    </div>
                    <form action="register.php" method="post">
                    <div class="grid2">
                        Firstname:<br>
                        <input type="text" name="fname" id=""><br>
                        Lastname:<br>
                        <input type="text" name="lname" id=""><br>
                        Email:<br>
                        <!-- <h4>please check your email to make sure it's correct.</h4> -->
                        <input type="text" name="email" id=""><br>
                        Password:<br>
                        <input type="text" name="pname" id=""><br>
                       <p>Stay up to date with Emails about special offers,new courses and recommendations.</p>
                      <h4>Choose your category:</h4>
                       <select name="category" id="">
                        <option value="student" >Student</option>
                        <option value="lecturer">Lecturer</option>
                        <option value="others">Others</option>
                       </select><br> <p>
                        <div class="sub"  style="background-color: rgb(119, 117, 115); width: 15rem; "><button type="submit" style="background-color: rgb(119, 117, 115); "> Register </button></div></p>
                    </div></form>
                   </div> </center> 

</div>
     
       <script>
        const welcomeMessage = document.getElementById("welcomeMessage");
        setTimeout(() => {
                welcomeMessage.style.display = "none";
            }, 2000);
      </script>
</body>
</html>


 