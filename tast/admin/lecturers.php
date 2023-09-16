<?php
require_once '../config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>users</title>
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
        <h2>LIST OF ALL LECTURERS</h2> <a href="admin.html">back</a>
        <table border="2" style=" border-collapse:collapse">
        <tr>  <th>ID</th>  <th>First_name</th>  <th>Last_name</th>  <th>Email</th> <th>Password</th> <th>Bio</th> <th>Expertise</th> <th>Action</th></tr>
        <?php
       
        $result = mysqli_query( $con,"SELECT * FROM lecturer");
       
        while( $row = mysqli_fetch_assoc($result)){      			
            ?>
            <tr> <td><?php echo $row['l_id'] ?></td>
             <td><?php echo $row['l_firstname']?></td> 
             <td> <?php echo $row['l_lastname']?></td> 
             <td> <?php echo $row['l_email']?></td> 
             <td><?php echo $row['l_password']?></td> 
             <td> 
               <form action="update_lecturer.php" method="post">
                    <input type='hidden' name='id' value="<?php echo $row['l_id'] ?>">
                    <input type='submit' name='update' value='Update'>
                  </form> |
             
             <form action="delete_lecturer.php" method="post">
                    <input type='hidden' name='id' value="<?php echo $row['l_id'] ?>">
                    <input type='submit' name='delete' value='Delete'>
                  </form>
                    </td><td></td><td></td>
                   
                   </tr>
           
           <?php
                   }
                   
                    mysqli_close($con) ;
                     
                  
            
                  ?>
        </table>
        <a href="newuser.php">Add new User</a>
    </center>
</body>
</html>
