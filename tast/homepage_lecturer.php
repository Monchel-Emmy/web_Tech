<?php
include('config.php');
$result = mysqli_query($con, "SELECT * FROM courses");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="landing.css">
    <title>Lecturer Dashboard</title>
</head>
<body>

<?php
   include('header.php');
?>

<div class="part1">
    <div id="welcomeMessage">
        <?php
            if (isset($_SESSION['success'])) {
                echo('<p style="color:green">' . $_SESSION['success'] . " " . strtoupper($lname) . "</p>");
            }
        ?>
    </div>
    <h2>Welcome, <?php echo strtoupper($lname); ?></h2>
    <p>
    Welcome to the Lecturer Dashboard. This is your personalized space to manage courses, interact with students, and provide valuable educational content. As a lecturer, you have the tools and resources to make a significant impact on your students' learning journey.
</p>

    <div class="new" style="color: black; text-align: center; margin-top: 20px;">New Courses:</div>
</div>

<div class="box-cont" style="background: gray; overflow-y: auto; display: grid; grid-template-columns: repeat(auto-fit, minmax(270px, 1fr)); gap: 3px;">
    <?php
    while ($row = mysqli_fetch_assoc($result)) {
    ?>
        <div class="bo" style="overflow-x: hidden;">
            <img src="logo.png" alt="Course Image">
            <h3><?php echo $row['c_title']; ?></h3>
            <p><?php echo $row['c_description']; ?></p>
        </div>

    <?php
    }
    ?>
</div>

<center>
    <div style="color: black;">Help Center:</div>
    <hr>
</center>

<script>
    const welcomeMessage = document.getElementById("welcomeMessage");
    setTimeout(() => {
        welcomeMessage.style.display = "none";
    }, 2000);
</script>

<?php
include('footer.php');
?>
</body>
</html>
