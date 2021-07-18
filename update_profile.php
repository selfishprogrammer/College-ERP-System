
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

<?php 

if($_GET['position']=='Student'){
include './Connection/connection.php';

    ?>
    

<div class="container">

    <div class="shadow-sm border" style="border-radius: 20px; margin-top: 150px;">
        <div class="card-header text-center bg-warning"
            style="font-size: 20px; font-family: math; border-radius: 20px 20px 0px 0px;">
            Update Profile
        </div>


        
        <form action="<?php $_SERVER['REQUEST_URI'] ;?>" class="m-2" method="post" enctype="multipart/form-data">
            <?php  
$user_id=$_GET['user_id'];
$position=$_GET['position'];
$student_record=mysqli_fetch_assoc(mysqli_query($conn,"select * from `login` where `user_id`='$user_id' and `position`='$position'"));
$name=$student_record['name'];
$username=$student_record['username'];
$sem=$student_record['semester'];
$dob=$student_record['dob'];
$email=$student_record['email'];

$phone=$student_record['phone'];

if(isset($_POST['students_details'])){



    $updated_name=$_POST['name'];
    $updated_sem=$_POST['semester'];
    $updated_dob=$_POST['dob'];
    $updated_email=$_POST['email'];
    $updated_phone=$_POST['phone'];

    $updated_details=mysqli_query($conn,"update `login` set `name`='$updated_name' , `semester`='$updated_sem' , `dob`='$updated_dob' , `email`='$updated_email' , `phone`='$updated_phone' where `user_id`='$user_id' and `position`='$position'");

    if($updated_details){

        header("location:./Students/student_analysis");
    }
    else{
        echo "Failed";
    }
}

?>

            <div class="form-group">

                <input type="text" name="name" style="border-radius: 15px;" class="form-control"
                    placeholder="Enter The Name Of Student" value="<?php echo $name ?>" id="">
            </div>

            <div class="form-group">

                <input type="text" name="semester" style="border-radius: 15px;" class="form-control"
                    placeholder="Enter The Semester Of Student" value="<?php echo $sem ?>" id="">
            </div>





            <div class="form-group">

                <input type="text" name="dob" style="border-radius: 15px;" value="<?php echo $dob ?>"
                    class="form-control" placeholder="Enter The Date of Birth Of Student" id="">
            </div>
            <div class="form-group">

                <input type="email" name="email" value="<?php echo $email ?>" style="border-radius: 15px;"
                    class="form-control" placeholder="Enter The Email Of Student" id="">
            </div>
            <div class="form-group">

                <input type="number" name="phone" value="<?php echo $phone ?>" style="border-radius: 15px;"
                    class="form-control" placeholder="Enter The Phone Of Student" id="">
            </div>


            <div class="form-group">

                <button type="submit" name="students_details" style="border-radius: 15px;"
                    class="btn btn-outline-info form-control">Update
                    Details</button>
            </div>


        </form>

        <div class="card-footer bg-warning" style="border-radius:0px 0px 20px 20px; "></div>
    </div>

</div>


<?php
}


else if($_GET['position']=='Faculty'){
    include './Connection/connection.php';
    
        ?>
        
    
    <div class="container">
    
        <div class="shadow-sm border" style="border-radius: 20px; margin-top: 150px;">
            <div class="card-header text-center bg-warning"
                style="font-size: 20px; font-family: math; border-radius: 20px 20px 0px 0px;">
                Update Profile
            </div>
    
    
            
            <form action="<?php $_SERVER['REQUEST_URI'] ;?>" class="m-2" method="post" enctype="multipart/form-data">
                <?php  
    $user_id=$_GET['user_id'];
    $position=$_GET['position'];
    $student_record=mysqli_fetch_assoc(mysqli_query($conn,"select * from `login` where `user_id`='$user_id' and `position`='$position'"));
    $name=$student_record['name'];
    $username=$student_record['username'];
    $qualification=$student_record['qualification'];
    $dob=$student_record['dob'];
    $email=$student_record['email'];
    
    $phone=$student_record['phone'];
    
    if(isset($_POST['facultys_details'])){
    
    
    
        $updated_name=$_POST['name'];
        $updated_qualification=$_POST['qualification'];
        $updated_dob=$_POST['dob'];
        $updated_email=$_POST['email'];
        $updated_phone=$_POST['phone'];
    
        $updated_details=mysqli_query($conn,"update `login` set `name`='$updated_name' , `qualification`='$updated_qualification' , `dob`='$updated_dob' , `email`='$updated_email' , `phone`='$updated_phone' where `user_id`='$user_id' and `position`='$position'");
    
        if($updated_details){
    
            header("location:./Faculty/faculty_analysis");
        }
        else{
            echo "Failed";
        }
    }
    
    ?>
    
                <div class="form-group">
    
                    <input type="text" name="name" style="border-radius: 15px;" class="form-control"
                        placeholder="Enter The Name Of faculty" value="<?php echo $name ?>" id="">
                </div>
    
                <div class="form-group">
    
                    <input type="text" name="qualification" style="border-radius: 15px;" class="form-control"
                        placeholder="Enter The Qualification Of faculty" value="<?php echo $qualification ?>" id="">
                </div>
    
    
    
    
    
                <div class="form-group">
    
                    <input type="text" name="dob" style="border-radius: 15px;" value="<?php echo $dob ?>"
                        class="form-control" placeholder="Enter The Date of Birth Of faculty" id="">
                </div>
                <div class="form-group">
    
                    <input type="email" name="email" value="<?php echo $email ?>" style="border-radius: 15px;"
                        class="form-control" placeholder="Enter The Email Of faculty" id="">
                </div>
                <div class="form-group">
    
                    <input type="number" name="phone" value="<?php echo $phone ?>" style="border-radius: 15px;"
                        class="form-control" placeholder="Enter The Phone Of faculty" id="">
                </div>
    
    
                <div class="form-group">
    
                    <button type="submit" name="facultys_details" style="border-radius: 15px;"
                        class="btn btn-outline-info form-control">Update
                        Details</button>
                </div>
    
    
            </form>
    
            <div class="card-footer bg-warning" style="border-radius:0px 0px 20px 20px; "></div>
        </div>
    
    </div>
    
    
    <?php
    }





?>

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