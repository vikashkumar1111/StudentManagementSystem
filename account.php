<?php


include_once 'header.php';
$name=$_SESSION['admin']; 
?>
        <div class="heading">
            <div class="st_dtl">
                <span>
                 Account Setting
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
                        <a href="student.html">
                            All Students
                        </a>
                    </li>
                </ul>
            </div>

        </div>

        <div class="cards ">
            <div class="recentorders">
                <div id="student">
                    <h2>Add Users</h2>

                </div>
                <div class="mainbox" id="adform">
                    <form class="add-form" action="Action.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="row2">
                            <div class="form-group">
                                <label>Username *</label><br>
                                <input type="text" placeholder="" class="form-control" name="username">

                            </div>
                            <div class="form-group">
                                <label>Password *</label><br>
                                <input type="text" placeholder="" class="form-control" name="password">

                            </div>
                            <div class="form-group">
                                <label>User Type *</label><br>
                                <select name="user_type" id="1" aria-hidden="true" tabindex="-1" class="form-control">
                                    <option value="0">Please Select *</option>
                                    <option value="Admin">Admin</option>
                                    <option value="Teachers">Teachers</option>
                                    <option value="Others">Others</option>
                                </select>

                            </div>
                            <div class="form-group">
                                <label>Gender *</label><br>
                                <select name="gender" id="1" aria-hidden="true" tabindex="-1" class="form-control">
                                    <option value="0">Please Select Gender *</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Others">Others</option>
                                </select>

                            </div>
                           
                         
                            <div class="form-group">
                                <label>Date Of Birth *</label><br>
                                <input type="date" placeholder="dd/mm/yy" class="form-control"
                                    data-position="bottom right" name="DOB">

                            </div>
                         </div>
                            <div class="row2">
                            <div class="form-group">
                              <label>Father`s Name *</label><br>
                              <input type="text" placeholder="" class="form-control" name="father_name">

                          </div>
                            <div class="form-group">
                                <label>Joining Date</label><br>
                                <input type="date" placeholder="" class="form-control" name="join_date">

                            </div>
                            <div class="form-group">
                                <label>Blood Group *</label><br>
                                <select name="blood" id="1" aria-hidden="true" tabindex="-1" class="form-control">
                                    <option value="0">Please Select Group *</option>
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                </select>

                            </div>
                            <div class="form-group">
                                <label>Religion*</label><br>
                                <select name="religion" id="1" aria-hidden="true" tabindex="-1" class="form-control">
                                    <option value="0">Please Select Religion *</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Muslim">Muslim</option>
                                    <option value="Christian">Christian</option>
                                    <option value="Sikhs">Sikhs</option>
                                    <option value="Buddish">Buddish</option>
                                    <option value="Others">Others</option>
                                   
                                </select>

                            </div>
                            <div class="form-group">
                                <label>E-Mail *</label><br>
                                <input type="email" placeholder="" class="form-control" name="email">

                            </div> </div>
                            <div class="row2">
                            <div class="form-group">
                              <label>Mother`s Name *</label><br>
                              <input type="text" placeholder="" class="form-control" name="mother_name">

                          </div>
                            <!-- <div class="form-group">
                                <label></label><br>
                                <select name="" id="1" aria-hidden="true" tabindex="-1" class="form-control">
                                    <option value="0">Please Select Section *</option>
                                    <option value="1">A</option>
                                    <option value="2">B</option>
                                    <option value="3">C</option>
                                    <option value="3">D</option>
                                    <option value="3">E</option>
                                </select>

                            </div> -->
                            <div class="form-group">
                                <label>ID No*</label><br>
                                <input type="number" placeholder="" class="form-control" name="idno">

                            </div>
                            <div class="form-group">
                                <label>Phone</label><br>
                                <input type="tel" placeholder="" class="form-control" maxlength="10" name="phone">

                            </div> </div>
                            <div class="row2">
                            <div class="form-group">
                                <label>Address</label><br>
                                <textarea class="form-control" name="address" id="form-message" cols="10" rows="9" style="height: 275px; width: 297px;"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Upload Student Photo (150px X 150px)</label><br>
                                <input type="file" name="photo" placeholder="" class="form-control">
                                <button type="submit" name="add_user" class="btn-sub">Save</button>
                                <button type="reset" class="btn-res" >Reset</button>
                            </div>
                            </div>
                            <div class="form-group">
                            
                                

                            </div>

                        </div>



                        </div>
                        

                    </form>



                </div>


            </div>

            <div class="cards2">
              <div class="recentStudents">
                <div class="cardHeader">
                  <h2>All Users</h2>
                </div>
                <?php
                        include 'schoolDB.php';
                        $sql = "SELECT * FROM `user`";
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
                      <h4 id="userh4"><?php echo $res['username'];?> <br><span><?php echo $res['user_type'];?></span></h4>
                    </td>
                  </tr>
                  
                </table>
                <?php
                        }
                ?>
              </div>
              <div class="recentorders">
                <div class="cardHeader">
                  <h2> Users Details</h2>
                </div>
                <div class="mainbox">
                 
               
                
                <?php
                
                      ($res=($_SESSION["details"]))

                    ?>    
                    <div class="box1" style="margin-right: 0px; width: 60%;">
                        <div class="image">
                            <img src="<?php echo $res['photo'];?>" alt="" style="width: 75%;">
                        </div>

                    </div>
                    <div class="box2">
                        <div class="content">
                            <div class="header">
                                <span><?php echo $res['username'];?></span></div>
                                <div class="header2">
                               
                            </div>
                            
                            
                            <div class="info_table">
                            <table style="width:114%;">
                                <tbody>
                                    <tr>
                                        <td class="header2">
                                            Name:
                                        </td>
                                        <td>
                                        <?php echo $res['username'];?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="header2">
                                            User Type:
                                        </td>
                                        <td>
                                        <?php echo $res['user_type'];?>
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
                                        <?php echo $res['father_name'];?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="header2">
                                           Mother Name:
                                        </td>
                                        <td>
                                        <?php echo $res['mother_name'];?>
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
                                        <?php echo $res['blood_group'];?>
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
                                           Joining Date:
                                        </td>
                                        <td>
                                        <?php echo $res['joining_date'];?>
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
                                           ID No:
                                        </td>
                                        <td>
                                        <?php echo $res['idno'];?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="header2">
                                           Address:
                                        </td>
                                        <td>
                                        <?php echo $res['address'];?>
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


            </div>
            </div>



            <?php
            include_once 'footer.php';
            ?>