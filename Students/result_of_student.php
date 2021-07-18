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


        <div class="shadow-sm my-4" style="border-radius: 15px; margin: top 45px;">
            <div class="p-4">
                <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post">

                    <div class="form-group">

                        <select name="result" style="font-family:monospace" class="form-control" id="">

                            <option selected>--Chooose Exam--</option>
                            <?php

                                $exam = mysqli_query($conn, "select * from `exam_name` where `status`='completed'");
                                while ($row = mysqli_fetch_array($exam)) {
                                    echo '<option value="' . $row['exam_name'] . '">' . $row['exam_name'] . '</option>';
                                }

                                ?>

                        </select>
                    </div>
                    <input type="hidden" name="roll_no" value="<?php echo $_SESSION['username'] ?>" id="">
                    <div class="form-group">
                        <button type="submit" style="font-family:monospace" name="result_btn"
                            class="form-control btn btn-outline-info">Check
                            Result</button>

                    </div>

                </form>


            </div>
        </div>


        <?php

            if (isset($_POST['result_btn'])) {
                $result = $_POST['result'];
                $roll_no = $_POST['roll_no'];


            ?>

        <div class="shadow-sm my-4" style="border-radius: 15px;" style="overflow-x: auto">


            <div class="container  py-4">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="font-family:monospace" scope="col"><b>Name</b></th>
                            <th style="font-family:monospace" scope="col"><b>Roll No</b></th>
                            <th style="font-family:monospace" scope="col"><b>Exam Name</b></th>
                            <th style="font-family:monospace" scope="col"><b>Stream</b></th>
                            <th style="font-family:monospace" scope="col"><b>Semester</b></th>
                            <th style="font-family:monospace" scope="col"><b>Result</b></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="font-family:monospace"><?php echo $_SESSION['name'] ?></td>
                            <td style="font-family:monospace"><?php echo $roll_no ?></td>
                            <td style="font-family:monospace"><?php echo $result ?></td>
                            <td style="font-family:monospace"><?php echo $_SESSION['stream'] ?></td>
                            <td style="font-family:monospace"><?php echo $_SESSION['semester'] ?></td>
                            <td style="font-family:monospace"><a href="results?exam=<?php echo $result ?>"
                                    class="nav-link">Result</a></td>

                        </tr>

                    </tbody>
                </table>


            </div>
        </div>


        <?php


            }


            ?>
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