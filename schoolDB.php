<?php 
// Database
$servername = "localhost";
$user = "root";
$password = "";
$db= "student_management";

$conn = mysqli_connect($servername, $user, $password, $db);

if(!$conn){
    die("Connection failed:" .mysqli_connect_error());
}
else{
    //echo "database connected!";
}
?>