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
    <title>Attendance</title>
</head>

<body>
    <?php include '../nav_for_all.php' ?>

    <div class="container">

        <div class="shadow-sm bg-white border my-2" style="border-radius: 10px;">

            <form action="<?php $_SERVER['REQUEST_URI'] ?>" class="p-3" method="post">

                <div class="form-group">

                    <select name="month_wise" class="form-control" id="" style="font-family:monospace">

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
                    <button type="submit" style="font-family:monospace" name="attendance_btn"
                        class="form-control btn btn-outline-warning">Check
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
                if (mysqli_num_rows($attendance) > 0) {
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
            }


                    ?>
            </div>
        </div>


        <div class="text-center my-3" style="font-family:monospace; font-size:25px"><b>Add Students Attendance</b></div>
        <div class="container">
            <div class="shadow-sm bg-white border my-2" style="border-radius: 10px;">

                <form action="<?php $_SERVER['REQUEST_URI'] ?>" class="p-3" method="post">


                    <div class="form-group">
                        <select name="semester" class="form-control" style="font-family:monospace" id="">
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

                    <input type="hidden" name="stream" value="<?php echo $_SESSION['stream'] ?>">
                    <div class="form-group">
                        <button type="submit" name="check_student" style="font-family:monospace"
                            class="form-control btn btn-outline-success">Check
                            Students For Attendance</button>
                    </div>


                </form>




            </div>
            <?php
                        if (isset($_POST['check_student'])) {
                            $stream = $_SESSION['stream'];
                            $semester = $_POST['semester'];
                            $attendance1 = mysqli_query($conn, "select * from `login` where `semester`='$semester' and `stream`='$stream'");

                        ?>
            <div class="shadow-sm" style="border-radius: 10px; overflow-x:auto">
                <div class="container my-4">

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="font-family:monospace" scope="col"><b>Roll No</b></th>
                                <th style="font-family:monospace" scope="col"><b>Name</b></th>
                                <th style="font-family:monospace" scope="col"><b>Semester</b></th>
                                <th style="font-family:monospace" scope="col"><b>Absent(A)/Present(P)</b></th>
                            </tr>
                        </thead>
                        <?php while ($row = mysqli_fetch_assoc($attendance1)) { ?>
                        <tbody>
                            <tr>
                                <td style="font-family:monospace"><?php echo $row['username'] ?></td>
                                <td style="font-family:monospace"><?php echo  $row['name']  ?></td>
                                <td style="font-family:monospace"><?php echo $row['semester']  ?></td>
                                <td style="font-family:monospace">
                                    <?php
                                                        $roll = $row['username'];
                                                        $date = date("d/m/Y");
                                                        $attendance2 = mysqli_query($conn, "select * from `atendance` where `roll_no`='$roll' and `day`='$date'");
                                                        $nums = mysqli_num_rows($attendance2);
                                                        if ($nums > 0) {

                                                            $row1 = mysqli_fetch_assoc($attendance2);

                                                            if ($row1['todays_attendance'] == 'P') {
                                                                echo '<button class="btn btn-success form-control" style="font-family: monospace;" disabled>Present</button>
';
                                                            } else if ($row1['todays_attendance'] == 'A') {
                                                                echo '<button class="btn btn-danger form-control" style="font-family: monospace;" disabled>Absent</button>';
                                                            }
                                                        } else {
                                                        ?>

                                    <button id="present" value="roll_no=<?php echo $row['username']  ?>" type="submit"
                                        class="btn btn-outline-success my-1">Present</button>&nbsp;<button id="absent"
                                        value="roll_no=<?php echo $row['username']  ?>" type="submit"
                                        class="btn btn-outline-danger my-1">Absent</button>

                                    <?php }  ?>

                                </td>


                            </tr>

                        </tbody>
                        <?php }
                                    } ?>
                    </table>

                </div>



            </div>


        </div>






    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>
    $(() => {
        $('#present').click(() => {
            var data1 = $('#present').val()
            console.log(data1)
            $.ajax({
                url: "attendance_update.php",
                method: "POST",
                data: data1,
                success: function(data) {
                    console.log(data)

                }
            })

        })



        $('#absent').click(() => {
            var data2 = $('#absent').val()
            console.log(data2)
            $.ajax({
                url: "attendance_update1.php",
                method: "POST",
                data: data2,
                success: function(data) {

                }
            })

        })
    })
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

<?php } else {
    header("location:../");
} ?>