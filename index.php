<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>College ERP System</title>
</head>

<body style="background-image: url('./Images/back.jpg');">
    <?php
    $error = '';

    ?>

    <div class="container">
        <div class="row">
            <div class="col-md-7">

            </div>

            <div class="col-md-5">

                <div class="shadow-lg border bg-white" style="margin-top:180px; opacity: 1; border-radius:10px;">


                    <div class="card-header text-center bg-warning px-2"
                        style="font-size: 18px; font-family: monospace; border-radius:10px 10px 0px 0px;">
                        Enter Your Information
                    </div>

                    <form class="m-3" action="<?php $_SERVER['REQUEST_URI'] ?>" method="post">


                        <?php
                        include './Connection/connection.php';

                        if (isset($_POST['login'])) {
                            $username = $_POST['username'];
                            $password = $_POST['password'];

                            $result = mysqli_query($conn, "select * from `login` where `username`='$username' and `password`='$password'");
                            $nums = mysqli_num_rows($result);
                            if ($nums > 0) {
                                $row = mysqli_fetch_assoc($result);
                                session_start();

                                $_SESSION['user_id'] = $row['user_id'];
                                $_SESSION['loggedin'] = true;
                                $_SESSION['username'] = $row['username'];
                                $_SESSION['name'] = $row['name'];
                                $_SESSION['email'] = $row['email'];
                                $_SESSION['phone'] = $row['phone'];
                                $_SESSION['position'] = $row['position'];

                                $_SESSION['stream'] = $row['stream'];
                                $_SESSION['semester'] = $row['semester'];



                                if ($row['position'] == 'Student') {

                                    header("location:./Students/student_analysis.php");
                                } else if ($row['position'] == 'Faculty') {
                                    header("location:./Faculty/faculty_analysis.php");
                                } else if ($row['position'] == 'administator') {
                                    header("location:./Adminastator/administator_analysis.php");
                                } else {
                                    header("");
                                }
                            } else {

                                echo '<div class="alert alert-danger" role="alert">
Check Your Details
</div>';
                            }
                        }
                        ?>


                        <div class="form-group">

                            <input style="font-family: monospace;" type="text" name="username" class="form-control"
                                id="" placeholder="Enter Username">
                        </div>
                        <div class="form-group">

                            <input style="font-family: monospace;" type="password" name="password" class="form-control"
                                id="" placeholder="Enter Password">
                        </div>

                        <div class="form-group">
                            <div class="d-flex justify-content-center">
                                <button type="submit" name="login" class="form-control btn btn-outline-primary"
                                    style="width: 8rem;">Login</button>
                            </div>
                        </div>


                    </form>
                    <hr>
                    <div class="px-2"><a href="forget_password.php" class="nav-link">forget_password?</a></div>
                    <div class="card-footer bg-warning" style="border-radius: 0px 0px 10px 10px;"></div>
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

</html>