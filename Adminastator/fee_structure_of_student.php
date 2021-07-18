<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <title> Add Fee Structure</title>
</head>

<body class="bg-danger">

    <div class="container">

        <div class="shadow-sm bg-white" style="border-radius: 20px; margin-top: 140px;">

            <div class="text-center py-4" style="font-size: 20px; font-family: cursive;">College ERP System</div>
            <hr>

            <form action="<?php $_SERVER['REQUEST_URI'] ?>" enctype="multipart/form-data" class="p-4" method="post">

                <div class="form-group">

                    <input type="file" name="fee_structure" class="form-control" id="">

                </div>


                <div class="form-group">

                    <button type="submit" name="fee" class="btn btn-success form-control mb-4"><b>Add Fee
                            Structure</b></button>
                </div>

            </form>



        </div>

    </div>



    <?php
    include '../Connection/connection.php';
    if (isset($_POST['fee'])) {

        $fee_structure = $_FILES['fee_structure']['name'];
        $fee_structure_tmp = $_FILES['fee_structure']['tmp_name'];

        $directory = "Fee Structure/" . $fee_structure;
        move_uploaded_file($fee_structure_tmp, $directory);

        $insert_fee = mysqli_query($conn, "insert into `fee_structure` (`fee_structure`) values ('$fee_structure')");
        if ($insert_fee) {
            echo '<b>Fee Inserted</b>';
        }
    }


    ?>



    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>