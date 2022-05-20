<?php

include_once 'header.php';
?>
        <div class="heading">
            <div class="st_dtl">
                <span>
                    Notice Board
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
                            notice
                        </a>
                    </li>
                </ul>
            </div>

        </div>
        <div class="nrow">
            <div class="ncolumn">
                <div class="right">
                    <div class="headings">
                        <span>
                            Create a Notice
                        </span>
                    </div>
                    <form action="Action.php" method="POST" class="newform">
                        <div class="nrow1">
                            <div class="form-notice">
                                <label for="Title">Title</label>
                                <input type="text" class="form-control" name="title" required>
                            </div>
                            <div class="form-notice">
                                <label for="Title">Details</label>
                                <textarea name="message" class="form-control" id="" cols="30" rows="10"></textarea required>
                            </div>
                            <div class="form-notice">
                                <label for="Title">Posted By</label>
                                <input type="text" class="form-control" name="post_by" value="<?php echo $_SESSION['admin']; ?>" >
                            </div>
                            <div class="form-notice">
                                <label for="Title">Date</label>
                                <input type="date" class="form-control" name="date" required>
                            </div>
                            <div class="form-notice btn-notice">
                                <button type="submit" name="notice_save" class="btn-sub">Save</button>
                                <button type="reset" class="btn-res">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="ncolumn">
                <div class="left">
                    <div class="headings">
                        <span>
                            Notice Board
                        </span>
                    </div>
                    <div class="cardHeader">
                        <form class="example" action=" ">
                            <input type="text" placeholder="Search by Date.." name="search">
                            <input type="text" placeholder="Search by Title.." name="search">


                            <button type="submit">
                                <ion-icon name="search-outline"></ion-icon>
                            </button>
                        </form>
                    </div>
                    <div class="notice-board">
                    <?php
                        include 'schoolDB.php';
                        $sql = "SELECT * FROM `notices`";
                        $query = mysqli_query($conn,$sql);

                        
                        while ($res=mysqli_fetch_array($query)){
                    ?>
                        <div class="notice-list">
                            <div class="post-date" style="background-color:skyblue;">
                                01 apr 2022
                            </div>
                            <h6 class="notice-title">
                                <a href="#">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, consequuntur?
                                </a>
                            </h6>
                            <div class="post-by">
                                Lorem, ipsum dolor.
                                <span>
                                    5 min ago
                                </span>
                            </div>

                        </div>
                       
                        <div class="notice-list">
                            <div class="post-date" style="background-color:pink;">
                            <?php echo $res['Date'];?>
                            </div>
                            <h6 class="notice-title">
                                <a href="#">
                                <?php echo $res['Title'];?>
                                </a>
                            </h6>
                            <div class="post-by">
                            <?php echo $res['Posted_by'];?>
                                <span>
                                    5 min ago
                                </span>
                            </div>

                        </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
<?php

include_once 'footer.php';
?>