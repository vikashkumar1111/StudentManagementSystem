
  <?php
  include_once 'header.php';
  ?>
        <div class="heading">
            <div class="st_dtl">
                <span>
                    Students
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
                        <a href="#">
                            Student Details
                        </a>
                    </li>
                </ul>
            </div>

        </div>

        <div class="details2 ">
            <div class="recentorders">
                <div class="cardHeader">
                    <h2>All Students</h2>
                    <a href="Admission_form.php" class="btn">Add Students</a>
                </div>
                <div class="cardHeader">
                    <form class="example" action=" ">
                        <input type="text" placeholder="Search by roll.." name="search">
                        <input type="text" placeholder="Search by name.." name="search">
                        <input type="text" placeholder="Search by class.." name="search">

                        <button type="submit">
                            <ion-icon name="search-outline"></ion-icon> Search
                        </button>
                    </form>
                </div>

                
                    <center>

                <table>
                    <thead>
                        <tr>
                        <th>Serial No. </th>
                            <td>Photo</td>
                            <td>Name</td>
                            <td>Gender</td>
                            <td>Class</td>
                           
                            <td>Parents</td>
                           
                           
                            <td>Phone</td>
                            <td>E-mail</td>
                            <td colspan="3">Action</td>
                        </tr>
                    </thead>
                    <?php
                        include 'schoolDB.php';
                        $sql = "SELECT * FROM `students`";
                        $query = mysqli_query($conn,$sql);

                        $seq=1;
                        while ($res=mysqli_fetch_array($query)){
                    ?>
                    <tbody>
                        <tr>
                            <td><?php echo $seq; ?></td>
                            <td><img src="<?php echo $res['photo'];?>" alt="profile" width="40px"></td>
                            <td><span><?php echo $res['students_name'];?></span></td>
                            <td><?php echo $res['gender'];?></td>
                            <td><?php echo $res['class'];?></td>
                            
                            <td><?php echo $res['parents_name'];?></td>
                           
                            
                            <td><?php echo $res['phone'];?></td>
                            <td><?php echo $res['email'];?></td>
                            <td><span class="delete"><a href="delete_stud.php?id=<?php echo $res['id']; ?>">
                                        <ion-icon name="trash-outline"></ion-icon>
                                    </a></span></td>
                            <td><span class="edit"><a href="edit_student.php?id=<?php echo $res['id']; ?>">
                                        <ion-icon name="create-outline"></ion-icon>
                                    </a></span></td>
                            <td><span class="view"><a href="student_details.php?id=<?php echo $res['id']; ?>">
                                        <ion-icon name="eye-outline"></ion-icon>
                                        </ion-icon>
                                    </a></span></td>
                        </tr>

                        
                    </tbody>
                    <?php
                    $seq = $seq + 1;
                        }
                ?>
                </table>
                </center>
                <div class="pagination">
                    <!-- pagination elements -->
                    <div class="pagination_section">
                        <a href="#">
                            << Previous</a>
                                <a href="#">1</a>
                                <a href="#"class="active">2</a>
                                <a href="#">3</a>
                                <a href="#" >4</a>
                                <a href="#">5</a>
                                <a href="#">Next >></a>
                    </div>
                </div>

            </div>




        </div>
       <?php
      include_once 'footer.php';

       ?>
