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
    <title>Fee Status</title>
</head>

<body>
    <?php include '../nav_for_all.php' ?>

    <div class="container">
        <?php

            $roll_no = $_SESSION['username'];
            $fee = mysqli_query($conn, "select * from `fee_of_students` where `roll_no`='$roll_no'");
            $nums = mysqli_num_rows($fee);
            if ($nums > 0) {

            ?>



        <div class="shadow-sm my-5" style="border-radius: 15px;">

            <div class="container-fluid  py-4">
                <div style="overflow-x: auto;">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="font-family:monospace" scope="col"><b>Roll No</b></th>
                                <th style="font-family:monospace" scope="col"><b>Stream</b></th>
                                <th style="font-family:monospace" scope="col"><b>Name</b></th>
                                <th style="font-family:monospace" scope="col"><b>Semester</b></th>
                                <th style="font-family:monospace" scope="col"><b>Amount</b></th>
                                <th style="font-family:monospace" scope="col"><b>Status</b></th>
                                <th style="font-family:monospace" scope="col"><b>Pay</b></th>

                            </tr>
                        </thead>
                        <?php
                                while ($row = mysqli_fetch_assoc($fee)) {

                                ?>
                        <tbody>
                            <tr>
                                <td style="font-family:monospace"><?php echo $row['roll_no'] ?></td>
                                <td style="font-family:monospace"><?php echo $row['name'] ?></td>
                                <td style="font-family:monospace"><?php echo $row['stream'] ?></td>
                                <td style="font-family:monospace"><?php echo $row['semester'] ?></td>
                                <td style="font-family:monospace"><?php echo $row['fee'] ?></td>

                                <td style="font-family:monospace;color:red"><?php echo $row['status'] ?></td>
                                <?php
                                            if ($row['status'] == 'NA') {




                                            ?>
                                <td style="font-family:monospace"><a href="pay?roll_no=<?php echo $row['roll_no'] ?>"
                                        class="btn btn-outline-info form-control">Pay</a></td>

                                <?php } else {

                                            ?>
                                <td style="font-family:monospace"><a
                                        href="d_recipt?roll_no=<?php echo $row['roll_no'] ?>"
                                        class="btn btn-outline-warning form-control">Download Reciept</a></td>


                                <?php
                                            } ?>
                            </tr>

                        </tbody>
                        <?php

                                }
                            } else {
                                echo '<div class="text-center" style="font-family:monospace; font-size:25px;"><b>No Fee Updated</b></div>
    ';
                            }
                            ?>
                    </table>




                </div>
            </div>

        </div>

    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

</body>

</html>

<?php } else {
    header("location:../");
} ?>