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

<body class="bg-info">
    <div class="container">
        <div class="shadow-sm bg-white" style="border-radius: 20px; margin-top:45px; font-family:monospace;">
            <div class="container py-3">
                <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post">
                    <div class="form-group">
                        <select name="semester" class="form-control" style="border-radius: 0px 0px 0px 0px;" id="">
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
                        <select name="stream" class="form-control" style="border-radius: 0px 0px 0px 0px;" id="">
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

                        <button type="submit" name="todays_class" class="btn btn-outline-info form-control"
                            style="font-family:monospace;">
                            Check Classes</button>
                    </div>
                </form>

                <?php

                if (isset($_POST['todays_class'])) {

                ?>
                <div class="shadow-sm" style="border-radius:20px">
                    <div class="container">
                        <div class="py-4" style="overflow-x: auto;">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="font-family:monospace" scope="col"><b>Subject</b></th>
                                        <th style="font-family:monospace" scope="col"><b>Subject Code</b></th>
                                        <th style="font-family:monospace" scope="col"><b>Faculty</b></th>
                                        <th style="font-family:monospace" scope="col"><b>Stream</b></th>
                                        <th style="font-family:monospace" scope="col"><b>Semester</b></th>
                                        <th style="font-family:monospace" scope="col"><b>Timing</b></th>
                                        <th style="font-family:monospace" scope="col"><b>Joinig Link</b></th>



                                    </tr>
                                </thead>
                                <?php
                                    include '../Connection/connection.php';
                                    $stream = $_POST['stream'];
                                    $semester = $_POST['semester'];
                                    $date = date("l");

                                    $todays_class = mysqli_query($conn, "select * from `today_class` where `stream`='$stream' and `semester`='$semester' and `day`='$date'");
                                    $nums = mysqli_num_rows($todays_class);
                                    if ($nums > 0) {
                                        while ($row = mysqli_fetch_assoc($todays_class)) {
                                    ?>

                                <tbody>
                                    <tr>
                                        <td style="font-family:monospace"><?php echo $row['subject_code'] ?></td>
                                        <td style="font-family:monospace"><?php echo $row['subject'] ?></td>
                                        <td style="font-family:monospace"><?php echo $row['faculty'] ?></td>
                                        <td style="font-family:monospace"><?php echo $row['stream'] ?></td>
                                        <td style="font-family:monospace"><?php echo $row['semester'] ?></td>
                                        <td style="font-family:monospace"><?php echo $row['timiing'] ?></td>


                                        <td style="font-family:monospace"><a href="<?php echo $row['joining_link'] ?>"
                                                class="btn btn-outline-info form-control" style="font-family:monospace">
                                                Join Class</a></td>
                                    </tr>

                                </tbody>


                                <?php
                                        }

                                        ?>

                            </table>

                        </div>
                        <?php
                                    } else {
                                    }
                        ?>

                    </div>
                </div>
                <?php
                }
                ?>


            </div>
        </div>
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