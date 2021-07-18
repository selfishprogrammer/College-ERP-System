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
                        include '../Connection/connection.php';
                        $total_marks1 = "";
                        $scored_marks1 = "";
                        $attendance = "";
                        $persentage = "";
                        $roll_no = $_GET['roll_no'];
                        $exam_name = $_GET['exam_name'];
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
                                    <th style="font-family:monospace" scope="col"><b>Total Attendance Percentage</b>
                                    </th>
                                    <th style="font-family:monospace" scope="col"><b>Scored Marks Percentage</b></th>
                                    <th style="font-family:monospace" scope="col"><b>Grade</b></th>




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