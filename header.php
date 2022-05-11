<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('location:login.html');
}
// print_r($_SESSION["details"]); die;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin pannel</title>
    <link rel="stylesheet" href="./css/i8adminstyle.css">
</head>

<body>
  <div class="continer">
    <div class="navigation">
      <ul>
        <li>
          <a href="#" class="child1">
            <span class="icon">
              <ion-icon name="school-outline"></ion-icon>
            </span>
            <span class="title">i8school</span>
          </a>
        </li>
        <li>
          <a href="i8admin.php">
            <span class="icon">
              <ion-icon name="home-outline"></ion-icon>
            </span>
            <span class="title">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="student.php">
            <span class="icon">
              <ion-icon name="people-outline"></ion-icon>
            </span>
            <span class="title">Students</span>
          </a>
        </li>
        <li>
          <a href="teacher.php">
            <span class="icon">
              <ion-icon name="woman-outline"></ion-icon>
              
            </span>
            <span class="title">Teachers</span>
          </a>
        </li>
        <li>
          <a href="#">
            <span class="icon">
              <ion-icon name="person-outline"></ion-icon>
            </span>
            <span class="title">Parents</span>
          </a>
        </li>
        <li>
          <a href="notice.php">
            <span class="icon">
              <ion-icon name="notifications-outline"></ion-icon>
            </span>
            <span class="title">Notice</span>
          </a>
        </li>
        <li>
          <a href="404.php">
            <span class="icon">
              <ion-icon name="document-outline"></ion-icon>
            </span>
            <span class="title">Page</span>
        </a>
        </li>
        <li>
          <a href="change_password.php">
            <span class="icon">
              <ion-icon name="lock-closed-outline"></ion-icon>
            </span>
            <span class="title">Passwoard</span>
          </a>
        </li>
        <li>
          <a href="mymap.php">
            <span class="icon">
              <ion-icon name="earth-outline"></ion-icon>
            </span>
            <span class="title">Map</span>
          </a>
        </li>
        <li>
          <a href="account.php">
            <span class="icon">
              <ion-icon name="settings-outline"></ion-icon>
            </span>
            <span class="title">Settings</span>
          </a>
        </li>
        <li>
          <a href="sign_out.php">
            <span class="icon">
              <ion-icon name="log-out-outline"></ion-icon>
            </span>
            <span class="title">Sign Out</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
  <!--main-->
  <div class="main">
    <div class="topbar">
      <div class="toggle">
        <ion-icon name="menu-outline"></ion-icon>
      </div>
      <!--search-->
      <div class="search">
        <label for="">
          <input type="text" placeholder="Search here">
          <ion-icon name="search-outline"></ion-icon>
        </label>
      </div>
      <!--userImg-->
      <div class="user">
        <img src="./images/customer1.png" alt="userlogo">
      </div>
    </div>