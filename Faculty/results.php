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
    <title>College ERP System</title>
</head>

<body>
    <?php include '../nav_for_all.php'; ?>

    <div class="container">
        <div class="shadow-sm " style="border-radius: 20px; margin-top:40px;">

            <div class="my-4 container" style="overflow-x: auto;">
                <?php

                    $roll_no = $_GET['id'];
                    $exam_name = $_GET['exam'];
                    $select = mysqli_query($conn, "select * from `login` where `username`='$roll_no'");
                    $row = mysqli_fetch_array($select);
                    $semester = $row['semester'];
                    $stream = $row['stream'];
                    $name = $row['name'];
                    $subject_total = mysqli_query($conn, "select * from `subjects` where `stream`='$stream' and `semester`='$semester'");
                    $nums1 = mysqli_num_rows($subject_total);
                    $marks2 = mysqli_query($conn, "select * from `marks` where `exam_name`='$exam_name' and `roll_no`='$roll_no'");

                    $nums2 = mysqli_num_rows($marks2);



                    if (!($nums1 <= $nums2)) {
                    ?>
                <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post">
                    <div class="row">

                        <div class="col-md-3  pt-4 pb-2">
                            <input type="hidden" name="roll_no" value="<?php echo $roll_no; ?>">
                            <input type="hidden" name="exam" value="<?php echo $exam_name; ?>">
                            <input type="hidden" name="semester" value="<?php echo $semester; ?>">
                            <input type="hidden" name="stream" value="<?php echo $stream; ?>">
                            <input type="hidden" name="name" value="<?php echo $name; ?>">

                            <div class="form-group">
                                <select name="subject" class="form-control" style="font-family:monospace" id="">
                                    <option value="" selected>--Choose Subject--</option>



                                    <?php

                                            $subjects = mysqli_query($conn, "select * from `subjects` where `semester`='$semester' and `stream`='$stream'");
                                            while ($row = mysqli_fetch_assoc($subjects)) {
                                                echo '<option value="' . $row['sub_name'] . '" >' . $row['sub_name'] . '</option>
';

                                            ?>

                                    <?php }



                                            ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3  pt-4 pb-2">
                            <div class="form-group">
                                <select name="sub_code" class="form-control" style="font-family:monospace" id="">
                                    <option value="" selected>--Choose Subject--</option>




                                    <?php

                                            $subjects = mysqli_query($conn, "select * from `subjects` where `semester`='$semester' and `stream`='$stream'");
                                            while ($row = mysqli_fetch_assoc($subjects)) {
                                                echo '<option value="' . $row['sub_code'] . '" >' . $row['sub_code'] . '</option>
';

                                            ?>

                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-3  pt-4 pb-2">



                            <input type="text" name="marks" placeholder="Marks Scored" style="font-family:monospace"
                                id="" class="form-control shadow-sm  ">








                        </div>
                        <div class="col-md-3  pt-4 pb-2">
                            <button type="submit" name="submit" class="btn  btn-info form-control shadow-sm"
                                style="font-family:monospace;"><b>Add Marks</b></button>
                        </div>
                    </div>
                </form>

                <?php

                        if (isset($_POST['submit'])) {

                            $sub_name = $_POST['subject'];
                            $sub_code = $_POST['sub_code'];
                            $marks = $_POST['marks'];
                            $roll_no = $_POST['roll_no'];
                            $stream = $_POST['stream'];
                            $semester = $_POST['semester'];
                            $exam_name = $_POST['exam'];
                            $name = $_POST['name'];





                            $select = mysqli_query($conn, "insert into `marks` (`roll_no`,`name`,`exam_name`,`subject`,`subject_code`,`total_marks`,`scored_marks`) values ('$roll_no','$name','$exam_name','$sub_name','$sub_code','70','$marks')");

                            $select = mysqli_query($conn, "insert into `result` (`roll_no`,`name`,`exam_name`,`stream`,`semester`) values ('$roll_no','$name','$exam_name','$stream','$semester')");
                        }
                    } else {

                        echo '<div class="text-center" style="font-size:25px;"><b>Marks Added Successfully</b></div>';
                    }
                    ?>

            </div>

        </div>


        <div class="shadow-sm " style="border-radius: 5px; margin-top:40px;">


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

                                <th style="font-family:monospace" scope="col"><b>Status</b></th>


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









    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>
</body>

</html>

<?php } else {
    header("location:../");
} ?>