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
    <title>College ERP System</title>
</head>

<body>



    <div class="container">

        <div class="shadow-sm" style="border-radius: 10px; margin-top:
140px">

            <div class="p-5">
                <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <input type="file" class="form-control" style="font-family: monospace;" name="homework_file"
                            id="">

                    </div>


                    <input type="hidden" name="stream" value="<?php echo $_SESSION['stream'] ?>" id="">
                    <input type="hidden" name="semester" value="<?php echo $_SESSION['semester'] ?>" id="">
                    <input type="hidden" name="name" value="<?php echo $_SESSION['name'] ?>" id="">
                    <input type="hidden" name="username" value="<?php echo $_SESSION['username'] ?>" id="">

                    <div class="form-group">

                        <button type="submit" name="submit" class="btn btn-outline-info form-control"
                            style="font-family: monospace;"><b>Submit Homework</b></button>
                    </div>

                </form>

            </div>

        </div>

        <?php
            if (isset($_POST['submit'])) {

                $stream = $_POST['stream'];
                $semester = $_POST['semester'];
                $id = $_GET['homework_title'];
                $name = $_POST['name'];
                $roll_no = $_POST['username'];
                $homework_file = $_FILES['homework_file']['name'];
                $homework_file_tmp = $_FILES['homework_file']['tmp_name'];
                $date = date("d/m/Y l");


                $directory = "Submitted Homework/" . $homework_file;
                move_uploaded_file($homework_file_tmp, $directory);


                $sql = "INSERT INTO `homework_submission` (`title`, `roll_no`, `name`, `homework`, `semester`, `stream`, `date_of_submission`) VALUES ('$id', '$roll_no', '$name', '$homework_file', '$semester', '$stream', '$date')";
                $submit_homework = mysqli_query($conn, $sql);
                if ($submit_homework) {
                    echo '<div class="alert alert-success" role="alert">
Homework Submitted Successfully
</div>';
                } else {
                }
            }



            ?>



    </div>








    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
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