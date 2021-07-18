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

    <title>Students Details</title>
</head>

<body>

    <div class="container">
        <div class="shadow-sm border  my-4" style="border-radius: 20px;">
            <div class="card-header text-center bg-warning"
                style="font-size:20px; border-radius: 20px 20px 0px 0px; font-family:math;">STUDENTS DETAILS</div>
            <form action="<?php $_SERVER['REQUEST_URI']; ?>" class="m-2" method="post" enctype="multipart/form-data">


                <div class="form-group">

                    <input type="text" name="name" style="border-radius: 0px 0px 0px 0px;" class="form-control"
                        placeholder="Enter The Name Of Student" id="">
                </div>

                <div class="form-group">

                    <input type="text" name="semester" style="border-radius: 0px 0px 0px 0px;" class="form-control"
                        placeholder="Enter The Semester Of Student" id="">
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

                    <input type="text" name="roll" style="border-radius: 0px 0px 0px 0px;" class="form-control"
                        placeholder="Enter The Roll No Of Student" id="">
                </div>

                <div class="form-group">

                    <input type="text" name="fname" style="border-radius: 0px 0px 0px 0px;" class="form-control"
                        placeholder="Enter The Fathers Name Of Student" id="">
                </div>

                <div class="form-group">

                    <input type="date" name="dob" style="border-radius: 0px 0px 0px 0px;" class="form-control"
                        placeholder="Enter The Date of Birth Of Student" id="">
                </div>
                <div class="form-group">

                    <input type="email" name="email" style="border-radius: 0px 0px 0px 0px;" class="form-control"
                        placeholder="Enter The Email Of Student" id="">
                </div>
                <div class="form-group">

                    <input type="number" name="phone" style="border-radius: 0px 0px 0px 0px;" class="form-control"
                        placeholder="Enter The Phone Of Student" id="">
                </div>
                <div class="form-group">

                    <input type="file" name="pimg" style="border-radius: 0px 0px 0px 0px;" class="form-control"
                        placeholder="Enter The Phone Of Student" id="">
                </div>
                <div class="form-group">

                    <input type="hidden" name="profession" value="Student" class="form-control"
                        placeholder="Enter The Phone Of Student" id="">
                </div>
                <div class="form-group">

                    <button type="submit" name="students_details" style="border-radius: 0px 0px 0px 0px;"
                        class="btn btn-outline-info form-control">Add
                        Details</button>
                </div>


            </form>
            <div class="card-footer bg-warning" style="border-radius: 0px 0px 20px 20px;"></div>

        </div>



    </div>



    <?php
    include '../Connection/connection.php';
    if (isset($_POST['students_details'])) {

        $name = $_POST['name'];
        $semester = $_POST['semester'];
        $stream = $_POST['stream'];

        $roll = $_POST['roll'];
        $fname = $_POST['fname'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $pimg = $_FILES['pimg']['name'];
        $pimg_tmp = $_FILES['pimg']['tmp_name'];
        $profession = $_POST['profession'];
        $directory = 'Students Profile Images/' . $pimg;
        move_uploaded_file($pimg_tmp, $directory); 


        $result = mysqli_query($conn, "insert into `login` (`username`,`password`,`position`,`name`,`semester`,`stream`,`email`,`phone`,`pimg`,`fname`,`dob`) values ('$roll','$roll','$profession','$name','$semester','$stream','$email','$phone','$pimg','$fname','$dob')");
        $fee = mysqli_query($conn, "insert into `fee_of_students` (`roll_no`,`name`,`semester`,`stream`,`fee`,`status`) values ('$roll','$name','$semester','$stream','42000','NA')");

        if ($result) {
            echo '<script> swal("Student Added Successfully", "' . $name . ' Registerd Successfully", "success") </script>;';
        } else {
            echo '<script> swal("Something Went Wrong", "Registration failed", "error") </script>;';
        }
    }




    ?>

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