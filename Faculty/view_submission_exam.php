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

            <form action="exam_submission_details" class="p-3" method="post">

                <div class="form-group">

                    <select name="exam_name" class="form-control" id="" style="font-family:monospace">

                        <option value="" selected>--Choose Exam--</option>
                        <?php
                            include '../Connection/connection.php';

                            $exam = mysqli_query($conn, "select * from `exam_name` where `status2`='completed'");
                            while ($row = mysqli_fetch_assoc($exam)) {
                                echo '                            <option value="' . $row['exam_name'] . '" >' . $row['exam_name'] . '</option>
';
                            }

                            ?>

                    </select>

                </div>


                <div class="form-group">

                    <select name="subject" class="form-control" id="" style="font-family:monospace">

                        <option value="" selected>--Choose Subject--</option>
                        <?php
                            include '../Connection/connection.php';
                            $faculty = $_SESSION['name'];
                            $exam = mysqli_query($conn, "select * from `subjects` where `faculty`='$faculty'");
                            while ($row = mysqli_fetch_assoc($exam)) {
                                echo '                            <option value="' . $row['sub_name'] . '" >' . $row['sub_name'] . '(' . $row['sub_code'] . ')</option>
';
                            }

                            ?>

                    </select>

                </div>

                <div class="form-group">
                    <button type="submit" style="font-family:monospace" name="exam_submission"
                        class="form-control btn btn-outline-info">Check
                        Exam Submission</button>
                </div>


            </form>




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