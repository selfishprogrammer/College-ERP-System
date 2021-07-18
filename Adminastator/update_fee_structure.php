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

<body class="bg-info">
    <div class="container">

        <div class="shadow-sm bg-white border">
            <div class="container">
                <?php if (isset($_GET['fee_id'])) { ?>
                <form action="<?php $_SERVER['REQUEST_URI'] ?>" class="m-3" method="post" enctype="multipart/form-data">

                    <div class="form-group">


                        <input type="file" name="updated_file" class="form-control" placeholder="Enter File " id="">
                    </div>
                    <div class="form-group">


                        <button type="submit" name="update_file_btn"
                            class="btn btn-outline-danger form-control">Update_file</button>
                    </div>

                </form>

                <?php

                    include '../Connection/connection.php';
                    if (isset($_POST['update_file_btn'])) {
                        $fee_id = $_GET['fee_id'];
                        $update_file = $_FILES['updated_file']['name'];
                        $update_file_tmp = $_FILES['updated_file']['tmp_name'];
                        $directory = "Fee Structure/" . $update_file;
                        move_uploaded_file($update_file_tmp, $directory);


                        $updated_query = mysqli_query($conn, "update `fee_structure` set `fee_structure`='$update_file' where `fee_id`='$fee_id'");
                        if ($updated_query) {
                            header("location:view_fee_structure");
                        } else {
                            echo "<b><i>Error Occars</i></b>";
                        }
                    }
                } ?>
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

</html>