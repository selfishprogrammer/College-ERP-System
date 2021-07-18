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
                <?php if (isset($_GET['roll_no'])) {


                ?>
                <!-- InDirect -->

                <div class="shadow-sm bg-white bg-white " style="width:100%; border-radius: 10px;">



                    <form action="<?php $_SERVER['REQUEST_URI'] ?>" class="p-3" method="post">


                        <div class="form-group">
                            <input type="hidden" name="roll_no" value="<?php echo $_GET['roll_no'] ?>"
                                placeholder="Roll Number Of A Student" class="form-control"
                                style="border-radius: 20px; font-family:monospace;" id="">
                        </div>


                        <div class="form-group">
                            <select name="month" class="form-control"
                                style="border-radius: 20px; font-family:monospace;" id="">
                                <option value="" selected>---Choose Month---</option>
                                <option value="January">January</option>
                                <option value="Febuary">Febuary</option>
                                <option value="March">March</option>
                                <option value="April">April</option>
                                <option value="May">May</option>
                                <option value="June">June</option>
                                <option value="July">July</option>
                                <option value="Augest">Augest</option>
                                <option value="September">September</option>
                                <option value="October">October</option>
                                <option value="November">November</option>
                                <option value="December">December</option>

                            </select>
                        </div>


                        <div class="form-group">
                            <button type="submit" name="by_semester1" class="form-control btn btn-info"
                                style="border-radius: 20px; font-family:monospace;">Check -></button>
                        </div>


                    </form>





                </div>

                <?php
                    include '../Connection/connection.php';
                    if (isset($_POST['by_semester1'])) {
                        $month = $_POST['month'];
                        $roll_no = $_POST['roll_no'];

                        $attendance = mysqli_query($conn, "select * from `atendance` where `month`='$month' and `roll_no`='$roll_no'");
                        $attendance1 = mysqli_query($conn, "select * from `atendance` where `month`='$month' and `roll_no`='$roll_no' and `todays_attendance`='P'");
                        $attendance2 = mysqli_query($conn, "select * from `atendance` where `month`='$month' and `roll_no`='$roll_no' and `todays_attendance`='A'");

                        $nums = mysqli_num_rows($attendance);
                        $nums1 = mysqli_num_rows($attendance1);

                        $nums2 = mysqli_num_rows($attendance2);
                        $persentage = 0;

                        $persentage = $nums1 * 100 / $nums;
                        if ($nums > 0) {
                    ?>
                <div class="shadow-sm bg-white" style="border-radius: 20px; margin-top:45px; font-family:monospace;">
                    <div class="p-4" style="overflow-x:auto">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="font-family:monospace" scope="col"><b>Roll No</b></th>
                                    <th style="font-family:monospace" scope="col"><b>Month</b></th>
                                    <th style="font-family:monospace" scope="col"><b>Date</b></th>
                                    <th style="font-family:monospace" scope="col"><b>Absent(A)/Present(P)</b></th>
                                </tr>
                            </thead>
                            <?php while ($row = mysqli_fetch_assoc($attendance)) { ?>
                            <tbody>
                                <tr>
                                    <td style="font-family:monospace"><?php echo $row['roll_no'] ?></td>
                                    <td style="font-family:monospace"><?php echo $row['month'] ?></td>
                                    <td style="font-family:monospace"><?php echo $row['day'] ?></td>
                                    <td style="font-family:monospace"><?php echo $row['todays_attendance'] ?></td>
                                </tr>

                            </tbody>
                            <?php }


                                        ?>
                        </table>
                    </div>

                    <?php






                                ?>
                    <div class="p-4" style="overflow-x:auto">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="font-family:monospace" scope="col"><b>Total Class In
                                            <?php echo $_POST['month'] ?></b></th>
                                    <th style="font-family:monospace" scope="col"><b>Total Present This Month</b></th>
                                    <th style="font-family:monospace" scope="col"><b>Total Absent This Month</b></th>
                                    <th style="font-family:monospace" scope="col"><b>Persentage</b></th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td style="font-family:monospace"><?php echo $nums ?></td>
                                    <td style="font-family:monospace"><?php echo $nums1 ?></td>
                                    <td style="font-family:monospace"><?php echo $nums2 ?></td>
                                    <td style="font-family:monospace"><?php echo $persentage ?>%</td>
                                </tr>

                            </tbody>

                        </table>
                    </div>
                    <?php

                        } else {
                            echo '     <div class="text-center" style="border-radius: 20px; font-family:monospace; font-size:30px;"><b>No
                 Record Found Related To Your Search</b></div>';
                        }
                    }

                        ?>
                </div>

                <?php


                    } else {  ?>
                <!-- Direct -->
                <div class="shadow-sm bg-white bg-white " style="width:100%; border-radius: 10px;">



                    <form action="<?php $_SERVER['REQUEST_URI'] ?>" class="p-3" method="post">


                        <div class="form-group">
                            <input type="text" name="roll_no" placeholder="Roll Number Of A Student"
                                class="form-control" style="border-radius: 20px; font-family:monospace;" id="">
                        </div>


                        <div class="form-group">
                            <select name="month" class="form-control"
                                style="border-radius: 20px; font-family:monospace;" id="">
                                <option value="" selected>---Choose Month---</option>
                                <option value="January">January</option>
                                <option value="Febuary">Febuary</option>
                                <option value="March">March</option>
                                <option value="April">April</option>
                                <option value="May">May</option>
                                <option value="June">June</option>
                                <option value="July">July</option>
                                <option value="Augest">Augest</option>
                                <option value="September">September</option>
                                <option value="October">October</option>
                                <option value="November">November</option>
                                <option value="December">December</option>

                            </select>
                        </div>


                        <div class="form-group">
                            <button type="submit" name="by_semester" class="form-control btn btn-info"
                                style="border-radius: 20px; font-family:monospace;">Check -></button>
                        </div>


                    </form>





                </div>

                <?php
                            include '../Connection/connection.php';
                            if (isset($_POST['by_semester'])) {
                                $month = $_POST['month'];
                                $roll_no = $_POST['roll_no'];

                                $attendance = mysqli_query($conn, "select * from `atendance` where `month`='$month' and `roll_no`='$roll_no'");
                                $attendance1 = mysqli_query($conn, "select * from `atendance` where `month`='$month' and `roll_no`='$roll_no' and `todays_attendance`='P'");
                                $attendance2 = mysqli_query($conn, "select * from `atendance` where `month`='$month' and `roll_no`='$roll_no' and `todays_attendance`='A'");

                                $nums = mysqli_num_rows($attendance);
                                $nums1 = mysqli_num_rows($attendance1);

                                $nums2 = mysqli_num_rows($attendance2);
                                $persentage = 0;

                                $persentage = $nums1 * 100 / $nums;
                                if ($nums > 0) {
                            ?>
                <div class="shadow-sm bg-white" style="border-radius: 20px; margin-top:45px; font-family:monospace;">
                    <div class="p-4" style="overflow-x:auto">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="font-family:monospace" scope="col"><b>Roll No</b></th>
                                    <th style="font-family:monospace" scope="col"><b>Month</b></th>
                                    <th style="font-family:monospace" scope="col"><b>Date</b></th>
                                    <th style="font-family:monospace" scope="col"><b>Absent(A)/Present(P)</b></th>
                                </tr>
                            </thead>
                            <?php while ($row = mysqli_fetch_assoc($attendance)) { ?>
                            <tbody>
                                <tr>
                                    <td style="font-family:monospace"><?php echo $row['roll_no'] ?></td>
                                    <td style="font-family:monospace"><?php echo $row['month'] ?></td>
                                    <td style="font-family:monospace"><?php echo $row['day'] ?></td>
                                    <td style="font-family:monospace"><?php echo $row['todays_attendance'] ?></td>
                                </tr>

                            </tbody>
                            <?php }


                                                ?>
                        </table>
                    </div>

                    <?php







                                        ?>
                    <div class="p-4" style="overflow-x:auto">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="font-family:monospace" scope="col"><b>Total Class In
                                            <?php echo $_POST['month'] ?></b></th>
                                    <th style="font-family:monospace" scope="col"><b>Total Present This Month</b></th>
                                    <th style="font-family:monospace" scope="col"><b>Total Absent This Month</b></th>
                                    <th style="font-family:monospace" scope="col"><b>Persentage</b></th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td style="font-family:monospace"><?php echo $nums ?></td>
                                    <td style="font-family:monospace"><?php echo $nums1 ?></td>
                                    <td style="font-family:monospace"><?php echo $nums2 ?></td>
                                    <td style="font-family:monospace"><?php echo $persentage ?>%</td>
                                </tr>

                            </tbody>

                        </table>
                    </div>
                    <?php
                                } else {
                                    echo '     <div class="text-center" style="border-radius: 20px; font-family:monospace; font-size:30px;"><b>No
                 Record Found Related To Your Search</b></div>';
                                }
                            }

                                ?>
                </div>

                <?php } ?>

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