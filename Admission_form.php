
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
                    <h2>Add New Student</h2>

                </div>
                <div class="mainbox" id="adform">
                    <form class="add-form" method="POST" action="Action.php" enctype="multipart/form-data">
                        <div class="row">
                            <div class="row2">
                            <div class="form-group">
                                <label>Student Name *</label><br>
                                <input type="text" placeholder="" class="form-control" name="fname">

                            </div>
                            <div class="form-group">
                                <label>Parents Name *</label><br>
                                <input type="text" placeholder="" class="form-control" name="lname">

                            </div>
                            <div class="form-group">
                                <label>Gender *</label><br>
                                <select name="gender" id="1" aria-hidden="true" tabindex="-1" class="form-control">
                                    <option value="0">Please Select Gender *</option>
                                    <option value="Mal">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Others">Others</option>
                                </select>

                            </div>
                            <div class="form-group">
                                <label>Date Of Birth *</label><br>
                                <input type="date" placeholder="dd/mm/yy" class="form-control"
                                    data-position="bottom right" name="dob">

                            </div>
                         </div>
                            <div class="row2">
                            <div class="form-group">
                                <label>Roll</label><br>
                                <input type="number" placeholder="" class="form-control" name="roll">

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
                                <input type="number" placeholder="" class="form-control" name="class">

                            </div>
                            <div class="form-group">
                                <label>Section</label><br>
                                <select name="section" id="1" aria-hidden="true" tabindex="-1" class="form-control">
                                    <option value="0">Please Select Section *</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                    <option value="E">E</option>
                                </select>

                            </div>
                            <div class="form-group">
                                <label>Admission ID</label><br>
                                <input type="number" placeholder="" class="form-control" name="adm_no">

                            </div>
                            <div class="form-group">
                                <label>Phone</label><br>
                                <input type="tel" placeholder="" class="form-control" maxlength="12" name="phone">

                            </div> </div>
                            <div class="row2">
                            <div class="form-group">
                                <label>Short BIO</label><br>
                                <textarea class="form-control" name="short_bio" id="form-message" cols="10" rows="9" style="height: 275px; width: 297px;"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Upload Student Photo (150px X 150px)</label><br>
                                <input type="file" placeholder="" class="form-control" name="photo">
                                <button type="submit" name="save1" class="btn-sub">Save</button>
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



          <?php
          include_once 'footer.php';
          ?>