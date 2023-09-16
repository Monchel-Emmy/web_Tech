
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

$querry = "UPDATE students SET s_firstname = '$fname',s_lastname = '$lname',s_email = '$email',s_password = '$password' WHERE s_id = $id;";
$querry_run = mysqli_query($con,$querry);
if($querry_run){
    header("location: users.php");
}
}
   ?>