<?php

include_once 'header.php';
?>
<link rel="stylesheet" href="./css/login_signup.css">
        <div class="heading">
            <div class="st_dtl">
                <span>
                    Password
                </span>
            </div>
            <div class="heading_menu">
                <ul id="list">
                    <li>
                        <a href="i8admin.html">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="change_password.html">
                            password
                        </a>
                    </li>
                </ul>
            </div>

        </div>

        <div class="cards ">
            <div class="recentorders">
                <div id="student">
                    <h2 >Change Password</h2>
                   

                </div>
                <div class="mainbox">
                    <div class="box1">
                        <div class="image">
                            <img src="./images/forgot-password-icon-18348.jpg" alt="">
                        </div>

                    </div>
                    <div class="box2">
                        <div class="container" id="cont">
                            <form class="form" method="POST" action="Action.php">
                                <img src="./images/logoi8.png" alt="">
                                <div class="form_page" style="height: 67%;">
                                    <div class="con">
                                        <label for="">Username</label>
                                        <div class="input_con">
                                            <input type="text" placeholder="Enter Username" id="name" name="username">
                                            <ion-icon name="mail"></ion-icon>
                                        </div>
                                    </div>
                                    <div class="con">
                                        <label for="">New Password</label>
                                        <div class="input_con">
                                            <input type="password" placeholder="Enter Password" id="pass" name="password">
                                            <ion-icon name="bag"></ion-icon>
                                        </div>
                                    </div>
                                    <div class="con">
                                        <label for=""> Conform Password</label>
                                        <div class="input_con">
                                            <input type="password" placeholder="Enter Password" id="pass" name="conf_pass">
                                            <ion-icon name="bag"></ion-icon>
                                        </div>
                                    </div>
                
                                    
                                    <div class="con">
                                        <div>
                                            <button type="submit" name="change" class="login-btn">Change</button>
                                        </div>
                                    </div>
                                     <!-- <div class="login_social">
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
                                <div class="sign-up" style="margin-top: 70px;">
                                    Already a user ?
                                    <a href="login.html">Login!</a>
                                </div> -->
                                  
                            </form>
                
                        </div>

                    </div>
                </div>


            </div>



           <?php
          include_once 'footer.php';
           ?>