<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Akaya+Kanadaka&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Notice || Students</title>
</head>

<body class="bg-info">
    <div class="container">
        <div class="shadow-sm bg-white my-4" style="width: 100%;border-radius: 20px 20px 0px 0px;">

            <div class="text-center py-4" style="font-size: 22px;"><i>
                    <b> NOTICE PANEL</b></i></div>

        </div>
        <div class="shadow-sm bg-white border" style="border-radius: 10px; margin-top: 150px; width:100%">

            <form action="<?php $_SERVER['REQUEST_URI'] ?>" class="pt-4 pr-3 pl-3" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="text" name="title" placeholder="Enter The Title" class="form-control" style="border-radius: 0px 0px 0px 0px; font-family:cursive ;" id="">

                </div>

                <div class="form-group">
                    <label for="" class="py-1" style="font-family: cursive;">Enter Pdf File -------></label>
                    <input type="file" name="notice_file" class="form-control" style="border-radius: 0px 0px 0px 0px;" id="">

                </div>

                <div class="form-group">
                    <button type="submit" name="notice" class="form-control btn btn-outline-success mb-2" style="border-radius: 0px 0px 0px 0px;"><i>Add Notice</i></button>
                </div>


            </form>

        </div>


    </div>
    <?php
    include '../Connection/connection.php';
    if (isset($_POST['notice'])) {

        $date_of_notice = date("Y/m/d");

        $notice_title = $_POST['title'];
        $notice_file = $_FILES['notice_file']['name'];

        $notice_file_tmp = $_FILES['notice_file']['tmp_name'];
        $notice_for = "Student";

        $directory = 'Notice Student/' . $notice_file;
        move_uploaded_file($notice_file_tmp, $directory);

        $insert_data = mysqli_query($conn, "insert into `notice` (`title_of_notice`,`notice_file`,`notice_for`,`date_of_notice`) values ('$notice_title','$notice_file','$notice_for','$date_of_notice')");
        if ($insert_data) {
            echo '<script> swal("Notice Added Successfully", " Notice Uploaded", "success") </script>;';
        } else {
            echo '<script> swal("Something Went Wrong", "Uploading failed", "error") </script>;';
        }
    }

    ?>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>


    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->