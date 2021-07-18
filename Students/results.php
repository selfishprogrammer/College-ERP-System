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
    <title>Results</title>
</head>

<body>
    <div class="container">
        <div class="shadow-sm " style="border-radius: 5px; margin-top:40px;">

            <div class="text-center py-3" style="font-size:25px; font-family:math"><b>SURENDRA INSTITUTE OF ENGINEERING
                    & MANAGEMENT</b></div>
            <div class="text-center py-1" style="font-size:20px; font-family:math"><b>SILIGURI DIST:JALPAIGURI</b></div>

            <div class="container">

                <div class="mx-2 my-2" style="font-family:monospace"><b>Name: &nbsp; <?php echo $_SESSION['name'] ?></b>
                </div>
                <div class="mx-2 my-2" style="font-family:monospace"><b>Roll Number: &nbsp;
                        <?php echo $_SESSION['username'] ?></b></div>
                <div class="mx-2 my-2" style="font-family:monospace"><b>Semester: &nbsp;
                        <?php echo $_SESSION['semester'] ?></b></div>
                <div class="mx-2 my-2" style="font-family:monospace"><b>Stream: &nbsp;
                        <?php echo $_SESSION['stream'] ?></b></div>

            </div>
            <hr>
            <div style="overflow-x: auto;" class="p-3">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="font-family:monospace" scope="col"><b>Subject</b></th>
                            <th style="font-family:monospace" scope="col"><b>Subject Code</b></th>
                            <th style="font-family:monospace" scope="col"><b>Total Marks</b></th>
                            <th style="font-family:monospace" scope="col"><b>Scored Marks</b></th>






                        </tr>
                    </thead>
                    <?php
                        $total_marks1 = "";
                        $scored_marks1 = "";
                        $attendance = "";
                        $persentage = "";
                        $roll_no = $_SESSION['username'];
                        $exam_name = $_GET['exam'];
                        $marks = mysqli_query($conn, "select * from `marks` where `exam_name`='$exam_name' and `roll_no`='$roll_no'");

                        $nums = mysqli_num_rows($marks);

                        while ($row = mysqli_fetch_assoc($marks)) {



                        ?>
                    <tbody>
                        <tr>
                            <td style="font-family:monospace"><?php echo $row['subject'] ?></td>
                            <td style="font-family:monospace"><?php echo $row['subject_code'] ?></td>
                            <td style="font-family:monospace"><?php echo $row['total_marks'] ?></td>
                            <td style="font-family:monospace"><?php echo $row['scored_marks'] ?></td>


                        </tr>

                    </tbody>
                    <?php
                            $total_marks1 += $row['total_marks'];
                            $scored_marks1 += $row['scored_marks'];
                        }

                        $persentage = floor($scored_marks1 * 100 / $total_marks1);
                        $attendance = floor(67);

                        ?>
                </table>


                <div style="overflow-x: auto;" class="p-3">
                    <table class="table table-bordered">

                        <thead>
                            <tr>
                                <th style="font-family:monospace" scope="col"><b>Total Marks</b></th>
                                <th style="font-family:monospace" scope="col"><b>Total Scored Marks</b></th>
                                <th style="font-family:monospace" scope="col"><b>Total Attendance Percentage</b></th>
                                <th style="font-family:monospace" scope="col"><b>Scored Marks Percentage</b></th>
                                <th style="font-family:monospace" scope="col"><b>Grade</b></th>




                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="font-family:monospace"><?php echo $total_marks1 ?></td>
                                <td style="font-family:monospace"><?php echo $scored_marks1 ?></td>
                                <td style="font-family:monospace"><?php echo $attendance ?><?php echo "%" ?></td>
                                <td style="font-family:monospace"><?php echo $persentage ?><?php echo "%" ?></td>
                                <?php if ($persentage <= 35) { ?>
                                <td style="font-family:monospace"><?php echo $persentage ?>Failed</td>
                                <?php } else {

                                    ?>
                                <td style="font-family:monospace">Passed</td>
                                <?php
                                    } ?>
                            </tr>

                        </tbody>
                    </table>
                </div>


            </div>

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