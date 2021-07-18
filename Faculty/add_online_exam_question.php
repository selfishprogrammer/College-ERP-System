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
            <div class="p-4">

                <form action="<?php $_SERVER['REQUEST_URI']  ?>" method="post" enctype="multipart/form-data">

                    <div class="form-group">

                        <select name="subject" style="font-family: monospace;" class="form-control" id="">
                            <option value="" selected>--Choose Subject--</option>
                            <?php
                                include '../Connection/connection.php';
                                $faculty = $_SESSION['name'];
                                $semester = $_POST['semester'];
                                echo $semester;
                                $exam = mysqli_query($conn, "select * from `subjects` where `faculty`='$faculty' and `semester`='$semester'");
                                while ($row = mysqli_fetch_assoc($exam)) {
                                    echo '                            <option value="' . $row['sub_name'] . '" >' . $row['sub_name'] . '</option>
';
                                }

                                ?>
                        </select>

                    </div>
                    <div class="form-group">

                        <select name="subject_code" style="font-family: monospace;" class="form-control" id="">
                            <option value="" selected>--Choose Subject--</option>
                            <?php
                                include '../Connection/connection.php';
                                $faculty = $_SESSION['name'];
                                $semester = $_POST['semester'];
                                echo $semester;
                                $exam = mysqli_query($conn, "select * from `subjects` where `faculty`='$faculty' and `semester`='$semester'");
                                while ($row = mysqli_fetch_assoc($exam)) {
                                    echo '                            <option value="' . $row['sub_code'] . '" >' . $row['sub_code'] . '</option>
';
                                }

                                ?>
                        </select>

                    </div>


                    <div class="form-group">

                        <select name="exam_name" style="font-family: monospace;" class="form-control" id="">



                            <option value="" selected>--Choose Exam Name--</option>
                            <?php
                                include '../Connection/connection.php';

                                $exam = mysqli_query($conn, "select * from `exam_name` where `status3`='true'");
                                while ($row = mysqli_fetch_assoc($exam)) {
                                    echo '                            <option value="' . $row['exam_name'] . '" >' . $row['exam_name'] . '</option>
';
                                }

                                ?>
                        </select>

                    </div>

                    <div class="form-group">
                        <label for="" style="font-family:monospace"><b>Add Question File</b></label>
                        <input type="file" style="font-family:monospace" name="question_file" class="form-control"
                            id="">

                    </div>
                    <div class="form-group">
                        <select name="duration" id="" class="form-control">
                            <option value="" selected>--Select Duration--</option>
                            <option value="45">45 Min</option>
                            <option value="60">60 Min</option>
                            <option value="90">80 Min</option>


                        </select>

                    </div>

                    <div class="form-group">
                        <select name="time" id="" class="form-control">
                            <option value="" selected>--Select Time--</option>
                            <option value="10:30">10:30</option>
                            <option value="3">11:00</option>
                            <option value="12:00">12:00</option>


                        </select>

                    </div>

                    <div class="form-group">
                        <select name="question_type" id="" class="form-control">
                            <option value="" selected>--Select Question Type--</option>
                            <option value="Multiple Choice Question">Multiple Choice Question</option>
                            <option value="Lonf">Long Answer Type</option>



                        </select>

                    </div>

                    <div class="form-group">
                        <select name="semester" style="font-family:monospace" class="form-control"
                            style="border-radius: 0px 0px 0px 0px;" id="">
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
                        <button type="submit" name="add_homework" class="btn btn-outline-warning form-control"
                            style="font-family: monospace;"><b>View
                                Add Question</b></button>
                    </div>

                </form>
            </div>

        </div>
    </div>
    <div class="container">
        <?php
            if (isset($_POST['add_homework'])) {
                $subject = $_POST['subject'];
                $subject_code = $_POST['subject_code'];

                $exam_name = $_POST['exam_name'];
                $faculty = $_SESSION['name'];
                $stream = $_SESSION['stream'];
                $exam_time = $_POST['time'];
                $duration = $_POST['duration'];
                $semester = $_POST['semester'];
                $type = $_POST['question_type'];



                $question_file = $_FILES['question_file']['name'];
                $question_file_tmp = $_FILES['question_file']['tmp_name'];

                $direcotry = "Exam Questions/" . $question_file;
                move_uploaded_file($question_file_tmp, $direcotry);

                $add_question = mysqli_query($conn, "INSERT INTO `exam` (`exam_name`, `date_of_exam`, `exam_time`, `exam_duration`, `stream`,`semester`, `subject_faculty`, `exam_subject`, `subject_code`, `question_type`, `status1`, `status2`, `question_file`) VALUES ('$exam_name', '', '$exam_time', '$duration', '$stream','$semester', '$faculty', '$subject', '$subject_code', '$type', 'false', '', '$question_file');");
                if ($add_question) {
                    echo '<div class="alert alert-success" role="alert">
               Question paper added successfuly!
              </div>';
                } else {

                    echo '<div class="alert alert-dangerf" role="alert">
               Something Went Wrong!
               </div>';
                }
            }

            ?>
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