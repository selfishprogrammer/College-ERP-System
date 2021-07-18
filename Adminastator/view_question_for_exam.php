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

        <div class="shadow-sm bg-white my-4" style="border-radius: 20px;">

            <div class="container">

                <div class="py-3">

                    <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post">
                        <div class="form-group">

                            <select name="exam_name" style="font-family: monospace;" class="form-control" id="">



                                <option value="" selected>--Choose Exam Name--</option>
                                <?php
                                include '../Connection/connection.php';

                                $exam = mysqli_query($conn, "select * from `exam_name`");
                                while ($row = mysqli_fetch_assoc($exam)) {
                                    echo '                            <option value="' . $row['exam_name'] . '" >' . $row['exam_name'] . '</option>
';
                                }

                                ?>
                            </select>

                        </div>
                        <div class="form-group">
                            <select name="semester" class="form-control" id="" style="font-family:monospace">

                                <option value selected>--Check By Semester--</option>
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
                            <select name="stream" class="form-control" id="">
                                <option value="" selected>---Check By Stream---</option>
                                <option value="Computer Science Engineering">Computer Science Engineering</option>
                                <option value="Mechanical Engineering">Mechanical Engineering</option>
                                <option value="Civil Engineering">Civil Engineering</option>
                                <option value="Electronics & Commnucation Engineering">Electronics & Commnucation
                                    Engineering</option>
                                <option value="Electrical Engineering">Electrical Engineering</option>



                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="view_question" class="btn btn-outline-warning form-control"
                                style="font-family: monospace;"><b>Check Question</b></button>
                        </div>

                    </form>

                </div>

            </div>

        </div>


        <?php
        include '../Connection/connection.php';
        if (isset($_POST['view_question'])) {
            $exam_name = $_POST['exam_name'];
            $semester = $_POST['semester'];
            $stream = $_POST['stream'];
            $questions = mysqli_query($conn, "select * from `exam` where `exam_name`='$exam_name' and `semester`='$semester' and `stream`='$stream'");


            $nums = mysqli_num_rows($questions);

            if ($nums > 0) {
        ?>
        <div class="shadow-sm bg-white" style="border-radius: 20px; margin-top:45px; font-family:monospace;">
            <div class="p-4" style="overflow-x:auto">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="font-family:monospace" scope="col"><b>Exam Nmae</b></th>
                            <th style="font-family:monospace" scope="col"><b>Subject</b></th>
                            <th style="font-family:monospace" scope="col"><b>Subject Code</b></th>
                            <th style="font-family:monospace" scope="col"><b>Exam Date</b></th>
                            <th style="font-family:monospace" scope="col"><b>Duration</b></th>
                            <th style="font-family:monospace" scope="col"><b>Time</b></th>
                            <th style="font-family:monospace" scope="col"><b>Type</b></th>
                            <th style="font-family:monospace" scope="col"><b>Faculty</b></th>
                            <th style="font-family:monospace" scope="col"><b>Semester</b></th>
                            <th style="font-family:monospace" scope="col"><b>Stream</b></th>
                            <th style="font-family:monospace" scope="col"><b>Status</b></th>
                            <th style="font-family:monospace" scope="col"><b>View Questions</b></th>

                        </tr>
                    </thead>
                    <?php while ($row = mysqli_fetch_assoc($questions)) { ?>
                    <tbody>
                        <tr>
                            <td style="font-family:monospace"><?php echo $row['exam_name'] ?></td>
                            <td style="font-family:monospace"><?php echo $row['exam_subject'] ?></td>
                            <td style="font-family:monospace"><?php echo $row['subject_code'] ?></td>
                            <td style="font-family:monospace"><?php echo $row['date_of_exam'] ?></td>
                            <td style="font-family:monospace"><?php echo $row['exam_duration'] ?></td>
                            <td style="font-family:monospace"><?php echo $row['exam_time'] ?></td>
                            <td style="font-family:monospace"><?php echo $row['question_type'] ?></td>
                            <td style="font-family:monospace"><?php echo $row['subject_faculty'] ?></td>
                            <td style="font-family:monospace"><?php echo $row['semester'] ?></td>
                            <td style="font-family:monospace"><?php echo $row['stream'] ?></td>
                            <?php if ($row['status1'] == 'true') {
                                            echo ' <td style="font-family:monospace"><a
    href="update_question_status?status_false=' . $row['exam_id'] . '"
    class="btn btn-danger form-control">False</a></td>     ';
                                        } else {
                                            echo ' <td style="font-family:monospace"><a
    href="update_question_status?status_true=' . $row['exam_id'] . '"
    class="btn btn-success form-control">True</a></td>     ';
                                        } ?>
                            <td style="font-family:monospace"><a
                                    href="../Faculty/Exam Questions/<?php echo $row['question_file'] ?>" target="_blank"
                                    class="btn btn-success form-control">View Questions</a></td>
                        </tr>

                    </tbody>
                    <?php }
                        }
                    }
                    ?>
                </table>

            </div>



            <!-- Optional JavaScript; choose one of the two! -->

            <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
                integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
                crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
                crossorigin="anonymous">
            </script>

            <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
-->
</body>




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