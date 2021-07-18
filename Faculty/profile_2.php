<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['position'] == "Faculty") {

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
    <title>Profile</title>
</head>

<body class="bg-primary">
    <?php include '../nav_for_all.php' ?>

    <div class="container">
        <div class="shadow-sm border bg-white" style="margin-top:20px; border-radius:10px;">

            <?php


                $name = $_SESSION['name'];
                $username = $_SESSION['username'];

                $profile = mysqli_fetch_assoc(mysqli_query($conn, "select * from `login` where `username`='$username'"));
                $father_name = $profile['fname'];
                $email = $profile['email'];

                $phone = $profile['phone'];

                $pimg = $profile['pimg'];
                $dept = $profile['dept'];
                $qualification = $profile['qualification'];
                $father_name = $profile['fname'];


                ?>

            <div class="d-flex justify-content-center">

                <img src="../Adminastator/Students Profile Images/<?php echo $pimg  ?>" width="80" height="80"
                    class="rounded-circle mt-3 mb-2" alt="" srcset="">

            </div>

            <div class="shadow-sm border m-2  bg-default" style="border-radius: 5px;">
                <div class="d-flex justify-content-between m-3">
                    <div class="mx-1" style="font-size: 20px; font-family: math;">Name </div>
                    <div class="mx-1" style="font-size: 20px; font-family: math;">: </div>
                    <div class="mx-1" style="font-size: 20px; font-family: math;"><?php echo $name  ?></div>


                </div>
            </div>
            <div class="shadow-sm border m-2  bg-default" style="border-radius: 5px;">
                <div class="d-flex justify-content-between m-3">
                    <div class="mx-1" style="font-size: 20px; font-family: math;">Roll No </div>
                    <div class="mx-1" style="font-size: 20px; font-family: math;">: </div>
                    <div class="mx-1" style="font-size: 20px; font-family: math;"><?php echo $username  ?></div>


                </div>
            </div>

            <div class="shadow-sm border m-2  bg-default" style="border-radius: 5px;">
                <div class="d-flex justify-content-between m-3">
                    <div class="mx-1" style="font-size: 20px; font-family: math;">Department </div>
                    <div class="mx-1" style="font-size: 20px; font-family: math;">: </div>
                    <div class="mx-1" style="font-size: 20px; font-family: math;"><?php echo $dept  ?></div>


                </div>
            </div>
            <div class="shadow-sm border m-2  bg-default" style="border-radius: 5px;">
                <div class="d-flex justify-content-between m-3">
                    <div class="mx-1" style="font-size: 20px; font-family: math;">Phone </div>
                    <div class="mx-1" style="font-size: 20px; font-family: math;">: </div>
                    <div class="mx-1" style="font-size: 20px; font-family: math;"><?php echo $phone  ?></div>


                </div>
            </div>
            <div class="shadow-sm border m-2  bg-default" style="border-radius: 5px;">
                <div class="d-flex justify-content-between m-3">
                    <div class="mx-1" style="font-size: 20px; font-family: math;">Email </div>
                    <div class="mx-1" style="font-size: 20px; font-family: math;">: </div>
                    <div class="mx-1" style="font-size: 20px; font-family: math;"><?php echo $email  ?></div>


                </div>
            </div>
            <div class="shadow-sm border m-2  bg-default" style="border-radius: 5px;">
                <div class="d-flex justify-content-between m-3">
                    <div class="mx-1" style="font-size: 20px; font-family: math;">Qualification</div>
                    <div class="mx-1" style="font-size: 20px; font-family: math;">: </div>
                    <div class="mx-1" style="font-size: 20px; font-family: math;"><?php echo $qualification  ?>
                    </div>


                </div>
            </div>
            <div class="d-flex justify-content-center">
                <a href="../update_profile?user_id=<?php echo $_SESSION['user_id'] ?>&position=<?php echo $_SESSION['position'] ?>"
                    type="submit" class="form-control btn btn-outline-primary mb-3 "
                    style="width:10rem; border-radius: 5px;">
                    Update Profile
                </a>
            </div>


        </div>
    </div>




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
</body>

</html>

<?php } else {
    header("location:../");
} ?>