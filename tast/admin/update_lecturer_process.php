
<?php
session_start();

require_once '../config.php';

?>

<?php
if(isset($_POST['update'])){
 $id = $_POST['id'];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $password = $_POST["pname"];

$querry = "UPDATE lecturer SET l_firstname = '$fname',l_lastname = '$lname',l_email = '$email',l_password = '$password' WHERE l_id = $id;";
$querry_run = mysqli_query($con,$querry);
if($querry_run){
    header("location: lecturers.php");
}
}
   ?>