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
    <link rel="stylesheet" href="admin.css">
    <title>COURSES</title>
</head>
<body>

<div class="header"> <ul>
            <li>Welcome,Admin</li>
            <li><a href="../landingpage.php">Logout</a></li>
            <li><a href="admin.html">HOME</a>  </li>
        </ul>
        <span><img src="../logo.png" alt="" height="90%" style="margin: 0.3rem;"></span>
       
    </div>
    <center>

    <div id="welcomeMessage">
            <?php
           if (isset($_SESSION['success'])) {
                   echo('<p style="color:green">'.$_SESSION['success']." ");
            }
            ?>
        </div>
        <h2>ALL COURSES </h2> <a href="admin.html">back</a>
        <table border="2" style=" border-collapse:collapse">
          <tr>  <th>ID</th>  <th>Course Title</th>  <th>Description</th>   <th>Categories</th> <th>Action</th></tr>
          <?php
       
       $result = mysqli_query( $con,"SELECT * FROM courses");
      
       while( $row = mysqli_fetch_assoc($result)){      			


        ?>
        <tr> <td><?php echo $row['c_id'] ?></td>
         <td><?php echo $row['c_title']?></td> 
         <td> <?php echo $row['c_description']?></td> 
         <td> <?php echo $row['c_category']?></td> 
         <td> 
           <form action="update_course.php" method="post">
                <input type='hidden' name='id' value="<?php echo $row['c_id'] ?>">
                <input type='submit' name='update' value='Update'>
              </form> |
         
         <form action="delete_course.php" method="post">
                <input type='hidden' name='id' value="<?php echo $row['c_id'] ?>">
                <input type='submit' name='delete' value='Delete'>
              </form>
                </td>
               
               </tr>
       
       <?php
               }
               
                mysqli_close($con) ;
                 
              
        
              ?>
      </table>
        <a href="newcourse.php">Add New Course</a>
    </center>

    <script>
        const welcomeMessage = document.getElementById("welcomeMessage");
        setTimeout(() => {
                welcomeMessage.style.display = "none";
            }, 2000);
      </script>
</body>
</html>
