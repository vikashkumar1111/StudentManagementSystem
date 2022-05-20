<?php
$server= "localhost";
$user= "root";
$password= "";
$db= "test";
$conn= mysqli_connect($server, $user,$password,$db);
if($conn){
    echo 'connected';
}else{
    echo 'not connected';
}

//echo "text";
//echo $_POST['fullname'];

if(isset($_POST['save'])){
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $phone= $_POST['phone'];
    echo $name."<br>"; 
    echo $email."<br>";
    echo $phone."<br>";
    
}

// echo $_POST['fullname'];
var_dump($_post);
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form method="POST" action="">
            <div>
                <label for="username">Full Name:</label>
                <input type="text" placeholder="input your name" name="fullname"></input>
            </div>
            <div>
                <label for="">Email:</label>
                <input type="email" placeholder="input your email" name="email">
            </div>
            <div>
                <label for="phone">phone no:</label>
                <input type="tel" placeholder="input your number"  name="phone">
            </div>
            <div>
                <button type="submit" name="save">save</button>
            </div>

        </form>
    </div>
</body>
</html>