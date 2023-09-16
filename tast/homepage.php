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
    <title>Document</title>
    <style>
        .box-cont {
            background: black;
            overflow-y: auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(270px, 1fr));
            gap: 20px; /* Increased gap for better separation */
            padding: 20px; /* Added padding for spacing */
            background-color: black;
        }

        .bo {
            background-color: #fff; /* White background for better contrast */
            padding: 20px; /* Added padding for spacing */
            border-radius: 5px; /* Rounded corners for a nicer look */
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); /* Added shadow for depth */
        }

        .bo a {
            color: #333; /* Link color */
            text-decoration: none; /* Remove underline */
        }

        .bo a:hover {
            text-decoration: underline; /* Underline on hover */
        }
    </style>
</head>
<body>

<?php
include('header.php');
?>

<div class="part1">
    <div id="welcomeMessage">
        <?php
        if (isset($_SESSION['success'])) {
            echo ('<p style="color:green">' . $_SESSION['success'] . " " . strtoupper($lname) . "</p>");
        }
        ?>
    </div>
    <h2 id="">Welcome  <?php echo strtoupper($lname); ?></h2>
    <p>Welcome to our online learning platform! We are excited to have you here and look forward to helping you achieve your educational goals. Our diverse range of courses will provide you with the knowledge and skills you need to succeed in your chosen field.</p>
    <p>Explore our selection of courses and embark on a journey of discovery. Whether you're interested in technology, business, or creative arts, we have something for everyone. Our experienced instructors are dedicated to your success, and we're here to support you every step of the way.</p>

    <div class="new" style="color:black"><center>New Courses:</center></div>
</div>

<div class="box-cont">
    <div class="bo"><a href="course1.html">Learn the latest web development techniques and build responsive, user-friendly websites. Dive into HTML, CSS, JavaScript, and more.</a></div>
    <div class="bo"><a href="course2.html">Master the art of digital marketing and grow your online presence. Explore SEO, social media, and content strategy.</a></div>
    <div class="bo"><a href="course3.html">Discover the world of data science and analytics. Gain insights from big data and make data-driven decisions.</a></div>
    <div class="bo"><a href="course4.html">Unleash your creativity with our graphic design course. Create stunning visuals and unleash your artistic potential.</a></div>
    <div class="bo"><a href="course5.html">Become a coding pro with our Python programming course. Code, debug, and automate tasks with ease.</a></div>
    <div class="bo"><a href="course6.html">Explore the world of finance and investments. Learn to make informed financial decisions and grow your wealth.</a></div>
    <div class="bo"><a href="course7.html">Enhance your leadership skills with our management course. Lead teams, make strategic decisions, and drive success.</a></div>
    <div class="bo"><a href="course8.html">Dive into the world of artificial intelligence and machine learning. Build intelligent systems and algorithms.</a></div>
    <div class="bo"><a href="course9.html">Unlock the secrets of effective communication. Improve your writing and speaking skills for personal and professional success.</a></div>
    <div class="bo"><a href="course10.html">Explore the fascinating world of astronomy and space exploration. Journey through the cosmos and learn about the universe.</a></div>
    <div class="bo"><a href="course11.html">Delve into the world of culinary arts and gourmet cooking. Master the art of fine cuisine and impress your friends and family.</a></div>
    <div class="bo"><a href="course12.html">Learn about the history of ancient civilizations and their contributions to human culture. Explore the mysteries of the past.</a></div>
</div>

<center> <div class="" style="color:black"> Help Center:</div><hr>

    <?php
    include('footer.php');
    ?>
</center>

<script>
    const welcomeMessage = document.getElementById("welcomeMessage");
    setTimeout(() => {
        welcomeMessage.style.display = "none";
    }, 2000);
</script>
</body>
</html>
