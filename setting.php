<?php


include_once 'header.php';
?>


        <div class="heading">
            <div class="st_dtl">
                <span>
                    Admission Form
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
                    <h2>Add New Student</h2>

                </div>
                <div class="mainbox">
                    <form class="add-form" action="Action.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="">
                            <div class="form-group">
                                <label>First Name *</label><br>
                                <input type="text" placeholder="" class="form-control" name="Fname">

                            </div>
                            <div class="form-group">
                                <label>Last Name *</label><br>
                                <input type="text" placeholder="" class="form-control" name="Lname">

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
                              <label>Father`s Name *</label><br>
                              <input type="text" placeholder="" class="form-control" name="father_name">

                          </div>
                          <div class="form-group">
                              <label>Mother`s Name *</label><br>
                              <input type="text" placeholder="" class="form-control" name="mother_name">

                          </div>
                            <div class="form-group">
                                <label>Date Of Birth *</label><br>
                                <input type="date" placeholder="dd/mm/yy" class="form-control"
                                    data-position="bottom right" name="DOB">

                            </div>
                         </div>
                            <div class="row2">
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
                                <label>Class *</label><br>
                                <input type="text" placeholder="" class="form-control" name="class">

                            </div>
                            <div class="form-group">
                                <label>Subjects</label><br>
                                <select name="subjects" id="1" aria-hidden="true" tabindex="-1" class="form-control">
                                    <option value="0">Please Select Section *</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                    <option value="E">E</option>
                                </select>

                            </div>
                            <div class="form-group">
                                <label>ID No*</label><br>
                                <input type="text" placeholder="" class="form-control" name="id_num">

                            </div>
                            <div class="form-group">
                                <label>Phone</label><br>
                                <input type="phone" placeholder="" class="form-control" maxlength="10" name="phone">

                            </div> </div>
                            <div class="row2">
                            <div class="form-group">
                                <label>Address</label><br>
                                <textarea class="form-control" name="address" id="form-message" cols="10" rows="9" style="height: 275px; width: 297px;"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Upload Student Photo (150px X 150px)</label><br>
                                <input type="file" placeholder="" class="form-control" name="photo">
                                <button type="submit" class="btn-sub" name="save">Save</button>
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

      


                <table>
                  <tr>
                    <td width="">
                      <div class="imgBx"><img src="./images/img_avatar2.png" alt="img"></div>
                    </td>
                    <td>
                      <h4>David <br><span>India</span></h4>
                    </td>
                  </tr>
                  <tr>
                    <td width="60px">
                      <div class="imgBx"><img src="./images/photo1644462733-modified.png" alt="img"></div>
                    </td>
                    <td>
                      <h4>Shara <br><span>India</span></h4>
                    </td>
                  </tr>
                  <tr>
                    <td width="60px">
                      <div class="imgBx"><img src="./images/img_avatar2.png" alt="img"></div>
                    </td>
                    <td>
                      <h4>David <br><span>India</span></h4>
                    </td>
                  </tr>
                  <tr>
                    <td width="60px">
                      <div class="imgBx"><img src="./images/customer1.png" alt="img"></div>
                    </td>
                    <td>
                      <h4>David <br><span>India</span></h4>
                    </td>
                  </tr>
                  <tr>
                    <td width="60px">
                      <div class="imgBx"><img src="./images/img_avatar2.png" alt="img"></div>
                    </td>
                    <td>
                      <h4>David <br><span>India</span></h4>
                    </td>
                  </tr>
                  <tr>
                    <td width="60px">
                      <div class="imgBx"><img src="./images/photo1644462733-modified.png" alt="img"></div>
                    </td>
                    <td>
                      <h4>David <br><span>India</span></h4>
                    </td>
                  </tr>
                </table>
              </div>
              <div class="recentorders">
                <div class="cardHeader">
                  <h2> Users Details</h2>
                </div>
                <div class="mainbox">
                    <div class="box1" style="margin-right: 0px;">
                        <div class="image">
                            <img src="./images/img_avatar2.png" alt="" style="width: 85%;">
                        </div>

                    </div>
                    <div class="box2" style="width: 50%;">
                        <div class="content">
                            <div class="header">
                                <span>Mark willy</span></div>
                                <div class="header2">
                               
                            </div>
                            
                            
                            <div class="info_table">
                            <table style="width:100%;">
                                <tbody>
                                    <tr>
                                        <td class="header2">
                                            Name:
                                        </td>
                                        <td>
                                            Mark willy
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="header2">
                                            Gender:
                                        </td>
                                        <td>
                                            female
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="header2">
                                            Father Name:
                                        </td>
                                        <td>
                                            Stive Jones
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="header2">
                                            Name:
                                        </td>
                                        <td>
                                            Mark willy
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="header2">
                                            Gender:
                                        </td>
                                        <td>
                                            female
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="header2">
                                            Father Name:
                                        </td>
                                        <td>
                                            Stive Jones
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="header2">
                                            Name:
                                        </td>
                                        <td>
                                            Mark willy
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="header2">
                                            Gender:
                                        </td>
                                        <td>
                                            female
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="header2">
                                            Father Name:
                                        </td>
                                        <td>
                                            Stive Jones
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="header2">
                                            Name:
                                        </td>
                                        <td>
                                            Mark willy
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="header2">
                                            Gender:
                                        </td>
                                        <td>
                                            female
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="header2">
                                            Father Name:
                                        </td>
                                        <td>
                                            Stive Jones
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