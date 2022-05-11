<?php
    
    include 'schoolDB.php';
    $id = $_GET['id'];
    include_once 'header.php';

    ?>


        <div class="heading">
            <div class="st_dtl">
                <span>
                    Students Details
                </span>
            </div>
            <div class="heading_menu">
                <ul id="list">
                    <li>
                        <a href="i8admin.php">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="student.php">
                            All Students
                        </a>
                    </li>
                </ul>
            </div>

        </div>

        <div class="cards ">
            <div class="recentorders">
                <div id="student">
                    <h2 >About Me</h2>

                  
                    <div class="header_elements">
                        <ul>

                        <?php
                        include 'schoolDB.php';
                        $sql = "SELECT * FROM `students` WHERE `id`='$id'";
                        
                        
                        $query = mysqli_query($conn,$sql);

                        while ($res=mysqli_fetch_array($query)){
                    ?>

                            <li>
                                <a href="edit_student.php?id=<?php echo $res['id']; ?>">
                                    <ion-icon name="create-outline"></ion-icon>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <ion-icon name="print-outline"></ion-icon>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <ion-icon name="download-outline"></ion-icon>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>

                    


                <div class="mainbox">
                    <div class="box1">
                        <div class="image">
                            <img src="<?php echo $res['photo'];?>" alt="">
                        </div>

                    </div>
                    <div class="box2">
                        <div class="content">
                            <div class="header">
                                <span><?php echo $res['students_name'];?></span></div>
                                <div class="header2">
                                <p>
                                <?php echo $res['about'];?>
                                </p>
                            </div>
                            
                            
                            <div class="info_table">
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="header2">
                                            Name:
                                        </td>
                                        <td>
                                        <?php echo $res['students_name'];?>
                                        </td>
                                       
                                    </tr>
                                    <tr>
                                        <td class="header2">
                                            Gender:
                                        </td>
                                        <td>
                                        <?php echo $res['gender'];?>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="header2">
                                            Father Name:
                                        </td>
                                        <td>
                                        <?php echo $res['parents_name'];?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="header2">
                                            Class:
                                        </td>
                                        <td>
                                        <?php echo $res['class'];?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="header2">
                                            Section:
                                        </td>
                                        <td>
                                        <?php echo $res['section'];?>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="header2">
                                            Date of Birth:
                                        </td>
                                        <td>
                                        <?php echo $res['DOB'];?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="header2">
                                           Blood Group:
                                        </td>
                                        <td>
                                        <?php echo $res['blood'];?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="header2">
                                            Religion:
                                        </td>
                                        <td>
                                        <?php echo $res['religions'];?>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="header2">
                                            Roll No:
                                        </td>
                                        <td>
                                        <?php echo $res['roll'];?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="header2">
                                           Admission Id:
                                        </td>
                                        <td>
                                        <?php echo $res['admission_id'];?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="header2">
                                            E-mail:
                                        </td>
                                        <td>
                                        <?php echo $res['email'];?>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="header2">
                                            Phone:
                                        </td>
                                        <td>
                                        <?php echo $res['phone'];?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        </div>

                    </div>
                </div>
                <?php
                        }
                ?>

            </div>


 <?php
  include_once 'footer.php';
 ?>