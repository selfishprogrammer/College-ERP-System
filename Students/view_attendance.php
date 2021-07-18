<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['position'] == "Student") {

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
    <title>Attendance</title>
</head>

<body>
    <?php include '../nav_for_all.php' ?>

    <div class="container">

        <div class="shadow-sm bg-white border my-2" style="border-radius: 10px;">

            <form action="<?php $_SERVER['REQUEST_URI'] ?>" class="p-3" method="post">

                <div class="form-group">

                    <select name="month_wise" style="font-family:monospace" class="form-control" id="">

                        <option value="" selected>--View Attendance Month Wise</option>
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
                    <button type="submit" name="attendance_btn" class="form-control btn btn-outline-warning">Check
                        Attendence</button>
                </div>


            </form>




        </div>





        <?php

            if (isset($_POST['attendance_btn'])) {
                include '../Connection/connection.php';

                $month = $_POST['month_wise'];
                $roll_no = $_SESSION['username'];


                $attendance = mysqli_query($conn, "select * from `atendance` where `month`='$month' and `roll_no`='$roll_no'");
                $nums = mysqli_num_rows($attendance);
                $attendance1 = mysqli_query($conn, "select * from `atendance` where `month`='$month' and `roll_no`='$roll_no' and `todays_attendance`='P'");
                $nums1 = mysqli_num_rows($attendance1);
                $attendance2 = mysqli_query($conn, "select * from `atendance` where `month`='$month' and `roll_no`='$roll_no' and  `todays_attendance`='A'");
                $nums2 = mysqli_num_rows($attendance2);
                if ($nums > 0) {
            ?>
        <div class="shadow-sm" style="border-radius: 10px; overflow-x: auto;">
            <div class="container  py-4">
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
                    <?php } ?>
                </table>



                <?php
                    } else {

                        echo ' <div class="text-center" style="font-family:cursive;font-size:20px">No Attendane Found For This Month</div>';
                    }



                        ?>
            </div>
            <?php

                        if ($nums > 0) {


                        ?>

            <div class="container">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="font-family:monospace" scope="col"><b>Class In Month</b></th>
                            <th style="font-family:monospace" scope="col"><b>Total Present In Month</b></th>
                            <th style="font-family:monospace" scope="col"><b>Total Absent In Month</b></th>

                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td style="font-family:monospace"><?php echo $nums ?></td>
                            <td style="font-family:monospace"><?php echo $nums1 ?></td>
                            <td style="font-family:monospace"><?php echo $nums2 ?></td>

                        </tr>

                    </tbody>

                </table>
            </div>
            <?php } else {
                        }
                    } ?>
        </div>
    </div>
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

<?php } else {
    header("location:../");
} ?>