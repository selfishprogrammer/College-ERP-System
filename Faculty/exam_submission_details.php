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
    <title>Exam Submission</title>
</head>

<body>
    <?php include '../nav_for_all.php' ?>
    <?php if (isset($_GET['exam_name'])) {
        ?>
    <div class="container">
        <div class="text-center py-4" style="font-size: 25px; font-family:monospace;">Result For Subject : <span
                style="color:red;"><?php echo $_GET['subject'] ?></span> and Exam : <span
                style="color:red;"><?php echo $_GET['exam_name'] ?></span></div>
        <div class="shadow-sm bg-white border my-2" style="border-radius: 10px;">
            <div class="container my-4">

                <dv class="py-4" style="overflow-x: auto;">

                    <?php

                            $exam_name = $_GET['exam_name'];
                            $subject = $_GET['subject'];

                            $sql = mysqli_query($conn, "select * from `exam_submission` where `exam_id`='$exam_name' and `subject`='$subject'");
                            $nums = mysqli_num_rows($sql);
                            if ($nums > 0) {

                            ?>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="font-family:monospace" scope="col"><b>Roll No</b></th>
                                <th style="font-family:monospace" scope="col"><b>Semester</b></th>
                                <th style="font-family:monospace" scope="col"><b>Answer Sheet</b></th>
                                <th style="font-family:monospace" scope="col"><b>Status</b></th>
                                <th style="font-family:monospace" scope="col"><b>Check</b></th>

                            </tr>
                        </thead>
                        <?php while ($row = mysqli_fetch_assoc($sql)) { ?>
                        <tbody>
                            <tr>
                                <td style="font-family:monospace"><?php echo $row['roll_no'] ?></td>
                                <td style="font-family:monospace"><?php echo $row['semester'] ?></td>
                                <td style="font-family:monospace"><a
                                        href="../Students/Submitted Exam/<?php echo $row['exam_file'] ?>"
                                        class="nav-link" target="-blank">view answersheet</a></td>
                                <?php if ($row['status'] == 'checked') {

                                                ?>
                                <td style="font-family:monospace">Checked</td>
                                <td style="font-family:monospace"><a href="" class="nav-link"
                                        style="color:red; ">Already Checked</a></td>
                                <?php
                                                } else {
                                                ?>



                                <td style="font-family:monospace">Not Checked</td>
                                <td style="font-family:monospace"><a
                                        href="check_answersheet?roll_no=<?php echo $row['roll_no'] ?>&subject=<?php echo $subject ?>&exam_name=<?php echo $row['exam_id'] ?>"
                                        class="nav-link">check answersheet</a></td>
                                <?php
                                                } ?>
                            </tr>

                        </tbody>
                        <?php } ?>
                    </table>

                    <?php
                            } else {
                            }
                            ?>


            </div>


        </div>

    </div>

    </div>
    <?php
        } else { ?>
    <div class="container">
        <div class="text-center py-4" style="font-size: 25px; font-family:monospace;">Result For Subject : <span
                style="color:red;"><?php echo $_POST['subject'] ?></span> and Exam : <span
                style="color:red;"><?php echo $_POST['exam_name'] ?></span></div>
        <div class="shadow-sm bg-white border my-2" style="border-radius: 10px;">
            <div class="container my-4">

                <dv class="py-4" style="overflow-x: auto;">

                    <?php

                            $exam_name = $_POST['exam_name'];
                            $subject = $_POST['subject'];

                            $sql = mysqli_query($conn, "select * from `exam_submission` where `exam_id`='$exam_name' and `subject`='$subject'");
                            $nums = mysqli_num_rows($sql);
                            if ($nums > 0) {

                            ?>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="font-family:monospace" scope="col"><b>Roll No</b></th>
                                <th style="font-family:monospace" scope="col"><b>Semester</b></th>
                                <th style="font-family:monospace" scope="col"><b>Answer Sheet</b></th>
                                <th style="font-family:monospace" scope="col"><b>Status</b></th>
                                <th style="font-family:monospace" scope="col"><b>Check</b></th>

                            </tr>
                        </thead>
                        <?php while ($row = mysqli_fetch_assoc($sql)) { ?>
                        <tbody>
                            <tr>
                                <td style="font-family:monospace"><?php echo $row['roll_no'] ?></td>
                                <td style="font-family:monospace"><?php echo $row['semester'] ?></td>
                                <td style="font-family:monospace"><a
                                        href="../Students/Submitted Exam/<?php echo $row['exam_file'] ?>"
                                        class="nav-link" target="-blank">view answersheet</a></td>
                                <?php if ($row['status'] == 'checked') {

                                                ?>
                                <td style="font-family:monospace">Checked</td>
                                <td style="font-family:monospace"><a href="" class="nav-link"
                                        style="color:red; ">Already Checked</a></td>
                                <?php
                                                } else {
                                                ?>



                                <td style="font-family:monospace">Not Checked</td>
                                <td style="font-family:monospace"><a
                                        href="check_answersheet?roll_no=<?php echo $row['roll_no'] ?>&subject=<?php echo $subject ?>&exam_name=<?php echo $row['exam_id'] ?>"
                                        class="nav-link">check answersheet</a></td>
                                <?php
                                                } ?>
                            </tr>

                        </tbody>
                        <?php } ?>
                    </table>

                    <?php
                            } else {
                            }
                            ?>


            </div>


        </div>

    </div>

    </div>
    <?php } ?>


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