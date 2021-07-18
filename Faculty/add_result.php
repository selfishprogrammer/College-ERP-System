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
                <form action="<?php echo $_SERVER['REQUEST_URI']  ?>" method="post">

                    <div class="form-group">

                        <select name="exam_name" style="font-family: monospace;" class="form-control" id="">
                            <option value="" selected>--Choose Exam--</option>
                            <?php

                                $exam = mysqli_query($conn, "select * from `exam_name` where `status2`='completed'");
                                while ($row = mysqli_fetch_array($exam)) {
                                    echo '<option value="' . $row['exam_name'] . '">' . $row['exam_name'] . '</option>';
                                }

                                ?>
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
                        <button type="submit" name="submitted_homework" class="btn btn-outline-warning form-control"
                            style="font-family: monospace;"><b>View
                                Add Result</b></button>
                    </div>

                </form>
            </div>
            <?php


                if (isset($_POST['submitted_homework'])) {


                ?>
            <div class="p-3">
                <div class="shadow-sm  " style="border-radius: 15px;">

                    <div class="p-3" style="overflow-x: auto;">

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="font-family:monospace" scope="col"><b>Roll No</b></th>
                                    <th style="font-family:monospace" scope="col"><b>Stream</b></th>
                                    <th style="font-family:monospace" scope="col"><b>Semester</b></th>
                                    <th style="font-family:monospace" scope="col"><b>Name</b></th>
                                    <th style="font-family:monospace" scope="col"><b>Exam Name</b></th>
                                    <th style="font-family:monospace" scope="col"><b>Add Result</b></th>
                                </tr>
                            </thead>
                            <?php

                                    $stream = $_SESSION['stream'];
                                    $semester = $_POST['semester'];
                                    $exam_name = $_POST['exam_name'];


                                    $students = mysqli_query($conn, "select * from `login` where `semester`='$semester' and `stream`='$stream'");
                                    while ($row = mysqli_fetch_array($students)) {


                                    ?>
                            <tbody>
                                <tr>
                                    <td style="font-family:monospace"><?php echo $row['username'] ?></td>
                                    <td style="font-family:monospace"><?php echo $row['name'] ?></td>
                                    <td style="font-family:monospace"><?php echo $row['semester'] ?></td>
                                    <td style="font-family:monospace"><?php echo $row['stream'] ?></td>
                                    <td style="font-family:monospace"><?php echo $exam_name ?></td>
                                    <td style="font-family:monospace"><a
                                            href="results?id=<?php echo $row['username'] ?>&exam=<?php echo $exam_name ?>"
                                            class="nav-link">Add
                                            Result</a></td>

                                </tr>

                            </tbody>
                            <?php } ?>
                        </table>
                    </div>

                </div>
            </div>


            <?php } ?>
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