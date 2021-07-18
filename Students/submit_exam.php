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
    <title>College ERP System</title>
</head>

<body>

    <?php
        $exam_id = $_GET['exam_id'];
        $roll_no = $_SESSION['username'];
        $subject = $_GET['sub'];
        $sql = mysqli_query($conn, "select * from `exam_submission` where `exam_id`='$exam_id' and `roll_no`='$roll_no' and `subject`='$subject'");
        $nums1 = mysqli_num_rows($sql);
        if ($nums1 > 0) {


        ?>
    <div class="container">

        <div class="shadow-sm bg-white" style="border-radius: 20px; margin-top:120px">

            <div class="py-4 text-center" style="font-family: monospace; font-size:25px;"><b>You Have Successfully
                    Submitted Your Exam </b></div>
            <div class="d-flex justify-content-center">

                <a href="online_exam" class="btn btn-info mb-3" style="font-family: monospace; width:18rem">Back To Exam
                </a>
            </div>
        </div>

    </div>
    <?php
        } else {
        ?>

    <div class="container">

        <div class="shadow-sm" style="border-radius: 10px; margin-top:
140px">

            <div class="p-5">
                <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <input type="file" class="form-control" style="font-family: monospace;" name="exam_file" id="">

                    </div>


                    <input type="hidden" name="stream" value="<?php echo $_SESSION['stream'] ?>" id="">
                    <input type="hidden" name="exam_id" value="<?php echo $_GET['exam_id'] ?>" id="">
                    <input type="hidden" name="semester" value="<?php echo $_SESSION['semester'] ?>" id="">
                    <input type="hidden" name="username" value="<?php echo $_SESSION['username'] ?>" id="">

                    <div class="form-group">

                        <button type="submit" name="submit" class="btn btn-outline-info form-control"
                            style="font-family: monospace;"><b>Submit Exam</b></button>
                    </div>

                </form>

            </div>

        </div>

        <?php
                if (isset($_POST['submit'])) {

                    $stream = $_POST['stream'];
                    $semester = $_POST['semester'];
                    $exam_id = $_POST['exam_id'];
                    $subject = $_GET['sub'];
                    $roll_no = $_POST['username'];
                    $Exam_file = $_FILES['exam_file']['name'];
                    $Exam_file_tmp = $_FILES['exam_file']['tmp_name'];
                    $date = date("d/m/Y l");
                    $faculty = $_GET['fac'];

                    $directory = "Submitted Exam/" . $Exam_file;
                    move_uploaded_file($Exam_file_tmp, $directory);


                    $sql = "INSERT INTO `exam_submission` (`exam_id`,`roll_no`, `subject`, `exam_file`, `semester`, `stream`, `date_of_submission`,`faculty`) VALUES ('$exam_id', '$roll_no', '$subject', '$Exam_file', '$semester', '$stream', '$date','$faculty')";
                    $submit_homework = mysqli_query($conn, $sql);
                    if ($submit_homework) {
                        echo '<div class="alert alert-success" role="alert">
Your Exam Submitted Submitted Successfully
</div>';
                        header("location:submit_exam?exam_id=$exam_id&fac=$faculty&sub=$subject");
                    } else {
                    }
                }



                ?>



    </div>

    <?php } ?>






    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
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