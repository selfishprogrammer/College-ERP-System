<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Student Attendence</title>
</head>

<body>
    <div class="container">
        <div class="shadow lg bg-white my-2" style="width:100%; border-radius: 10px;">

            <div class="col-md-12">
                <form action="<?php $_SERVER['REQUEST_URI'] ?>" class="p-3" method="post">

                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <input type="text" name="roll_no" placeholder="Check By Roll Number Of A Student"
                                    class="form-control" style="border: radius 20px; font-family: monospace;" id="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <button type="submit" name="by_roll_no" class="form-control btn btn-info"
                                    style="border: radius 20px; font-family: monospace;">Check -></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-12">
                <form action="<?php $_SERVER['REQUEST_URI'] ?>" class="p-3" method="post">

                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <select name="semester" class="form-control"
                                    style="border: radius 20px; font-family: monospace;" id="">
                                    <option value="" selected>---Choose Semester---</option>
                                    <option value="1st">1st</option>
                                    <option value="2nd">2nd</option>
                                    <option value="3rd">3rd</option>
                                    <option value="4th">4th</option>
                                    <option value="5th">5th</option>
                                    <option value="6th">6th</option>
                                    <option value="7th">7th</option>
                                    <option value="8th">8th</option>


                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <button type="submit" name="by_semester" class="form-control btn btn-info"
                                    style="border: radius 20px; font-family: monospace;">Check -></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>


            <div class="col-md-12">
                <form action="<?php $_SERVER['REQUEST_URI'] ?>" class="p-3" method="post">

                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <select name="stream" class="form-control"
                                    style="border: radius 20px; font-family: monospace;" id="">
                                    <option value="" selected>---Choose Stream---</option>
                                    <option value="Computer Science Engineering">Computer Science Engineering</option>
                                    <option value="Mechanical Engineering">Mechanical Engineering</option>
                                    <option value="Civil Engineering">Civil Engineering</option>
                                    <option value="Electronics & Commnucation Engineering">Electronics & Commnucation
                                        Engineering</option>
                                    <option value="Electrical Engineering">Electrical Engineering</option>
                                    <option value="Chemical Engineering">Chemical Engineering</option>
                                    <option value="Areotical Emgineering">Areotical Emgineering</option>


                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <button type="submit" name="by_streame" class="form-control btn btn-info"
                                    style="border: radius 20px; font-family: monospace;">Check -></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-12">
                <form action="<?php $_SERVER['REQUEST_URI'] ?>" class="p-3" method="post">


                    <div class="form-group">
                        <button type="submit" name="by_full_record" class="form-control btn btn-info"
                            style="border: radius 20px; font-family: monospace;">Check Full Record-></button>
                    </div>
                </form>
            </div>

        </div>






        <!-- check fee -->




        <?php
        include '../Connection/connection.php';
        if (isset($_POST['by_roll_no'])) {
            $roll_no = $_POST['roll_no'];
            $position = "Student";
            $result_roll = mysqli_query($conn, "select * from `login` where `position`='$position' and `username`='$roll_no'");
            $nums_roll = mysqli_num_rows($result_roll);
            if ($nums_roll > 0) {
                $row_roll_no = mysqli_fetch_assoc($result_roll);


        ?>
        <!-- By Roll No  -->

        <div class="col-md-6 offset-md-3">
            <div class="shadow-lg bg-white border my-4" style="width: 100%; border-radius: 20px;">
                <div class="card-header bg-info" style="border-radius: 20px 20px 0px 0px;"></div>
                <div class="d-flex justify-content-center my-2">
                    <img src="./Students Profile Images/<?php echo $row_roll_no['pimg']  ?>" alt="..." height="140"
                        width="140" class="img-thumbnail">


                </div>
                <div class="text-center my-2" style="font-size: 20px; font-family:math;">
                    <b><?php echo $row_roll_no['name']  ?></b>
                </div>
                <hr>
                <div class="d-flex justify-content-between">
                    <div class="ml-4 my-2" style="font-size: 18px; font-family: monospace;"><b>Roll No </b></div>

                    <div class="mr-3 my-2" style="font-size: 18px; font-family: monospace; color:red">
                        <b><?php echo $row_roll_no['username']  ?></b>
                    </div>

                </div>
                <div class="d-flex justify-content-between">
                    <div class="ml-4 my-2" style="font-size: 18px; font-family: monospace;"><b>Department </b></div>

                    <div class="ml-3 mr-2 my-2" style="font-size: 18px; font-family: monospace; color:red">
                        <b><?php echo $row_roll_no['stream']  ?></b>
                    </div>

                </div>
                <div class="d-flex justify-content-between">
                    <div class="ml-4 my-2" style="font-size: 18px; font-family: monospace;"><b>Semester </b></div>

                    <div class="mr-3 my-2" style="font-size: 18px; font-family: monospace; color:red">
                        <b><?php echo $row_roll_no['semester']  ?></b>
                    </div>

                </div>

                <div class="d-flex justify-content-between">
                    <div class="ml-4 my-2" style="font-size: 18px; font-family: monospace;"><b>Phone </b></div>

                    <div class="mr-3 my-2" style="font-size: 18px; font-family: monospace; color:red">
                        <b><?php echo $row_roll_no['phone']  ?></b>
                    </div>

                </div>

                <div class="d-flex justify-content-between">
                    <div class="ml-4 my-2" style="font-size: 18px; font-family: monospace;"><b>Email </b></div>

                    <div class="mr-3 my-2" style="font-size: 18px; font-family: monospace; color:red">
                        <b><?php echo $row_roll_no['email']  ?></b>
                    </div>

                </div>

                <div class="d-flex justify-content-between">
                    <div class="ml-4 my-2" style="font-size: 18px; font-family: monospace;"><b>Father's Name </b></div>

                    <div class="mr-3 my-2" style="font-size: 18px; font-family: monospace; color:red">
                        <b><?php echo $row_roll_no['fname']  ?></b>
                    </div>

                </div>

                <hr>


                <div class="d-flex justify-content-between mt-3">
                    <a href="#" type="submit" class="btn btn-default form-control border "
                        style="border: radius 20px; font-family: monospace;"><i>Check Attendance -></i></a>
                    <a href="#" type="submit" class="btn btn-default form-control border "
                        style="border: radius 20px; font-family: monospace;"><i>Check Results -></i></a>



                </div>
                <div class="d-flex justify-content-between">
                    <a href="#" type="submit" class="btn btn-default form-control border "
                        style="border: radius 20px; font-family: monospace;"><i>Check Remarks -></i></a>
                    <a href="#" type="submit" class="btn btn-default form-control border "
                        style="border: radius 20px; font-family: monospace;"><i>Check Fee -></i></a>



                </div>
                <div class="card-footer bg-info" style="border-radius: 0px 0px 20px 20px;"></div>

            </div>

        </div>


        <!--  -->
        <!-- By Roll No  -->
        <?php
            } else {

                include 'error_page.php';
            }
        } else if (isset($_POST['by_semester'])) {
            include '../Connection/connection.php';

            ?>
        <div class="container">
            <div class="shadow-sm my-4" style="overflow-y: auto;">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" style="font-family: monospace;"><b>Student Id</b></th>
                            <th scope="col" style="font-family: monospace;"><b>Student Name</b></th>
                            <th scope="col" style="font-family: monospace;"><b>Student Roll No</b></th>
                            <th scope="col" style="font-family: monospace;"><b>Student Semester</b></th>
                            <th scope="col" style="font-family: monospace;"><b>Student Stream</b></th>

                            <th scope="col" style="font-family: monospace;"><b>Student Email</b></th>

                            <th scope="col" style="font-family: monospace;"><b>Student Phone</b></th>

                            <th scope="col" style="font-family: monospace;"><b>Student Father's Name</b></th>

                            <th scope="col" style="font-family: monospace;"><b>Student View</b></th>
                            <th scope="col" style="font-family: monospace;"><b>Student Attendance</b></th>

                            <th scope="col" style="font-family: monospace;"><b>Student Remarks</b></th>

                            <th scope="col" style="font-family: monospace;"><b>Student Fees</b></th>
                            <th scope="col" style="font-family: monospace;"><b>Student Update</b></th>



                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $semester = $_POST['semester'];
                            $position = "Student";

                            $result_roll = mysqli_query($conn, "select * from `login` where `position`='$position' and `semester`='$semester'");
                            $nums_roll = mysqli_num_rows($result_roll);
                            if ($nums_roll > 0) {
                                while ($row_roll_no = mysqli_fetch_assoc($result_roll)) {


                            ?>

                        <tr>
                            <th style="font-family: monospace;"><?php echo $row_roll_no['user_id'] ?></th>
                            <th style="font-family: monospace;"><?php echo $row_roll_no['name'] ?></th>
                            <th style="font-family: monospace;"><?php echo $row_roll_no['username'] ?></th>
                            <th style="font-family: monospace;"><?php echo $row_roll_no['semester'] ?></th>
                            <th style="font-family: monospace;"><?php echo $row_roll_no['stream'] ?></th>
                            <th style="font-family: monospace;"><?php echo $row_roll_no['email'] ?></th>
                            <th style="font-family: monospace;"><?php echo $row_roll_no['phone'] ?></th>
                            <th style="font-family: monospace;"><?php echo $row_roll_no['fname'] ?></th>
                            <th style="font-family: monospace;"><a
                                    href=" view_students_info?roll_no=<?php echo $row_roll_no['username'] ?>"
                                    style="width:10rem; font-family: monospace;" type="submit"
                                    class="btn btn-info form-control">View
                                    Student</a></th>
                            <th><a href=" view_student_attendance?roll_no=<?php echo $row_roll_no['username'] ?>"
                                    style="width:10rem; font-family: monospace;" type="submit"
                                    class="btn btn-success form-control">View
                                    Attendance</a></th>
                            <th><a href=" <?php echo $row_roll_no[''] ?>" style="width:10rem; font-family: monospace;"
                                    type="submit" class="btn btn-warning form-control">View
                                    Remarks</a></th>
                            <th><a href=" <?php echo $row_roll_no[''] ?>" style="width:10rem; font-family: monospace;"
                                    type="submit" class="btn btn-primary form-control">View
                                    Fees</a></th>
                            <th><a href=" <?php echo $row_roll_no[''] ?>" style="width:10rem; font-family: monospace;"
                                    type="submit" class="btn btn-danger form-control">Update Student
                                </a></th>

                        </tr>



                        <!-- check fee -->


                        <?php }


                                ?>

                    </tbody>
                </table>
            </div>
        </div>
        <?php
                            } else {

                                include 'error_page.php';
                            }

        ?>
        <?php
        } else if (isset($_POST['by_streame'])) {

    ?>

        <div class="container">
            <div class="shadow-sm my-4" style="overflow-y: auto;">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" style="font-family: monospace;"><b>Student Id</b></th>
                            <th scope="col" style="font-family: monospace;"><b>Student Name</b></th>
                            <th scope="col" style="font-family: monospace;"><b>Student Roll No</b></th>
                            <th scope="col" style="font-family: monospace;"><b>Student Semester</b></th>
                            <th scope="col" style="font-family: monospace;"><b>Student Stream</b></th>

                            <th scope="col" style="font-family: monospace;"><b>Student Email</b></th>

                            <th scope="col" style="font-family: monospace;"><b>Student Phone</b></th>

                            <th scope="col" style="font-family: monospace;"><b>Student Father's Name</b></th>

                            <th scope="col" style="font-family: monospace;"><b>Student View</b></th>
                            <th scope="col" style="font-family: monospace;"><b>Student Attendance</b></th>

                            <th scope="col" style="font-family: monospace;"><b>Student Remarks</b></th>

                            <th scope="col" style="font-family: monospace;"><b>Student Fees</b></th>
                            <th scope="col" style="font-family: monospace;"><b>Student Update</b></th>



                        </tr>
                    </thead>
                    <tbody>


                        <?php
                        $stream = $_POST['stream'];
                        $position = "Student";

                        $result_roll = mysqli_query($conn, "select * from `login` where `position`='$position' and `stream`='$stream'");
                        $nums_roll = mysqli_num_rows($result_roll);
                        while ($row_roll_no = mysqli_fetch_assoc($result_roll)) {


                        ?>
                        <tr>
                            <th style="font-family: monospace;"><?php echo $row_roll_no['user_id'] ?></th>
                            <th style="font-family: monospace;"><?php echo $row_roll_no['name'] ?></th>
                            <th style="font-family: monospace;"><?php echo $row_roll_no['username'] ?></th>
                            <th style="font-family: monospace;"><?php echo $row_roll_no['semester'] ?></th>
                            <th style="font-family: monospace;"><?php echo $row_roll_no['stream'] ?></th>
                            <th style="font-family: monospace;"><?php echo $row_roll_no['email'] ?></th>
                            <th style="font-family: monospace;"><?php echo $row_roll_no['phone'] ?></th>
                            <th style="font-family: monospace;"><?php echo $row_roll_no['fname'] ?></th>
                            <th style="font-family: monospace;"><a
                                    href=" view_students_info?roll_no=<?php echo $row_roll_no['username'] ?>"
                                    style="width:10rem; font-family: monospace;" type="submit"
                                    class="btn btn-info form-control">View
                                    Student</a></th>
                            <th><a href="view_student_attendance?roll_no=<?php echo $row_roll_no['username'] ?>"
                                    style="width:10rem; font-family: monospace;" type="submit"
                                    class="btn btn-success form-control">View
                                    Attendance</a></th>
                            <th><a href=" <?php echo $row_roll_no[''] ?>" style="width:10rem; font-family: monospace;"
                                    type="submit" class="btn btn-warning form-control">View
                                    Remarks</a></th>
                            <th><a href=" <?php echo $row_roll_no[''] ?>" style="width:10rem; font-family: monospace;"
                                    type="submit" class="btn btn-primary form-control">View
                                    Fees</a></th>
                            <th><a href=" <?php echo $row_roll_no[''] ?>" style="width:10rem; font-family: monospace;"
                                    type="submit" class="btn btn-danger form-control">Update Student
                                </a></th>

                        </tr>

                        <?php
                        }




                        ?>

                    </tbody>
                </table>
            </div>
        </div>

        <?php
        } else if (isset($_POST['by_full_record'])) {
    ?>

        <div class="container">
            <div class="shadow-sm my-4" style="overflow-y: auto;">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" style="font-family: monospace;"><b>Student Id</b></th>
                            <th scope="col" style="font-family: monospace;"><b>Student Name</b></th>
                            <th scope="col" style="font-family: monospace;"><b>Student Roll No</b></th>
                            <th scope="col" style="font-family: monospace;"><b>Student Semester</b></th>
                            <th scope="col" style="font-family: monospace;"><b>Student Stream</b></th>

                            <th scope="col" style="font-family: monospace;"><b>Student Email</b></th>

                            <th scope="col" style="font-family: monospace;"><b>Student Phone</b></th>

                            <th scope="col" style="font-family: monospace;"><b>Student Father's Name</b></th>

                            <th scope="col" style="font-family: monospace;"><b>Student View</b></th>
                            <th scope="col" style="font-family: monospace;"><b>Student Attendance</b></th>

                            <th scope="col" style="font-family: monospace;"><b>Student Remarks</b></th>

                            <th scope="col" style="font-family: monospace;"><b>Student Fees</b></th>
                            <th scope="col" style="font-family: monospace;"><b>Student Update</b></th>



                        </tr>
                    </thead>
                    <tbody>


                        <?php
                        $position = "Student";

                        $result_roll = mysqli_query($conn, "select * from `login` where `position`='$position'");
                        $nums_roll = mysqli_num_rows($result_roll);
                        while ($row_roll_no = mysqli_fetch_assoc($result_roll)) {


                        ?>
                        <tr>
                            <th style="font-family: monospace;"><?php echo $row_roll_no['user_id'] ?></th>
                            <th style="font-family: monospace;"><?php echo $row_roll_no['name'] ?></th>
                            <th style="font-family: monospace;"><?php echo $row_roll_no['username'] ?></th>
                            <th style="font-family: monospace;"><?php echo $row_roll_no['semester'] ?></th>
                            <th style="font-family: monospace;"><?php echo $row_roll_no['stream'] ?></th>
                            <th style="font-family: monospace;"><?php echo $row_roll_no['email'] ?></th>
                            <th style="font-family: monospace;"><?php echo $row_roll_no['phone'] ?></th>
                            <th style="font-family: monospace;"><?php echo $row_roll_no['fname'] ?></th>
                            <th style="font-family: monospace;"><a
                                    href=" view_students_info?roll_no=<?php echo $row_roll_no['username'] ?>"
                                    style="width:10rem; font-family: monospace;" type="submit"
                                    class="btn btn-info form-control">View
                                    Student</a></th>
                            <th><a href=" view_student_attendance?roll_no=<?php echo $row_roll_no['username'] ?>"
                                    style="width:10rem; font-family: monospace;" type="submit"
                                    class="btn btn-success form-control">View
                                    Attendance</a></th>
                            <th><a href=" <?php echo $row_roll_no[''] ?>" style="width:10rem; font-family: monospace;"
                                    type="submit" class="btn btn-warning form-control">View
                                    Remarks</a></th>
                            <th><a href=" <?php echo $row_roll_no[''] ?>" style="width:10rem; font-family: monospace;"
                                    type="submit" class="btn btn-primary form-control">View
                                    Fees</a></th>
                            <th><a href=" <?php echo $row_roll_no[''] ?>" style="width:10rem; font-family: monospace;"
                                    type="submit" class="btn btn-danger form-control">Update Student
                                </a></th>

                        </tr>

                        <?php
                        }




                        ?>

                    </tbody>
                </table>
            </div>
        </div>

        <?php
        } else if (isset($_GET['roll_no'])) {
            $roll_no = $_GET['roll_no'];
            $position = "Student";
            $result_roll = mysqli_query($conn, "select * from `login` where `position`='$position' and `username`='$roll_no'");
            $nums_roll = mysqli_num_rows($result_roll);
            $row_roll_no = mysqli_fetch_assoc($result_roll);


    ?>
        <!-- By Roll No  -->

        <div class="col-md-6 offset-md-3">
            <div class="shadow-lg bg-white border my-4" style="width: 100%; border-radius: 20px;">
                <div class="card-header bg-info" style="border-radius: 20px 20px 0px 0px;"></div>
                <div class="d-flex justify-content-center my-2">
                    <img src="./Students Profile Images/<?php echo $row_roll_no['pimg']  ?>" alt="..." height="140"
                        width="140" class="img-thumbnail">


                </div>
                <div class="text-center my-2" style="font-size: 20px; font-family:math;">
                    <b><?php echo $row_roll_no['name']  ?></b>
                </div>
                <hr>
                <div class="d-flex justify-content-between">
                    <div class="ml-4 my-2" style="font-size: 18px; font-family: monospace;"><b>Roll No </b></div>

                    <div class="mr-3 my-2" style="font-size: 18px; font-family: monospace; color:red">
                        <b><?php echo $row_roll_no['username']  ?></b>
                    </div>

                </div>
                <div class="d-flex justify-content-between">
                    <div class="ml-4 my-2" style="font-size: 18px; font-family: monospace;"><b>Department </b></div>

                    <div class="ml-3 mr-2 my-2" style="font-size: 18px; font-family: monospace; color:red">
                        <b><?php echo $row_roll_no['stream']  ?></b>
                    </div>

                </div>
                <div class="d-flex justify-content-between">
                    <div class="ml-4 my-2" style="font-size: 18px; font-family: monospace;"><b>Semester </b></div>

                    <div class="mr-3 my-2" style="font-size: 18px; font-family: monospace; color:red">
                        <b><?php echo $row_roll_no['semester']  ?></b>
                    </div>

                </div>

                <div class="d-flex justify-content-between">
                    <div class="ml-4 my-2" style="font-size: 18px; font-family: monospace;"><b>Phone </b></div>

                    <div class="mr-3 my-2" style="font-size: 18px; font-family: monospace; color:red">
                        <b><?php echo $row_roll_no['phone']  ?></b>
                    </div>

                </div>

                <div class="d-flex justify-content-between">
                    <div class="ml-4 my-2" style="font-size: 18px; font-family: monospace;"><b>Email </b></div>

                    <div class="mr-3 my-2" style="font-size: 18px; font-family: monospace; color:red">
                        <b><?php echo $row_roll_no['email']  ?></b>
                    </div>

                </div>

                <div class="d-flex justify-content-between">
                    <div class="ml-4 my-2" style="font-size: 18px; font-family: monospace;"><b>Father's Name </b></div>

                    <div class="mr-3 my-2" style="font-size: 18px; font-family: monospace; color:red">
                        <b><?php echo $row_roll_no['fname']  ?></b>
                    </div>

                </div>

                <hr>


                <div class="d-flex justify-content-between mt-3">
                    <a href="view_student_attendance?roll_no=<?php echo $row_roll_no['username']  ?>" type="submit"
                        class="btn btn-default form-control border "
                        style="border: radius 20px; font-family: monospace;"><i>Check Attendance -></i></a>
                    <a href="#" type="submit" class="btn btn-default form-control border "
                        style="border: radius 20px; font-family: monospace;"><i>Check Results -></i></a>



                </div>
                <div class="d-flex justify-content-between">
                    <a href="#" type="submit" class="btn btn-default form-control border "
                        style="border: radius 20px; font-family: monospace;"><i>Check Remarks -></i></a>
                    <a href="#" type="submit" class="btn btn-default form-control border "
                        style="border: radius 20px; font-family: monospace;"><i>Check Fee -></i></a>



                </div>
                <div class="card-footer bg-info" style="border-radius: 0px 0px 20px 20px;"></div>

            </div>

        </div>
        <?php
        }
    ?>




    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>