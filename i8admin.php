    

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
 <?php
  include 'header.php';
 ?>
    <!--Cards-->
    <div class="cardBox">
      <div class="card">
        <div>
          <div class="numbers">1,504</div>
          <div class="cardName">Students</div>
        </div>
        <div class="iconBx">
          <ion-icon name="people-circle-outline"></ion-icon>
        </div>
      </div>
      <div class="card">
        <div>
          <div class="numbers">1,504</div>
          <div class="cardName">Teachers</div>
        </div>
        <div class="iconBx">
          <ion-icon name="people-outline"></ion-icon>
        </div>
      </div>
      <div class="card">
        <div>
          <div class="numbers">1,504</div>
          <div class="cardName">Parents</div>
        </div>
        <div class="iconBx">
          <ion-icon name="people-outline"></ion-icon>
        </div>
      </div>
      <div class="card">
        <div>
          <div class="numbers">1,504</div>
          <div class="cardName">Earnings</div>
        </div>
        <div class="iconBx">
          <ion-icon name="cash-outline"></ion-icon>
        </div>
      </div>
    </div>
    <!-- Add charts -->
    <div class="graphBox">

      <div class="box">
        <canvas id="myChart"></canvas>
        <span>Students Graph</span>
      </div>
      <div class="box">
        <canvas id="earning"></canvas>
      </div>
    </div>

    <!-- order details list-->
    <div class="details">
      <div class="recentorders">
        <div class="cardHeader">
          <h2>Recent Payments</h2>
          <a href="#" class="btn">view All</a>
        </div>
        <table>
          <thead>
            <tr>
              <td>Name</td>
              <td>Price</td>
              <td>Payments</td>
              <td>Status</td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>David</td>
              <td>$1200</td>
              <td>Paid</td>
              <td><span class="status delivered">Delivered</span></td>
            </tr>
            <tr>
              <td>David</td>
              <td>$1200</td>
              <td>Paid</td>
              <td><span class="status Pending">Pending</span></td>
            </tr>
            <tr>
              <td>Shara</td>
              <td>$1200</td>
              <td>Paid</td>
              <td><span class="status return">Return</span></td>
            </tr>
            <tr>
              <td>Jhon</td>
              <td>$1200</td>
              <td>Paid</td>
              <td><span class="status delivered">Delivered</span></td>
            </tr>
            <tr>
              <td>Mohit</td>
              <td>$1200</td>
              <td>Paid</td>
              <td><span class="status Pending">Pending</span></td>
            </tr>
            <tr>
              <td>Mark Willy</td>
              <td>$1200</td>
              <td>Paid</td>
              <td><span class="status delivered">Delivered</span></td>
            </tr>
            <tr>
              <td>David</td>
              <td>$1200</td>
              <td>Paid</td>
              <td><span class="status return">Return</span></td>
            </tr>
            <tr>
              <td>David</td>
              <td>$1200</td>
              <td>Paid</td>
              <td><span class="status inprogress">Inprogress</span></td>
            </tr>
            <tr>
              <td>David</td>
              <td>$1200</td>
              <td>Paid</td>
              <td><span class="status delivered">Delivered</span></td>
            </tr>
            <tr>
              <td>David</td>
              <td>$1200</td>
              <td>Paid</td>
              <td><span class="status return">Return</span></td>
            </tr>
            <tr>
              <td>David</td>
              <td>$1200</td>
              <td>Paid</td>
              <td><span class="status Pending">Pending</span></td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- New Students -->
      <div class="recentStudents">
        <div class="cardHeader">
          <h2>Recent Students</h2>
        </div>
        <?php
                        include 'schoolDB.php';
                        $sql = "SELECT `photo`,`students_name`,`admission_id` FROM `students` ORDER BY id DESC LIMIT 6";
                        $query = mysqli_query($conn,$sql);

                        $seq=1;
                        while ($res=mysqli_fetch_array($query)){
                    ?>
        <table>
          <tr>
            <td width="60px">
              <div class="imgBx"><img src="<?php echo $res['photo'];?>" alt="img"></div>
            </td>
            <td>
              <h4><?php echo $res['students_name'];?> <br><span><?php echo $res['admission_id'];?></span></h4>
            </td>
          </tr>
          
        </table>
        <?php
                        }
                ?>
      </div>




    </div>
    <!-- footers -->
    <div class="footer">
      <div class="copyright">
      <span>© Copyrights </span>
      <a href="#">i8school</a>
      <span> 2022. All rights reserved. Designed by </span>
      <a href="#">VikashKumar</a>
      </div>

    </div>

  </div>
  <script>
    //MenuToggle
    let toggle = document.querySelector('.toggle');
    let navigation = document.querySelector('.navigation');
    let main = document.querySelector('.main');

    toggle.onclick = function () {
      navigation.classList.toggle('active');
      main.classList.toggle('active');
    }
  </script>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
  <script src="./my_charts.js"></script>
</body>

</html>