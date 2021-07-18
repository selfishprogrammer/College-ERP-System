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
            <div class="container py-4">
                <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post">

                    <div class="form-group">

                        <input type="number" name="roll_no" style="font-family: monospace;"
                            placeholder="Enter Students Roll Number" class="form-control" id="">

                    </div>

                    <div class="form-group">

                        <button type="submit" name="by_roll_no" style="font-family: monospace;"
                            class="btn btn-outline-warning form-control"><b>Check
                                Fee</b></button>
                    </div>

                </form>
                <hr>


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

                        <button type="submit" name="by_semester" style="font-family: monospace;"
                            class="btn btn-outline-info form-control"><b>Check
                                Fee</b></button>
                    </div>

                </form>
                <hr>
                <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post">



                    <div class="form-group">

                        <button type="submit" name="by_paid" style="font-family: monospace;"
                            class="btn btn-outline-primary form-control"><b>Check
                                Paid Fee Status</b></button>
                    </div>

                </form>
                <hr>
                <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post">



                    <div class="form-group">

                        <button type="submit" name="by_pending" style="font-family: monospace;"
                            class="btn btn-outline-danger form-control"><b>Check
                                Pending Fee Status</b></button>
                    </div>
                </form>
            </div>
            <!--Roll -->
            <div class="container py-3">
                <!--Roll -->

                <div class="" style="overflow-x: auto;">
                    <?php
                    include '../Connection/connection.php';

                    if (isset($_POST['by_roll_no'])) {

                        $roll_no = $_POST['roll_no'];

                    ?>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="font-family:monospace" scope="col"><b>Roll No</b></th>
                                <th style="font-family:monospace" scope="col"><b>Name</b></th>
                                <th style="font-family:monospace" scope="col"><b>Semester</b></th>
                                <th style="font-family:monospace" scope="col"><b>Stream</b></th>
                                <th style="font-family:monospace" scope="col"><b>Fee</b></th>

                                <th style="font-family:monospace" scope="col"><b>Status</b></th>


                            </tr>
                        </thead>
                        <?php

                            $fee = mysqli_query($conn, "select * from `fee_of_students` where `roll_no`='$roll_no'");

                            while ($row = mysqli_fetch_assoc($fee)) { ?>
                        <tbody>
                            <tr>
                                <td style="font-family:monospace"><?php echo $row['roll_no'] ?></td>
                                <td style="font-family:monospace"><?php echo $row['name'] ?></td>
                                <td style="font-family:monospace"><?php echo $row['semester'] ?></td>
                                <td style="font-family:monospace"><?php echo $row['stream'] ?></td>
                                <td style="font-family:monospace"><?php echo $row['fee'] ?></td>
                                <?php if ($row['status'] == 'Paid') { ?>
                                <td style="font-family:monospace"><a class="btn btn-success form-control"
                                        style="font-family: monospace;" disabled>Paid</a></td>
                                <?php } else if ($row['status'] == 'NA') {
                                        ?>
                                <td style="font-family:monospace"><a class="btn btn-info form-control"
                                        style="font-family: monospace;" disabled>Pending</a></td>

                                <?php
                                        } ?>
                            </tr>

                        </tbody>
                        <?php }


                            ?>
                    </table>
                    <?php
                    }

                    ?>


                </div>
                <!--Semester -->


                <div class="" style="overflow-x: auto;">
                    <?php
                    include '../Connection/connection.php';

                    if (isset($_POST['by_semester'])) {

                        $semester = $_POST['semester'];

                    ?>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="font-family:monospace" scope="col"><b>Roll No</b></th>
                                <th style="font-family:monospace" scope="col"><b>Name</b></th>
                                <th style="font-family:monospace" scope="col"><b>Semester</b></th>
                                <th style="font-family:monospace" scope="col"><b>Stream</b></th>
                                <th style="font-family:monospace" scope="col"><b>Fee</b></th>

                                <th style="font-family:monospace" scope="col"><b>Status</b></th>


                            </tr>
                        </thead>
                        <?php

                            $fee = mysqli_query($conn, "select * from `fee_of_students` where `semester`='$semester'");

                            while ($row = mysqli_fetch_assoc($fee)) { ?>
                        <tbody>
                            <tr>
                                <td style="font-family:monospace"><?php echo $row['roll_no'] ?></td>
                                <td style="font-family:monospace"><?php echo $row['name'] ?></td>
                                <td style="font-family:monospace"><?php echo $row['semester'] ?></td>
                                <td style="font-family:monospace"><?php echo $row['stream'] ?></td>
                                <td style="font-family:monospace"><?php echo $row['fee'] ?></td>
                                <?php if ($row['status'] == 'Paid') { ?>
                                <td style="font-family:monospace"><a class="btn btn-success form-control"
                                        style="font-family: monospace;" disabled>Paid</a></td>
                                <?php } else if ($row['status'] == 'NA') {
                                        ?>
                                <td style="font-family:monospace"><a class="btn btn-info form-control"
                                        style="font-family: monospace;" disabled>Pending</a></td>

                                <?php
                                        } ?>
                            </tr>

                        </tbody>
                        <?php }


                            ?>
                    </table>
                    <?php
                    }

                    ?>


                </div>
                <!-- Paid -->
                <div class="" style="overflow-x: auto;">
                    <?php
                    include '../Connection/connection.php';

                    if (isset($_POST['by_paid'])) {


                    ?>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="font-family:monospace" scope="col"><b>Roll No</b></th>
                                <th style="font-family:monospace" scope="col"><b>Name</b></th>
                                <th style="font-family:monospace" scope="col"><b>Semester</b></th>
                                <th style="font-family:monospace" scope="col"><b>Stream</b></th>
                                <th style="font-family:monospace" scope="col"><b>Fee</b></th>

                                <th style="font-family:monospace" scope="col"><b>Status</b></th>


                            </tr>
                        </thead>
                        <?php

                            $fee = mysqli_query($conn, "select * from `fee_of_students` where `status`='Paid'");

                            while ($row = mysqli_fetch_assoc($fee)) { ?>
                        <tbody>
                            <tr>
                                <td style="font-family:monospace"><?php echo $row['roll_no'] ?></td>
                                <td style="font-family:monospace"><?php echo $row['name'] ?></td>
                                <td style="font-family:monospace"><?php echo $row['semester'] ?></td>
                                <td style="font-family:monospace"><?php echo $row['stream'] ?></td>
                                <td style="font-family:monospace"><?php echo $row['fee'] ?></td>
                                <?php if ($row['status'] == 'Paid') { ?>
                                <td style="font-family:monospace"><a class="btn btn-success form-control"
                                        style="font-family: monospace;" disabled>Paid</a></td>
                                <?php } else if ($row['status'] == 'NA') {
                                        ?>
                                <td style="font-family:monospace"><a class="btn btn-info form-control"
                                        style="font-family: monospace;" disabled>Pending</a></td>

                                <?php
                                        } ?>
                            </tr>

                        </tbody>
                        <?php }


                            ?>
                    </table>
                    <?php
                    }

                    ?>


                </div>

                <!-- Pending -->
                <div class="" style="overflow-x: auto;">
                    <?php
                    include '../Connection/connection.php';

                    if (isset($_POST['by_pending'])) {


                    ?>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="font-family:monospace" scope="col"><b>Roll No</b></th>
                                <th style="font-family:monospace" scope="col"><b>Name</b></th>
                                <th style="font-family:monospace" scope="col"><b>Semester</b></th>
                                <th style="font-family:monospace" scope="col"><b>Stream</b></th>
                                <th style="font-family:monospace" scope="col"><b>Fee</b></th>

                                <th style="font-family:monospace" scope="col"><b>Status</b></th>


                            </tr>
                        </thead>
                        <?php

                            $fee = mysqli_query($conn, "select * from `fee_of_students` where `status`='NA'");

                            while ($row = mysqli_fetch_assoc($fee)) { ?>
                        <tbody>
                            <tr>
                                <td style="font-family:monospace"><?php echo $row['roll_no'] ?></td>
                                <td style="font-family:monospace"><?php echo $row['name'] ?></td>
                                <td style="font-family:monospace"><?php echo $row['semester'] ?></td>
                                <td style="font-family:monospace"><?php echo $row['stream'] ?></td>
                                <td style="font-family:monospace"><?php echo $row['fee'] ?></td>
                                <?php if ($row['status'] == 'Paid') { ?>
                                <td style="font-family:monospace"><a class="btn btn-success form-control"
                                        style="font-family: monospace;" disabled>Paid</a></td>
                                <?php } else if ($row['status'] == 'NA') {
                                        ?>
                                <td style="font-family:monospace"><a class="btn btn-info form-control"
                                        style="font-family: monospace;" disabled>Pending</a></td>

                                <?php
                                        } ?>
                            </tr>

                        </tbody>
                        <?php }


                            ?>
                    </table>
                    <?php
                    }

                    ?>


                </div>
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


</html>