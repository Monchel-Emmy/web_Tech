
<?php
session_start();

require_once '../config.php';

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
   <div class="header"> <ul>
            <li>Welcome,Admin</li>
            <li><a href="../landingpage.php">Logout</a></li>
            <li><a href="admin.html">HOME</a>  </li>
        </ul>
        <span><img src="../logo.png" alt="" height="90%" style="margin: 0.3rem;"></span>
       
    </div>
   </div>
<center> 
<div class="container"  style="margin-top: 4rem; background-color: rgb(15, 122, 136); width: 30rem;height: 30rem; border-radius: 10PX;">
                    <div class="grid1" style="" ><span style="margin-left: 25rem;"><a href="users.php"> Back</a> </span>
                    <p><h3>EDIT USER</h3></p> 
                    </div>

                    <?php

$id = $_POST['id'];

$result = mysqli_query( $con,"SELECT * FROM students WHERE s_id = $id ");
while( $row = mysqli_fetch_assoc($result)){  
    ?>
                    <form action="update_user_process.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $row['s_id']; ?>">
                    <div class="grid2">
                        Firstname:<br>
                        <input type="text" name="fname" value="<?php echo $row['s_firstname']; ?>" id=""><br>
                        Lastname:<br>
                        <input type="text" name="lname" value="<?php echo $row['s_lastname']; ?>"  id=""><br>
                        Email:<br>
                        <input type="text" name="email"  value="<?php echo $row['s_email']; ?>" id=""><br>
                        Password:<br>
                        <input type="text" name="pname"  value="<?php echo $row['s_password']; }?>"id=""><br>
                     <br> <p>
                        <div class="sub"  style="background-color: rgb(119, 117, 115); width: 15rem; "><button type="submit" name="update" style="background-color: rgb(119, 117, 115); "> Update </button></div></p>
                    </div></form>


                   </div> </center> 

</div>
    
</body>
</html>


 