<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login_signup.css">
    <title>Signup page</title>
    

</head>

<body>
    <div class="body">
        <div class="container">
            <div class="card">
            <form class="form" method="POST" action="Action.php">
            <span style="color: red;    margin-top: 5px;"> <?php
                    if(isset($_SESSION["error"])){
                        $name_error = $_SESSION["error"];
                        echo "? "."$name_error";
                    }
                    // die($_SESSION["error"])
                ?>  </span>
           
                <img src="./images/logoi8.png" alt="">
                <div class="form_page">
                    <div>
                        <label for="">Username</label>
                        <div class="input_con">
                            <input type="text" placeholder="Enter Username" id="name"name="username" required>
                            <ion-icon name="mail"></ion-icon>
                        </div>
                    </div>
                    <div>
                        <label for="">Password</label>
                        <div class="input_con">
                            <input type="password" placeholder="Enter Password" id="pass" name="password" required>
                            <ion-icon name="bag"></ion-icon>
                        </div>
                    </div>
                    <div>
                        <label for=""> Conform Password</label>
                        <div class="input_con">
                            <input type="password" placeholder="Enter Password" id="pass" name="conf_pass" required>
                            <ion-icon name="bag"></ion-icon>
                        </div>
                    </div>

                    
                    <div>
                        <div>
                            <button type="submit" name="sign_up" class="login-btn">Sign up</button>
                        </div>
                    </div>
                    <div class="login_social">
                        <p>
                            or Sign up  with
                        </p>
                        <ul>
                            <li>
                                <a href="#" class="bg-fa">
                                    <ion-icon name="logo-facebook"></ion-icon>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="bg-tw">
                                    <ion-icon name="logo-twitter"></ion-icon>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="bg-go">
                                    <ion-icon name="logo-google"></ion-icon>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="bg-git">
                                    <ion-icon name="logo-github"></ion-icon>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
               
            </form>
            <div class="sign-up">
                Already a user ?
                <a href="login.php">Login!</a>
            </div>
        </div>
        </div>
    </div>
</body>



<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


</html>
<?php
    unset($_SESSION["error"]);
?>