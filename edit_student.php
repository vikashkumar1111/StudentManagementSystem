  <?php
    
    include 'schoolDB.php';
    $id = $_GET['id'];
    include_once 'header.php';

    ?>

  <?php

    if (isset($_POST['submit'])) {
        $student = $_POST['students_name'];
        $parents = $_POST['parents'];

        $gender = $_POST['gender'];

        $DOB = $_POST['DOB'];
        $roll = $_POST['roll_no'];
        $blood = $_POST['group'];
        $religion = $_POST['religion'];
        $email = $_POST['email'];
        $class = $_POST['class'];
        $sec = $_POST['section'];
        $adm_no = $_POST['adm_id'];
        $phone = $_POST['phone'];
        $short_bio = $_POST['about_me'];
        $photo = $_FILES['photo'];

        $filename = $photo['name'];
        $fileerror = $photo['error'];
        $filetmp = $photo['tmp_name'];

        $path = 'images/' . $filename;
        move_uploaded_file($filetmp, $path);

        $up = "UPDATE `students` SET `id`='$id', `students_name`='$student',`parents_name`='$parents',`gender`='$gender',`DOB`='$DOB',`roll`='$roll',`blood`='$blood',`religions`='$religion',`email`='$email',`class`='$class',`section`='$sec',`admission_id`='$adm_no',`phone`='$phone',`about`='$short_bio',`photo`='$path' WHERE `id`='$id'";

        // echo $sql2;

        $query = mysqli_query($conn, $up);
        if ($query) {

            echo "<script>alert('Student Details Updated!' );</script>";
            //header("location:edit_student.php");

        } else {

            echo mysqli_error($conn);
            //header("location:Admission_form.php");
        }
    }
    ?>
  <style>
      #editbox input,
      textarea {
          border-width: 0px;
          border: none;
          outline: none;
          font-size: 16px;
      }

      #editbox .about_me {
          color: rgb(139, 139, 139);
          width: 70%;
          height: 50%;
      }

      button {

          border: none;
          font-size: 2.5rem;
          background-color: white;
          padding: 0.2rem;
          cursor: pointer;

      }
  </style>
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
              <h2>About Me</h2>
              <?php
                include 'schoolDB.php';
                $sql = "SELECT * FROM `students` WHERE `id`='$id'";
                //echo $sql;
                $query = mysqli_query($conn, $sql);

                while ($res = mysqli_fetch_array($query)) {
                ?>
                  <div class="header_elements">
                      <FORM method="POST" action="" enctype="multipart/form-data">
                          <ul>

                              <li>

                                  <button type="submit" name="submit">
                                      <ion-icon name="cloud-upload-outline"></ion-icon>
                                  </button>

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
                      <img src="<?php echo $res['photo']; ?>" alt="">
                  </div>

              </div>
              <div class="box2" id="editbox">
                  <div class="content">

                      <div class="header">
                          <span><input type="text" value="<?php echo $res['students_name']; ?>" name="students_name"></span>
                      </div>
                      <div class="header2">



                          <p>
                              <input type="text" name="about_me" class="about_me" value="<?php echo $res['about']; ?>">
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
                                          <input type="text" value="<?php echo $res['students_name']; ?>" name="students_name">
                                      </td>
                                  </tr>
                                  <tr>
                                      <td class="header2">
                                          Gender:
                                      </td>
                                      <td>
                                          <input type="text" value="<?php echo $res['gender']; ?>" name="gender">
                                      </td>

                                  </tr>
                                  <tr>
                                      <td class="header2">
                                          Father Name:
                                      </td>
                                      <td>
                                          <input type="text" value="<?php echo $res['parents_name']; ?>" name="parents">
                                      </td>
                                  </tr>
                                  <tr>
                                      <td class="header2">
                                          Class:
                                      </td>
                                      <td>
                                          <input type="text" value="<?php echo $res['class']; ?>" name="class">
                                      </td>
                                  </tr>
                                  <tr>
                                      <td class="header2">
                                          Section:
                                      </td>
                                      <td>
                                          <input type="text" value="<?php echo $res['section']; ?>" name="section">
                                      </td>

                                  </tr>
                                  <tr>
                                      <td class="header2">
                                          Date of Birth:
                                      </td>
                                      <td>
                                          <input type="date" value="<?php echo $res['DOB']; ?>" name="DOB">
                                      </td>
                                  </tr>
                                  <tr>
                                      <td class="header2">
                                          Blood Group:
                                      </td>
                                      <td>
                                          <input type="text" value=" <?php echo $res['blood']; ?>" name="group">
                                      </td>
                                  </tr>
                                  <tr>
                                      <td class="header2">
                                          Religion:
                                      </td>
                                      <td>
                                          <input type="text" value=" <?php echo $res['religions']; ?>" name="religion">
                                      </td>

                                  </tr>
                                  <tr>
                                      <td class="header2">
                                          Roll No:
                                      </td>
                                      <td>
                                          <input type="number" value="<?php echo $res['roll']; ?>" name="roll_no">
                                      </td>
                                  </tr>
                                  <tr>
                                      <td class="header2">
                                          Admission Id:
                                      </td>
                                      <td>
                                          <input type="text" value=" <?php echo $res['admission_id']; ?>" name="adm_id">
                                      </td>

                                  </tr>
                                  <tr>
                                      <td class="header2">
                                          E-mail:
                                      </td>
                                      <td>
                                          <input type="email" value="<?php echo $res['email']; ?>" name="email">
                                      </td>
                                  </tr>
                                  <tr>
                                      <td class="header2">
                                          Phone:
                                      </td>
                                      <td>
                                          <input type="phone" value=" <?php echo $res['phone']; ?>" name="phone" maxlength="10">
                                      </td>

                                  </tr>
                                  <tr>
                                      <td class="header2">
                                          Upload New Photo:
                                      </td>
                                      <td>
                                          <input type="file" placeholder="" class="form-control" name="photo" value="<?php echo $res['photo']; ?>">
                                      </td>

                                  </tr>



                              </tbody>
                          </table>
                          </FORM>
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