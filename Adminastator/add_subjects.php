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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Akaya+Kanadaka&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Subjects || Students</title>
</head>

<body class="bg-info">
    <div class="container">
        <div class="shadow-sm bg-white my-4" style="width: 100%;border-radius: 20px 20px 0px 0px;">

            <div class="text-center py-4" style="font-size: 22px;"><i>
                    <b> SUBJECT PANEL</b></i></div>

        </div>
        <div class="shadow-sm bg-white border" style="border-radius: 10px; margin-top: 150px; width:100%">

            <form action="<?php $_SERVER['REQUEST_URI'] ?>" class="pt-4 pr-3 pl-3" method="post"
                enctype="multipart/form-data">
                <div class="form-group">
                    <input type="text" name="sub_name" placeholder="Enter The Subjects Name" class="form-control"
                        style="border-radius: 0px 0px 0px 0px; font-family:cursive ;" id="">

                </div>

                <div class="form-group">
                    <input type="text" name="sub_code" placeholder="Enter The Subjects Code" class="form-control"
                        style="border-radius: 0px 0px 0px 0px; font-family:cursive ;" id="">

                </div>
                <div class="form-group">
                    <select name="stream" class="form-control" style="border-radius: 0px 0px 0px 0px;" id="">
                        <option value="" selected>---Choose Stream---</option>
                        <option value="Computer Science Engineering">Computer Science Engineering</option>
                        <option value="Mechanical Engineering">Mechanical Engineering</option>
                        <option value="Civil Engineering">Civil Engineering</option>
                        <option value="Electronics & Commnucation Engineering">Electronics & Commnucation
                            Engineering</option>
                        <option value="Electrical Engineering">Electrical Engineering</option>
                        <option value="Chemical Engineering">Chemical Engineering</option>
                        <option value="Areotical Emgineering">Areotical Emgineering</option>


                    </select>
                </div>

                <div class="form-group">
                    <select name="semester" class="form-control" style="border-radius: 0px 0px 0px 0px;" id="">
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
                    <button type="submit" name="notice" class="form-control btn btn-outline-primary mb-2"
                        style="border-radius: 0px 0px 0px 0px;"><i>Add Subjects</i></button>
                </div>


            </form>

        </div>


    </div>
    <?php
    include '../Connection/connection.php';
    if (isset($_POST['notice'])) {

        $date_of_notice = date("Y/m/d");

        $sub_name = $_POST['sub_name'];
        $sub_code = $_POST['sub_code'];

        $stream = $_POST['stream'];
        $semester = $_POST['semester'];



        $insert_data = mysqli_query($conn, "insert into `subjects` (`sub_name`,`stream`,`semester`,`sub_code`) values ('$sub_name','$stream','$semester','$sub_code')");
        if ($insert_data) {
            echo '<script> swal("Subjects Added Successfully", " Subjects Uploaded", "success") </script>;';
        } else {
            echo '<script> swal("Something Went Wrong", "Uploading failed", "error") </script>;';
        }
    }

    ?>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>


    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->