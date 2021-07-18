<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['position'] == "Faculty") {

    include '../Connection/connection.php';
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Akaya+Kanadaka&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Homework</title>
</head>

<body>
    <?php include '../nav_for_all.php'; ?>
    <div class="container">
        <div class="shadow-sm " style="border-radius: 20px; margin-top:40px;">
            <div class="p-4">
                <?php
                    if (isset($_POST['add_homework'])) {
                        $date_of_given = $_POST['date_of_given'];
                        $date_of_sub = $_POST['date_of_sub'];
                        $name = $_POST['name'];
                        $id = $_POST['id'];



                        $subject = $_POST['subject'];
                        $subject_code = $_POST['subject_code'];
                        $stream = $_POST['stream'];
                        $semester = $_POST['semester'];

                        $homework_desp = $_POST['homework_desp'];
                        $homework_title = $_POST['homework_title'];
                        $homework_file = $_FILES['homework_file']['name'];
                        $homework_file_tmp = $_FILES['homework_file']['tmp_name'];

                        $homework_status = "Pending";

                        $directory = "" . $homework_file;
                        move_uploaded_file($homework_file_tmp, $directory);


                        $add_homework = mysqli_query($conn, "insert into `homework` (`faculty_id`,`faculty_name`,`subject`,`subject_code`,`homework_date`,`homework_submission_date`,`title`,`homework`,`homework_desp`,`homework_status`,`semester`,`stream`) values 
                            ('$id','$name','$subject','$subject_code','$date_of_given','$date_of_sub','$homework_title','$homework_file','$homework_desp','$homework_status','$semester','$stream')");

                        if ($add_homework) {
                            echo '<div class="alert alert-success" role="alert">
Homework Added Successfully !
</div>';
                        } else {
                            echo '<div class="alert alert-danger" role="alert">
Something Went Wrong !
</div>';
                        }
                    }

                    ?>
                <div class="shadow-sm btn btn-default border  form-control   " id="add_homework"
                    style="border-radius:20px; font-family:monospace ;  "><b><i class="fa fa-arrow-down"
                            aria-hidden="true"></i>&nbsp;ADD HOMEWORK&nbsp;<i class="fa fa-arrow-down"
                            aria-hidden="true"></i></b></div>

                <div class="shadow-sm my-4" id="add_homework_body" style="border-radius:15px; display:none; ">

                    <div class="p-3">

                        <form action="<?php echo $_SERVER['REQUEST_URI']  ?>" method="post"
                            enctype="multipart/form-data">
                            <div class="form-group">

                                <input type="date" placeholder="Date Of Submission" style="font-family: monospace;"
                                    name="date_of_sub" class="form-control" id="">
                                <input type="hidden" value="<?php echo  date("d-m-Y")  ?>" name="date_of_given">
                                <input type="hidden" value="<?php echo  $_SESSION['name']  ?>" name="name">
                                <input type="hidden" value="<?php echo  $_SESSION['user_id']  ?>" name="id">
                            </div>
                            <div class="form-group">

                                <select name="subject" style="font-family: monospace;" class="form-control" id="">
                                    <option value="" selected>--Choose Subject--</option>
                                    <?php

                                        $faculty_name = $_SESSION['name'];

                                        $subjects = mysqli_query($conn, "select * from `subjects` where `faculty`='$faculty_name'");
                                        while ($row = mysqli_fetch_assoc($subjects)) {


                                            echo '<option value="' .  $row['sub_name'] . '" > ' . $row['sub_name'] . '</option>';
                                        }
                                        ?>
                                </select>

                            </div>
                            <div class="form-group">

                                <select name="subject_code" style="font-family: monospace;" class="form-control" id="">
                                    <option value="" selected>--Choose Subject Code--</option>
                                    <?php

                                        $faculty_name = $_SESSION['name'];

                                        $subjects = mysqli_query($conn, "select * from `subjects` where `faculty`='$faculty_name'");
                                        while ($row = mysqli_fetch_assoc($subjects)) {


                                            echo '<option value="' .  $row['sub_code'] . '" > ' . $row['sub_code'] . '</option>';
                                        }
                                        ?>
                                </select>

                            </div>

                            <div class="form-group">
                                <select name="semester" class="form-control"
                                    style="font-family:monospace; border-radius: 0px 0px 0px 0px;" id="">
                                    <option value="" selected>---Choose Semester---</option>
                                    <option value="1st Semester">1st Semester</option>
                                    <option value="2nd Semester">2nd Semester</option>
                                    <option value="3rd Semester">3rd Semester</option>
                                    <option value="4th Semester">4th Semester</option>
                                    <option value="5th Semester">5th Semester</option>
                                    <option value="6th Semester">6th Semester</option>
                                    <option value="7th Semester">7th Semester</option>
                                    <option value="8th Semester">8th Semester</option>



                                </select>
                            </div>
                            <div class="form-group">
                                <select name="stream" class="form-control"
                                    style="font-family:monospace;border-radius: 0px 0px 0px 0px;" id="">
                                    <option value="" selected>---Choose Stream---</option>
                                    <option value="Computer Science Engineering">Computer Science Engineering</option>
                                    <option value="Mechanical Engineering">Mechanical Engineering</option>
                                    <option value="Civil Engineering">Civil Engineering</option>
                                    <option value="Electronics & Commnucation Engineering">Electronics & Commnucation
                                        Engineering</option>
                                    <option value="Electrical Engineering">Electrical Engineering</option>


                                </select>
                            </div>
                            <div class="form-group">
                                <textarea name="homework_desp" id="" class="form-control text-center"
                                    style="width: 100%; height:300px; font-family: monospace;"></textarea>
                            </div>

                            <div class="form-group">
                                <input type="text" name="homework_title" placeholder="Homework Title"
                                    style="font-family: monospace;" class="form-control" id="">

                            </div>

                            <div class="form-group">

                                <label for="" style="font-family: monospace;">Add File Of Homework</label>
                                <input type="file" name="homework_file" class="form-control" id="">
                            </div>

                            <div class="form-group">
                                <button type="submit" name="add_homework" class="btn btn-outline-warning"
                                    style="font-family: monospace;"><b>Add Homework</b></button>
                            </div>

                        </form>

                    </div>


                </div>
            </div>
            <div class="p-4">
                <div class="shadow-sm btn btn-default border  form-control   " id="view_homework"
                    style="border-radius:20px; font-family:monospace;  "><b><i class="fa fa-arrow-down"
                            aria-hidden="true"></i>&nbsp;VIEW SUBMITTED HOMEWORK&nbsp;<i class="fa fa-arrow-down"
                            aria-hidden="true"></i></b></div>-

                <div class="shadow-sm my-4" id="view_homework_body" style="border-radius:15px; display:none;">

                    <div class="p-3">

                        <form action="<?php echo $_SERVER['REQUEST_URI']  ?>" method="post">

                            <div class="form-group">

                                <select name="homework_title" style="font-family: monospace;" class="form-control"
                                    id="">
                                    <option value="" selected>--Choose Homrwork Title--</option>

                                    <?php
                                        $homework_title = mysqli_query($conn, "select * from `homework`");
                                        while ($row = mysqli_fetch_assoc($homework_title)) {
                                            echo '<option value="' . $row['homework_id'] . '" >' . $row['title'] . '</option>';
                                        }

                                        ?>

                                </select>

                            </div>






                            <div class="form-group">
                                <button type="submit" name="submitted_homework"
                                    class="btn btn-outline-warning form-control" style="font-family: monospace;"><b>View
                                        Submitted Homework</b></button>
                            </div>

                        </form>

                    </div>


                </div>
                <?php if (isset($_POST['submitted_homework'])) {
                        $title = $_POST['homework_title'];

                    ?>
                <div class="shadow-sm my-4" style="border-radius:15px;">
                    <div style="overflow-x: auto;" class="p-3">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="font-family:monospace" scope="col"><b>Roll No</b></th>
                                    <th style="font-family:monospace" scope="col"><b>Name</b></th>
                                    <th style="font-family:monospace" scope="col"><b>Semester</b></th>
                                    <th style="font-family:monospace" scope="col"><b>Stream</b></th>

                                    <th style="font-family:monospace" scope="col"><b>Homework File</b></th>
                                    <th style="font-family:monospace" scope="col"><b>Date Of Submittion</b></th>


                                </tr>
                            </thead>
                            <?php

                                    $homework_view = mysqli_query($conn, "select * from `homework_submission` where `title`='$title'");
                                    while ($row = mysqli_fetch_assoc($homework_view)) {



                                    ?>
                            <tbody>
                                <tr>
                                    <td style="font-family:monospace"><?php echo $row['roll_no'] ?></td>
                                    <td style="font-family:monospace"><?php echo $row['name'] ?></td>
                                    <td style="font-family:monospace"><?php echo $row['semester'] ?></td>
                                    <td style="font-family:monospace"><?php echo $row['stream'] ?></td>
                                    <td style="font-family:monospace"><a
                                            href="../Homework/<?php echo $row['homework'] ?>"
                                            class="btn btn-outline-info form-control"
                                            style="font-family: monospace;">VIEW</a></td>
                                    <td style="font-family:monospace"><?php echo $row['date_of_submission'] ?></td>

                                </tr>

                            </tbody>
                            <?php  } ?>
                        </table>




                    </div>
                </div>
                <?php


                    } ?>


            </div>
        </div>
    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script>
    $(() => {

        $('#add_homework').click(() => {

            $('#add_homework_body').slideToggle("slow")

        })
        $('#view_homework').click(() => {

            $('#view_homework_body').slideToggle("slow")

        })

    })
    </script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
-->
</body>

</html>

<?php } else {
    header("location:../");
} ?>