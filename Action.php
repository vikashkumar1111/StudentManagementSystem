<?php
session_start();
include 'schoolDB.php';


//============sign_up=============
if (isset ($_POST['sign_up'])){
    $username = $_POST['username'];
    $pass = $_POST['password'];
    $conform_pass =$_POST['conf_pass'];

    $sql="INSERT INTO `user`( `username`, `password`) VALUES ('$username', '$pass')";

    $query = mysqli_query($conn,$sql);

    if($query){
        echo "inserted";
        header('location:login.html');
    }
    else{
        echo "not inserted";
    }

}

// ============login==============
if (isset ($_POST['login'])){
    $username = $_POST['user_name'];
    $pass = $_POST['password'];

    $sql = " select * from `user` where `username`='$username' or `password`='$pass'";
//     echo $sql;
//  exit;
    $query = mysqli_query($conn,$sql);
    $row = mysqli_num_rows($query);

    if($row==1){
        echo "login successful!";
        $_SESSION ['admin'] =$username;
        $_SESSION ['details'] = mysqli_fetch_assoc($query);
        header('location:i8admin.php');

    }
    else{
        echo  "<script>alert ('Incorrect username or password');</script>";
        //header('location:login.html');
    }

}
// ========change password or Update password=======
if(isset($_POST['change'])){
    $username = $_POST ['username'];
    $pass = $_POST['password'];
    $conform_pass = $_POST['conf_pass'];

    $sql = "UPDATE `admin` SET `name`='$username',`password`='$pass' WHERE 1";

    $query = mysqli_query($conn,$sql);
     if ($query){
         echo "your password has been changed!";
     }
     else 
     {
         echo "Oops! error occured in updating password";
         echo mysqli_error($conn);
     }
}

// ===========ADD New Students=========== 

if (isset($_POST['save1'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
   
    $gender = $_POST['gender'];
   
    $DOB = $_POST['dob'];
    $roll = $_POST['roll'];
    $blood = $_POST['blood'];
    $religion = $_POST['religion'];
    $email = $_POST['email'];
    $class = $_POST['class'];
    $sec = $_POST['section'];
    $adm_no = $_POST['adm_no'];
    $phone = $_POST['phone'];
    $short_bio = $_POST['short_bio'];
    $photo = $_FILES['photo'];

    $filename=$photo['name'];
    $fileerror=$photo['error'];
    $filetmp=$photo['tmp_name'];

    $path='images/'.$filename;
    move_uploaded_file($filetmp,$path);

    $sql2 = "INSERT INTO `students`( `students_name`, `parents_name`, `gender`, `DOB`, `roll`, `blood`, `religions`, `email`, `class`, `section`, `admission_id`, `phone`, `about`, `photo`)
     VALUES ('$fname',' $lname','$gender','$DOB',' $roll','$blood',' $religion','$email','$class','$sec','$adm_no','$phone','$short_bio','$path')";
        
        // echo $sql2;
        
    $query = mysqli_query($conn,$sql2);
    if($query){
        
        echo "<script>alert('Student Added!' );</script>";
        header("location:student.php");
        
      }
      else{
        
        echo mysqli_error($conn);
        //header("location:Admission_form.php");
      }
}

//*********************  Setting /Add new  users*************************

if (isset($_POST['add_user'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $user_type = $_POST['user_type'];
    $gender = $_POST['gender'];
    $father_name = $_POST['father_name'];
    $mother_name = $_POST['mother_name'];
    $DOB = $_POST['DOB'];
    $join_date = $_POST['join_date'];
    $blood = $_POST['blood'];
    $religion = $_POST['religion'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $photo = $_FILES['photo'];
    $id_no = $_POST['idno'];

    $filename=$photo['name'];
    $fileerror=$photo['error'];
    $filetmp=$photo['tmp_name'];

    $path='images/'.$filename;
    
    move_uploaded_file($filetmp,$path);

    $sql1 = "INSERT INTO `user`( `username`, `password`, `user_type`, `gender`, `father_name`, `mother_name`, `DOB`, `joining_date`, `blood_group`, `religions`, `email`,`idno`, `phone`, `address`, `photo`) 
    VALUES ('$username',' $password','$user_type',' $gender','$father_name',' $mother_name',' $DOB','$join_date','$blood',' $religion','$email','$id_no',' $phone','$address',' $path')";

    $query = mysqli_query($conn,$sql1);
    if($query){
        
        echo "<script>alert('User Added!' );</script>";
        header("location:account.php");
        
      }
      else{
        echo "<script>alert('Oops! Error ' );</script>";
        echo mysqli_error($conn);
      }
}

// =========Create Notices=========== 
if (isset($_POST['notice_save'])){

    $title = $_POST['title'];
    $details = $_POST['message'];
    $posted_by = $_POST['post_by'];
    $date = $_POST['date'];

    $sql = "INSERT INTO `notices`(`Title`, `Deatils`, `Posted_by`, `Date`) VALUES ('$title','$details','$posted_by','$date')";
     
    $query = mysqli_query($conn,$sql);
    
    if($query){
        echo "<script>alert('Notice Created! ' );</script>";
        //echo " Notice Created!";
        header("location:notice.php");

    }
    else{
        echo "Oops! Notice not Created.";
        echo mysqli_error($conn);
    }
}



?>