
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
    <title>course</title>
    <link rel="stylesheet" href="admin.css">
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
        <div class="container"  style="margin-top: 4rem; background-color: rgb(15, 122, 136); width: 30rem;height: 30rem; border-radius: 10PX;">
        <div class="explain">
            <h2>UPDATE COURSE</h2> <a href="course.php">back</a>
        </div>
<?php
        $id = $_POST['id'];

$result = mysqli_query( $con,"SELECT * FROM courses WHERE c_id = $id ");
while( $row = mysqli_fetch_assoc($result)){  
    ?>

        <form action="update_course_process.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['c_id']; ?>">
    <div class="course" style="height: 20rem; width: 70%;margin-top: 5rem;">
        course Title: <input type="text" name="c_title" value="<?php echo $row['c_title']; ?>"><br>
        Description: <textarea name="c_description" id="" cols="30" rows="10" value="<?php echo $row['c_description']; ?>"></textarea><br>
        Image:  <input type="file" name="c_picturer" id="c_picturer" placeholder="course Image" accept=".jpg, .JPG" value="<?php echo $row['c_picturer']; ?>"> <br>  <br><br>
      Category : <select name="c_category" id="" value="<?php echo $row['c_category'] ;} ?>">
        <option value="ICT">ICT</option>
        <option value="ENGINERRING">ENGINERRING</option>
        <option value="MATHEMATICS">MATHEMATICS</option>
    </select><br><br>
    <button type="submit" name="update">UPDATE COURSE</button>
    </div></form></div>
</center>


</body>
</html>