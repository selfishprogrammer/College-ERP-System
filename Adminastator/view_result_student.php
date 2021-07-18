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
        <div class="shadow-sm bg-white" style="border-radius: 20px; margin-top:45px; font-family:monospace;">
            <div class="container py-3">
                <div class="shadow-sm bg-white" style="border-radius: 20px;">
                    <div class="p-4">
                        <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post">

                            <div class="form-group">

                                <input type="number" name="roll_no" class="form-control" placeholder="Enter Roll Number"
                                    style="font-family:monospace;" id="">

                            </div>

                            <div class="form-group">

                                <select name="exam_name" style="font-family: monospace;" class="form-control" id="">
                                    <option value="" selected>--Choose Exam--</option>
                                    <?php
                                    include '../Connection/connection.php';
                                    $exam = mysqli_query($conn, "select * from `exam_name` where `status2`='completed'");
                                    while ($row = mysqli_fetch_array($exam)) {
                                        echo '<option value="' . $row['exam_name'] . '">' . $row['exam_name'] . '</option>';
                                    }

                                    ?>
                                </select>

                            </div>
                            <div class="form-group">

                                <button type="submit" name="result" class="btn btn-outline-info form-control"><b>Check
                                        Result</b></button>

                            </div>


                        </form>
                    </div>
                </div>


                <div class="shadow-sm" style="border-radius:20px">
                    <?php


                    if (isset($_POST['result'])) {


                        $roll_no = $_POST['roll_no'];
                        $exam_name = $_POST['exam_name'];

                        $attendance = mysqli_query($conn, "select * from `result` where `roll_no`='$roll_no' and `exam_name`='$exam_name'");
                        $nums = mysqli_num_rows($attendance);
                        if ($nums > 0) {
                            $row = mysqli_fetch_assoc($attendance);
                    ?>
                    <div class="p-4" style="overflow-x:auto">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="font-family:monospace" scope="col"><b>Roll No</b></th>
                                    <th style="font-family:monospace" scope="col"><b>Name</b></th>
                                    <th style="font-family:monospace" scope="col"><b>Exam Name</b></th>
                                    <th style="font-family:monospace" scope="col"><b>Stream</b></th>
                                    <th style="font-family:monospace" scope="col"><b>Semester</b></th>
                                    <th style="font-family:monospace" scope="col"><b>Marks</b></th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td style="font-family:monospace"><?php echo $row['roll_no'] ?></td>
                                    <td style="font-family:monospace"><?php echo $row['name'] ?></td>
                                    <td style="font-family:monospace"><?php echo $row['exam_name'] ?></td>
                                    <td style="font-family:monospace"><?php echo $row['stream'] ?></td>
                                    <td style="font-family:monospace"><?php echo $row['semester'] ?></td>
                                    <td style="font-family:monospace"><a
                                            href="results?roll_no=<?php echo $row['roll_no'] ?>&exam_name=<?php echo $row['exam_name'] ?>"
                                            class="btn btn-outline-info form-control" style="font-family:monospace">
                                            View Marks</a></td>
                                </tr>

                            </tbody>
                            <?php


                                    ?>
                        </table>

                        <?php } else {

                            echo '  <div class="text-center" style="font-family:monospace ; font-size: 30px;"><b>No Record Found</b>
</div>';
                        }
                    } ?>
                    </div>

                </div>
            </div>

        </div>
    </div>
    </div>



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