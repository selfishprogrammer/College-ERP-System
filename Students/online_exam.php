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
    <title>Profile</title>
</head>

<body class="bg-white">
    <?php include '../nav_for_all.php' ?>

    <div class="container">

        <div class="shadow-sm my-5" style="border-radius: 15px;">

            <div class="p-3" style="overflow-x: auto;">
                <table class="table table-bordered ">
                    <thead>
                        <tr>
                            <th style="font-family:monospace" scope="col"><b>Serial Id</b></th>

                            <th style="font-family:monospace" scope="col"><b>Exam Name</b></th>
                            <th style="font-family:monospace" scope="col"><b>Exam Date</b></th>
                            <th style="font-family:monospace" scope="col"><b>Exam Time</b></th>
                            <th style="font-family:monospace" scope="col"><b>Exam Duration</b></th>

                            <th style="font-family:monospace" scope="col"><b>Stream</b></th>
                            <th style="font-family:monospace" scope="col"><b>Subject Faculty</b></th>

                            <th style="font-family:monospace" scope="col"><b>Exam Subject</b></th>
                            <th style="font-family:monospace" scope="col"><b>Subject Code</b></th>

                            <th style="font-family:monospace" scope="col"><b>Question Type</b></th>
                            <th style="font-family:monospace" scope="col"><b>Start Exam</b></th>

                            <th style="font-family:monospace" scope="col"><b>Submit Exam</b></th>
                        </tr>
                    </thead>
                    <?php
                        include '../Connection/connection.php';
                        $semester = $_SESSION['semester'];
                        $stream = $_SESSION['stream'];

                        $exam_addition = mysqli_query($conn, "select * from `exam` where `semester`='$semester' and `status1`='true' and `stream`='$stream'");
                        $nums = mysqli_num_rows($exam_addition);
                        if ($nums > 0) {
                            while ($row = mysqli_fetch_assoc($exam_addition)) {

                        ?>
                    <tbody>
                        <tr>
                            <td style="font-family:monospace"><?php echo $row['exam_id'] ?></td>
                            <td style="font-family:monospace"><?php echo $row['exam_name'] ?></td>
                            <td style="font-family:monospace"><?php echo $row['date_of_exam'] ?></td>
                            <td style="font-family:monospace"><?php echo $row['exam_time'] ?></td>
                            <td style="font-family:monospace"><?php echo $row['exam_duration'] ?></td>
                            <td style="font-family:monospace"><?php echo $row['stream'] ?></td>
                            <td style="font-family:monospace"><?php echo $row['subject_faculty'] ?></td>
                            <td style="font-family:monospace"><?php echo $row['exam_subject'] ?></td>
                            <td style="font-family:monospace"><?php echo $row['subject_code'] ?></td>
                            <td style="font-family:monospace"><?php echo $row['question_type'] ?></td>

                            <td style="font-family:monospace"><a
                                    href="../Faculty/Exam Questions/<?php echo $row['question_file'] ?>" target="_blank"
                                    class="nav-link" style="font-family:monospace">View
                                    Question</a></td>
                            <?php
                                        $exam_id = $row['exam_name'];
                                        $roll_no = $_SESSION['username'];
                                        $subject = $row['exam_subject'];
                                        $sql = mysqli_query($conn, "select * from `exam_submission` where `exam_id`='$exam_id' and `roll_no`='$roll_no' and `subject`='$subject'");
                                        $nums1 = mysqli_num_rows($sql);

                                        if ($nums1 > 0) {
                                        ?>
                            <td style="font-family:monospace"><a href="../index" class="nav-link"
                                    style="font-family:monospace">Exam Submitted
                                </a></td>
                            <?php
                                        } else {

                                        ?>
                            <td style="font-family:monospace"><a
                                    href="submit_exam?exam_id=<?php echo $row['exam_id'] ?>&fac=<?php echo $row['subject_faculty'] ?>&sub=<?php echo $row['exam_subject'] ?>"
                                    class="nav-link" style="font-family:monospace">Submit
                                    Exam</a></td>
                            <?php } ?>
                        </tr>

                    </tbody>
                    <?php }
                        } else {
                            echo '<div class="text-center" style="font-family:monospace; font-size:25px;">No Data Avalaible</div>';
                        } ?>
                </table>




            </div>
        </div>


    </div>




    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
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