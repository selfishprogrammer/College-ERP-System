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
                style="font-size:20px; border-radius: 20px 20px 0px 0px; font-family:math;">FACULTY DETAILS</div>
            <form action="<?php $_SERVER['REQUEST_URI'] ;?>" class="m-2" method="post" enctype="multipart/form-data">


                <div class="form-group">

                    <input type="text" name="name" style="border-radius: 15px;" class="form-control"
                        placeholder="Enter The Name Of Faculty" id="">
                </div>

                <div class="form-group">

                    <input type="text" name="dept" style="border-radius: 15px;" class="form-control"
                        placeholder="Enter The Department Of Faculty" id="">
                </div>

                <div class="form-group">

                    <input type="text" name="id" style="border-radius: 15px;" class="form-control"
                        placeholder="Enter The id No Of Faculty" id="">
                </div>

                <div class="form-group">

                    <input type="text" name="education" style="border-radius: 15px;" class="form-control"
                        placeholder="Enter The Qualification Of Faculty" id="">
                </div>

                <div class="form-group">

                    <input type="date" name="dob" style="border-radius: 15px;" class="form-control"
                        placeholder="Enter The Date of Birth Of Faculty" id="">
                </div>
                <div class="form-group">

                    <input type="email" name="email" style="border-radius: 15px;" class="form-control"
                        placeholder="Enter The Email Of Student" id="">
                </div>
                <div class="form-group">

                    <input type="number" name="phone" style="border-radius: 15px;" class="form-control"
                        placeholder="Enter The Phone Of Faculty" id="">
                </div>
                <div class="form-group">

                    <input type="file" name="pimg" style="border-radius: 15px;" class="form-control"
                        placeholder="Enter The Phone Of Faculty" id="">
                </div>
                <div class="form-group">

                    <input type="hidden" name="profession" value="Faculty" class="form-control"
                        placeholder="Enter The Phone Of Faculty" id="">
                </div>
                <div class="form-group">

                    <button type="submit" name="faculty_details" style="border-radius: 15px;" class="btn btn-outline-info form-control">Add
                        Details</button>
                </div>


            </form>
          <div class="card-footer bg-warning" style="border-radius: 0px 0px 20px 20px;"></div>

        </div>



    </div>



    <?php
    include '../Connection/connection.php';
    if(isset($_POST['faculty_details'])){

$name=$_POST['name'];
$dept=$_POST['dept'];
$id=$_POST['id'];
$qualification=$_POST['education'];
$dob=$_POST['dob'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$pimg=$_FILES['pimg']['name'];
$pimg_tmp=$_FILES['pimg']['tmp_name'];
$profession=$_POST['profession'];
$directory = 'Faculty Profile Images/' . $pimg;
move_uploaded_file($pimg_tmp, $directory);


$result=mysqli_query($conn,"insert into `login` (`username`,`password`,`position`,`name`,`email`,`phone`,`pimg`,`dob`,`dept`,`qualification`) values ('$id','$id','$profession','$name','$email','$phone','$pimg','$dob','$dept','$qualification')");
if($result){
  echo '<script> swal("Faculty Added Successfully", "'.$name.' Registerd Successfully", "success") </script>;';
}else{
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