<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('location:login.php');
}
$nameError = "incorrect username";

include 'schoolDB.php';


// ============login==============
if (isset ($_POST['login'])){
    $username = $_POST['user_name'];
    $pass = $_POST['password'];
    
    $sql = " select * from `login` where `username`='$username'";
    
    $query = mysqli_query($conn,$sql);
    $row = mysqli_num_rows($query);
    
    if($row==1){
        $row = mysqli_fetch_assoc($query);
       
        if(password_verify($pass, $row['password'])){
          
          $_SESSION['admin']= $username;
    
          
          ?>
                    <script>
                        alert("Login Successful!");
                    </script>
            <?php
          header('location:i8admin.php');
        } else{
            ?>
                <script>
                       alert("Login Faild!");
                    </script>
            <?php
            $_SESSION["error"] ="incorrect password";
          header("location:login.php");
        }
      
        
      }
      else{  ?>
        <script>
               alert("Login Faild!");
            </script>
    <?php
       
        $_SESSION["error"] = $nameError;
        header("location:login.php");
      }
}

//============sign_up=============
$name_error= "Username already exists"; 
if (isset ($_POST['sign_up'])){
    $username = mysqli_real_escape_string($conn, $_POST['username']);
	$pass = mysqli_real_escape_string($conn, $_POST['password']);
	$conform_pass = mysqli_real_escape_string($conn, $_POST['conf_pass']);

	$password = password_hash($pass, PASSWORD_BCRYPT);
	$conpass = password_hash($conform_pass, PASSWORD_BCRYPT);

    $namequery = "select * from login where `username`=	'$username'";

    $nquery = mysqli_query($conn, $namequery);
    $count = mysqli_num_rows($nquery);
    if ($count > 0) {
        $_SESSION["error"] = $name_error;
        header("location:signup.php");
	} else {
		if ($pass === $conform_pass) {
			$insertsql = "INSERT INTO `login`( `username`, `password`, `conf_pass`) VALUES ('$username','$password','$conpass')";
            // echo $insertsql;
            // exit;
			$insquery = mysqli_query($conn, $insertsql);
			if ($insquery) {
            ?>
				<script>
					alert("register successful");
				</script>
			<?php
            header("location:login.php");
			} else {
			?>
				<script>
					alert("register Faild!");
				</script>
		    <?php
            //header("location:signup.php");
			}
		} else {
			$_SESSION["error"] = "password are not matching to confirm password";
            header("location:signup.php");
		}
	}

	
}

//========Forget password=========
 
if (isset ($_POST['forget'])){
    $username = mysqli_real_escape_string($conn, $_POST['username']);
	$pass = mysqli_real_escape_string($conn, $_POST['password']);
	$conform_pass = mysqli_real_escape_string($conn, $_POST['conf_pass']);

	$password = password_hash($pass, PASSWORD_BCRYPT);
	$conpass = password_hash($conform_pass, PASSWORD_BCRYPT);

    $sql = " select * from `login` where `username`='$username'";
    
    $query = mysqli_query($conn,$sql);
    $row = mysqli_num_rows($query);
    
    if($row==1){
	 
		if ($pass === $conform_pass) {
			$insertsql = "UPDATE `login` SET `password`='$password',`conf_pass`='$conpass' where`username`='$username'";
            //  echo $insertsql;
            // exit;
			$insquery = mysqli_query($conn, $insertsql);
			if ($insquery) {
            ?>
				<script>
					alert("Password Changed?");
				</script>
			<?php
            header("location:login.php");
			} else {
			?>
				<script>
					alert("Update Faild!");
				</script>
		    <?php
            $_SESSION["error"] = $name_error = "incorrect username";
            header("location:forget_password.php");
			}
		} else {
			$_SESSION["error"] = "password are not matching to confirm password";
            header("location:forget_password.php");
		}
    }
    else{ 
         ?>
      <script>
             alert("update Faild!");
          </script>
  <?php
     
      $_SESSION["error"] = $nameError;
      header("location:forget_password.php");
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
    $pass = $_POST['password'];
    $conform_pass =['conf_pass'];
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

    $password = password_hash($pass, PASSWORD_BCRYPT);
	$conpass = password_hash($conformpass, PASSWORD_BCRYPT);
    $path='images/'.$filename;
    
    move_uploaded_file($filetmp,$path);

    $sql1 = "INSERT INTO `login`( `username`, `password`,`conf_pass`, `user_type`, `gender`, `father_name`, `mother_name`, `DOB`, `joining_date`, `blood_group`, `religions`, `email`,`idno`, `phone`, `address`, `photo`) 
    VALUES ('$username',' $password',' $conpass','$user_type',' $gender','$father_name',' $mother_name',' $DOB','$join_date','$blood',' $religion','$email','$id_no',' $phone','$address',' $path')";

    $query = mysqli_query($conn,$sql1);
    if($query){
        
        echo "<script>alert('User Added!' );</script>";
        header("location:account.php");
        
      }
      else{
        echo "<script>alert('Oops! Error ' );</script>";
        echo mysqli_error($conn);
      }
      $sql2 = "INSERT INTO `login`(`username`, `password`, `IdNo`) VALUES ('$username','$password','$id_no',)";
      echo $sql2;
      exit;
      $query2 = mysqli_query($conn,$sql2);
      if($query2){
        ?>
        <script>
            alert("username and password added");
        </script>
<?php
      } else{
        ?>
        <script>
            alert("username & pass not added");
        </script>
<?php
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
        ?>
        <script>
            alert("Notice created successful");
        </script>
<?php
        //echo " Notice Created!";
        header("location:notice.php");

    }
    else{
        ?>
        <script>
            alert("Oops! Notice not Created.");
        </script>
<?php
        echo mysqli_error($conn);
        header("location:notice.php");
    }
}



?>
<?php
$name=  $_SESSION['admin'];
$sql="select * from login where username='$name'"; 
//echo $sql;
$query = mysqli_query($conn,$sql);
$row = mysqli_num_rows($query);
if($row==1){
    $_SESSION ['details'] = mysqli_fetch_assoc($query);
}
//var_dump($_SESSION ['details']);

echo "this is action page move to main page!";
?>