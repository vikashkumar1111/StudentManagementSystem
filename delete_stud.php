<?php
include 'schoolDB.php';

$id=$_GET['id'];
$del="DELETE FROM `students` WHERE `id`='$id'";

$query=mysqli_query($conn,$del);

if($query){
    header('location:student.php');
}
else{
    echo "Not deleted";
}




?>