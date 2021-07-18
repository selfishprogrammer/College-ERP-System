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
    <title>Homework</title>
</head>
<?php include '../nav_for_all.php' ?>
<div class="container">

    <div class="shadow-sm my-5" style="border-radius: 15px;">

        <div class="container-fluid  py-4">
            <div style="overflow-x: auto;">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="font-family:monospace" scope="col"><b>Homework Id</b></th>
                            <th style="font-family:monospace" scope="col"><b>Homework Date</b></th>
                            <th style="font-family:monospace" scope="col"><b>Faculty Name</b></th>
                            <th style="font-family:monospace" scope="col"><b>Subbmission Date</b></th>
                            <th style="font-family:monospace" scope="col"><b>Subject</b></th>
                            <th style="font-family:monospace" scope="col"><b>Subject Code</b></th>
                            <th style="font-family:monospace" scope="col"><b>Homework</b></th>
                            <th style="font-family:monospace" scope="col"><b>Homework Desceiption</b></th>
                            <th style="font-family:monospace" scope="col"><b>Submission</b></th>

                        </tr>
                    </thead>
                    <?php

                        $semester = $_SESSION['semester'];
                        $stream = $_SESSION['stream'];
                        $roll_no = $_SESSION['username'];
                        $homework = mysqli_query($conn, "select * from `homework` where `stream`='$stream' and `semester`='$semester'");
                        $nums = mysqli_num_rows($homework);
                        if ($nums > 0) {
                            while ($row = mysqli_fetch_assoc($homework)) {



                        ?>
                    <tbody>
                        <tr>
                            <td style="font-family:monospace"><?php echo $row['homework_id'] ?></td>
                            <td style="font-family:monospace"><?php echo $row['homework_date'] ?></td>
                            <td style="font-family:monospace"><?php echo $row['faculty_name'] ?></td>
                            <td style="font-family:monospace"><?php echo $row['homework_submission_date'] ?></td>
                            <td style="font-family:monospace"><?php echo $row['subject'] ?></td>
                            <td style="font-family:monospace"><?php echo $row['subject_code'] ?></td>
                            <td style="font-family:monospace"><a
                                    href="../Faculty/Homework/<?php echo $row['homework'] ?>"
                                    class="btn btn-outline-info form-control" target="_blank"
                                    style="font-family:monospace;">VIEW
                                </a></td>
                            <td style="font-family:monospace"><?php echo $row['homework_desp'] ?></td>
                            <?php $homework2 = mysqli_query($conn, "select * from `homework_submission` where `roll_no`='$roll_no'");
                                        $row2 = mysqli_fetch_array($homework2);

                                        ?>
                            <?php if ($row2['status'] == '') { ?>
                            <td style="font-family:monospace"><a class="text-center nav-link"
                                    href="submitted_homework?homework_title=<?php echo $row['homework_id'] ?>"
                                    target="_blank" style="font-family:monospace; color:black;">
                                    <i class="fa fa-pencil" aria-hidden="true"> </i> </a></td>
                            <?php } else {
                                            echo '<td style="font-family:monospace">Already Submitted</td>';
                                        } ?>
                        </tr>

                    </tbody>
                    <?php

                            }
                        } else {
                        }

                        ?>
                </table>




            </div>
        </div>

    </div>

</div>

<body>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

</body>

</html>

<?php } else {
    header("location:../");
} ?>