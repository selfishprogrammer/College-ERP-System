<div class="shadow-sm bg-white"
    style="font-family:monospace; width: 100%; height:500px; margin-top:50px; border-radius: 10px;">

    <div class="text-center" style="font-family:monospace; font-size: 25px; font-family: math;"><b>Computer Sceince
            Engineering
            (CSE)</b>
    </div>
    <hr>


    <div class="container">
        <div class="shadow-sm bg-default" style="font-family:monospace; border-radius: 15px;">

            <form action="<?php $_SERVER['REQUEST_URI']  ?>" class="m-3 pb-2 pt-4" method="post">
                <div class="form-group">
                    <select name="days" class="form-control"
                        style="font-family:monospace; border-radius: 0px 0px 0px 0px;" id="">
                        <option value="" selected>---Select Days</option>
                        <option value="Monday">Monday</option>
                        <option value="Tuesday">Tuesday</option>

                        <option value="Wednesday">Wednesday</option>

                        <option value="Thrusday">Thrusday</option>
                        <option value="Friday">Friday</option>




                    </select>
                </div>
                <div class="form-group">
                    <select name="subject_code" class="form-control"
                        style="font-family:monospace; border-radius: 0px 0px 0px 0px;" id="">
                        <option value="" selected>---Select Subject--</option>

                        <?php

                        $subject_year = mysqli_query($conn, "select * from `subjects` where `stream`='Computer Science Engineering' and `semester`='7th Semester'");

                        while ($row = mysqli_fetch_assoc($subject_year)) {
                            echo '                   <option value="' . $row['sub_name'] . '">' . $row['sub_name'] . '</option>
';
                        }
                        ?>

                    </select>
                </div>

                <div class="form-group">
                    <select name="subject" class="form-control"
                        style="font-family:monospace; border-radius: 0px 0px 0px 0px;" id="">
                        <option value="" selected>---Select Subject Code--</option>
                        <?php

                        $subject_year = mysqli_query($conn, "select * from `subjects` where `stream`='Computer Science Engineering' and `semester`='7th Semester'");

                        while ($row = mysqli_fetch_assoc($subject_year)) {
                            echo '                   <option value="' . $row['sub_code'] . '">' . $row['sub_code'] . '</option>
';
                        }
                        ?>

                    </select>
                </div>
                <div class="form-group">
                    <select name="time" class="form-control"
                        style="font-family:monospace; border-radius: 0px 0px 0px 0px;" id="">
                        <option value="" selected>---Select Timing</option>
                        <option value="9:30AM">9:30AM</option>
                        <option value="10:30AM">10:30AM</option>

                        <option value="11:30AM">12:30AM</option>

                        <option value="9:30AM">1:30AM</option>
                        <option value="9:30AM">2:30AM</option>
                        <option value="9:30AM">3:30AM</option>




                    </select>
                </div>

                <div class="form-group">
                    <select name="faculty" class="form-control"
                        style="font-family:monospace; border-radius: 0px 0px 0px 0px;" id="">
                        <option value="" selected>---Select Faculty</option>
                        <?php


                        $position = "Faculty";

                        $first_year = mysqli_query($conn, "select * from `login` where `stream`='Computer Science Engineering' and `position`='$position'");
                        while ($row = mysqli_fetch_assoc($first_year)) {
                            echo '  <option value="' . $row['name'] . '">' . $row['name'] . '</option>';
                        }

                        ?>

                    </select>
                </div>

                <div class="form-group">
                    <input type="url" name="joining_link" class="form-control" placeholder="www.zoomclass.com/siem"
                        id="">
                </div>
                <div class="form-group">
                    <button type="submit" name="cse_btn" class="btn btn-success form-control"
                        style="font-family:monospace; border-radius: 0px 0px 0px 0px;">Add Class For Today</button>
                </div>

            </form>

        </div>
    </div>
</div>


<div class="shadow-sm bg-white"
    style="font-family:monospace; width: 100%; height:500px; margin-top:50px; border-radius: 10px;">




    <div class="text-center" style="font-family:monospace; font-size: 25px; font-family: math;"><b>Electrical
            Engineering
            (EE)</b>
    </div>
    <hr>


    <div class="container">
        <div class="shadow-sm bg-default" style="font-family:monospace; border-radius: 15px;">

            <form action="<?php $_SERVER['REQUEST_URI']  ?>" class="m-3 pb-2 pt-4" method="post">
                <div class="form-group">
                    <select name="days" class="form-control"
                        style="font-family:monospace; border-radius: 0px 0px 0px 0px;" id="">
                        <option value="" selected>---Select Days</option>
                        <option value="Monday">Monday</option>
                        <option value="Tuesday">Tuesday</option>

                        <option value="Wednesday">Wednesday</option>

                        <option value="Thrusday">Thrusday</option>
                        <option value="Friday">Friday</option>




                    </select>
                </div>
                <div class="form-group">
                    <select name="subject_code" class="form-control"
                        style="font-family:monospace; border-radius: 0px 0px 0px 0px;" id="">
                        <option value="" selected>---Select Subject--</option>

                        <?php

                        $subject_year = mysqli_query($conn, "select * from `subjects` where `stream`='Electrical Engineering' and `semester`='7th Semester'");

                        while ($row = mysqli_fetch_assoc($subject_year)) {
                            echo '                   <option value="' . $row['sub_name'] . '">' . $row['sub_name'] . '</option>
';
                        }
                        ?>

                    </select>
                </div>

                <div class="form-group">
                    <select name="subject" class="form-control"
                        style="font-family:monospace; border-radius: 0px 0px 0px 0px;" id="">
                        <option value="" selected>---Select Subject Code--</option>
                        <?php

                        $subject_year = mysqli_query($conn, "select * from `subjects` where `stream`='Electrical Engineering' and `semester`='7th Semester'");

                        while ($row = mysqli_fetch_assoc($subject_year)) {
                            echo '                   <option value="' . $row['sub_code'] . '">' . $row['sub_code'] . '</option>
';
                        }
                        ?>

                    </select>
                </div>
                <div class="form-group">
                    <select name="time" class="form-control"
                        style="font-family:monospace; border-radius: 0px 0px 0px 0px;" id="">
                        <option value="" selected>---Select Timing</option>
                        <option value="9:30AM">9:30AM</option>
                        <option value="10:30AM">10:30AM</option>

                        <option value="11:30AM">12:30AM</option>

                        <option value="9:30AM">1:30AM</option>
                        <option value="9:30AM">2:30AM</option>
                        <option value="9:30AM">3:30AM</option>




                    </select>
                </div>

                <div class="form-group">
                    <select name="faculty" class="form-control"
                        style="font-family:monospace; border-radius: 0px 0px 0px 0px;" id="">
                        <option value="" selected>---Select Faculty</option>
                        <?php


                        $position = "Faculty";

                        $first_year = mysqli_query($conn, "select * from `login` where `stream`='Electrical Engineering' and `position`='$position'");
                        while ($row = mysqli_fetch_assoc($first_year)) {
                            echo '  <option value="' . $row['name'] . '">' . $row['name'] . '</option>';
                        }

                        ?>

                    </select>
                </div>

                <div class="form-group">
                    <input type="url" name="joining_link" class="form-control" placeholder="www.zoomclass.com/siem"
                        id="">
                </div>
                <div class="form-group">
                    <button type="submit" name="ee_btn" class="btn btn-success form-control"
                        style="font-family:monospace; border-radius: 0px 0px 0px 0px;">Add Class For Today</button>
                </div>

            </form>

        </div>
    </div>
</div>


<div class="shadow-sm bg-white "
    style="font-family:monospace; width: 100%; height:550px; margin-top:50px; border-radius: 10px;">


    <div class="text-center" style="font-family:monospace; font-size: 25px; font-family: math;"><b>Electronics &
            Commnucation
            Engineering
            (ECE)</b>
    </div>
    <hr>


    <div class="container">
        <div class="shadow-sm bg-default" style="font-family:monospace; border-radius: 15px;">

            <form action="<?php $_SERVER['REQUEST_URI']  ?>" class="m-3 pb-2 pt-4" method="post">
                <div class="form-group">
                    <select name="days" class="form-control"
                        style="font-family:monospace; border-radius: 0px 0px 0px 0px;" id="">
                        <option value="" selected>---Select Days</option>
                        <option value="Monday">Monday</option>
                        <option value="Tuesday">Tuesday</option>

                        <option value="Wednesday">Wednesday</option>

                        <option value="Thrusday">Thrusday</option>
                        <option value="Friday">Friday</option>




                    </select>
                </div>
                <div class="form-group">
                    <select name="subject_code" class="form-control"
                        style="font-family:monospace; border-radius: 0px 0px 0px 0px;" id="">
                        <option value="" selected>---Select Subject--</option>

                        <?php

                        $subject_year = mysqli_query($conn, "select * from `subjects` where `stream`='Electronics & Commnucation Engineering' and `semester`='7th Semester'");

                        while ($row = mysqli_fetch_assoc($subject_year)) {
                            echo '                   <option value="' . $row['sub_name'] . '">' . $row['sub_name'] . '</option>
';
                        }
                        ?>

                    </select>
                </div>

                <div class="form-group">
                    <select name="subject" class="form-control"
                        style="font-family:monospace; border-radius: 0px 0px 0px 0px;" id="">
                        <option value="" selected>---Select Subject Code--</option>
                        <?php

                        $subject_year = mysqli_query($conn, "select * from `subjects` where `stream`='Electronics & Commnucation Engineering' and `semester`='7th Semester'");

                        while ($row = mysqli_fetch_assoc($subject_year)) {
                            echo '                   <option value="' . $row['sub_code'] . '">' . $row['sub_code'] . '</option>
';
                        }
                        ?>

                    </select>
                </div>
                <div class="form-group">
                    <select name="time" class="form-control"
                        style="font-family:monospace; border-radius: 0px 0px 0px 0px;" id="">
                        <option value="" selected>---Select Timing</option>
                        <option value="9:30AM">9:30AM</option>
                        <option value="10:30AM">10:30AM</option>

                        <option value="11:30AM">12:30AM</option>

                        <option value="9:30AM">1:30AM</option>
                        <option value="9:30AM">2:30AM</option>
                        <option value="9:30AM">3:30AM</option>




                    </select>
                </div>

                <div class="form-group">
                    <select name="faculty" class="form-control"
                        style="font-family:monospace; border-radius: 0px 0px 0px 0px;" id="">
                        <option value="" selected>---Select Faculty</option>
                        <?php


                        $position = "Faculty";

                        $first_year = mysqli_query($conn, "select * from `login` where `stream`='Electronics & Commnucation Engineering' and `position`='$position'");
                        while ($row = mysqli_fetch_assoc($first_year)) {
                            echo '  <option value="' . $row['name'] . '">' . $row['name'] . '</option>';
                        }

                        ?>

                    </select>
                </div>

                <div class="form-group">
                    <input type="url" name="joining_link" class="form-control" placeholder="www.zoomclass.com/siem"
                        id="">
                </div>
                <div class="form-group">
                    <button type="submit" name="ece_btn" class="btn btn-success form-control"
                        style="font-family:monospace; border-radius: 0px 0px 0px 0px;">Add Class For Today</button>
                </div>

            </form>

        </div>
    </div>
</div>




<div class="shadow-sm bg-white"
    style="font-family:monospace; width: 100%; height:500px; margin-top:50px; border-radius: 10px;">

    <div class="text-center" style="font-family:monospace; font-size: 25px; font-family: math;"><b>Civil Engineering
            (CE)</b>
    </div>
    <hr>


    <div class="container">
        <div class="shadow-sm bg-default" style="font-family:monospace; border-radius: 15px;">

            <form action="<?php $_SERVER['REQUEST_URI']  ?>" class="m-3 pb-2 pt-4" method="post">
                <div class="form-group">
                    <select name="days" class="form-control"
                        style="font-family:monospace; border-radius: 0px 0px 0px 0px;" id="">
                        <option value="" selected>---Select Days</option>
                        <option value="Monday">Monday</option>
                        <option value="Tuesday">Tuesday</option>

                        <option value="Wednesday">Wednesday</option>

                        <option value="Thrusday">Thrusday</option>
                        <option value="Friday">Friday</option>




                    </select>
                </div>
                <div class="form-group">
                    <select name="subject_code" class="form-control"
                        style="font-family:monospace; border-radius: 0px 0px 0px 0px;" id="">
                        <option value="" selected>---Select Subject--</option>

                        <?php

                        $subject_year = mysqli_query($conn, "select * from `subjects` where `stream`='Civil Engineering' and `semester`='7th Semester'");

                        while ($row = mysqli_fetch_assoc($subject_year)) {
                            echo '                   <option value="' . $row['sub_name'] . '">' . $row['sub_name'] . '</option>
';
                        }
                        ?>

                    </select>
                </div>

                <div class="form-group">
                    <select name="subject" class="form-control"
                        style="font-family:monospace; border-radius: 0px 0px 0px 0px;" id="">
                        <option value="" selected>---Select Subject Code--</option>
                        <?php

                        $subject_year = mysqli_query($conn, "select * from `subjects` where `stream`='Civil Engineering' and `semester`='7th Semester'");

                        while ($row = mysqli_fetch_assoc($subject_year)) {
                            echo '                   <option value="' . $row['sub_code'] . '">' . $row['sub_code'] . '</option>
';
                        }
                        ?>

                    </select>
                </div>
                <div class="form-group">
                    <select name="time" class="form-control"
                        style="font-family:monospace; border-radius: 0px 0px 0px 0px;" id="">
                        <option value="" selected>---Select Timing</option>
                        <option value="9:30AM">9:30AM</option>
                        <option value="10:30AM">10:30AM</option>

                        <option value="11:30AM">12:30AM</option>

                        <option value="9:30AM">1:30AM</option>
                        <option value="9:30AM">2:30AM</option>
                        <option value="9:30AM">3:30AM</option>




                    </select>
                </div>

                <div class="form-group">
                    <select name="faculty" class="form-control"
                        style="font-family:monospace; border-radius: 0px 0px 0px 0px;" id="">
                        <option value="" selected>---Select Faculty</option>
                        <?php


                        $position = "Faculty";

                        $first_year = mysqli_query($conn, "select * from `login` where `stream`='Civil Engineering' and `position`='$position'");
                        while ($row = mysqli_fetch_assoc($first_year)) {
                            echo '  <option value="' . $row['name'] . '">' . $row['name'] . '</option>';
                        }

                        ?>

                    </select>
                </div>

                <div class="form-group">
                    <input type="url" name="joining_link" class="form-control" placeholder="www.zoomclass.com/siem"
                        id="">
                </div>
                <div class="form-group">
                    <button type="submit" name="ce_btn" class="btn btn-success form-control"
                        style="font-family:monospace; border-radius: 0px 0px 0px 0px;">Add Class For Today</button>
                </div>

            </form>

        </div>

    </div>
</div>




<div class="shadow-sm bg-white mb-4"
    style="font-family:monospace; width: 100%; height:500px; margin-top:50px; border-radius: 10px;">


    <div class="text-center" style="font-family:monospace; font-size: 25px; font-family: math;"><b>Mechanical
            Engineering
            (ME)</b>
    </div>
    <hr>


    <div class="container">
        <div class="shadow-sm bg-default mb-4" style="font-family:monospace; border-radius: 15px;">

            <form action="<?php $_SERVER['REQUEST_URI']  ?>" class="m-3 pb-2 pt-4" method="post">
                <div class="form-group">
                    <select name="days" class="form-control"
                        style="font-family:monospace; border-radius: 0px 0px 0px 0px;" id="">
                        <option value="" selected>---Select Days</option>
                        <option value="Monday">Monday</option>
                        <option value="Tuesday">Tuesday</option>

                        <option value="Wednesday">Wednesday</option>

                        <option value="Thrusday">Thrusday</option>
                        <option value="Friday">Friday</option>




                    </select>
                </div>
                <div class="form-group">
                    <select name="subject_code" class="form-control"
                        style="font-family:monospace; border-radius: 0px 0px 0px 0px;" id="">
                        <option value="" selected>---Select Subject--</option>

                        <?php

                        $subject_year = mysqli_query($conn, "select * from `subjects` where `stream`='Mechanical Engineering' and `semester`='7th Semester'");

                        while ($row = mysqli_fetch_assoc($subject_year)) {
                            echo '                   <option value="' . $row['sub_name'] . '">' . $row['sub_name'] . '</option>
';
                        }
                        ?>

                    </select>
                </div>

                <div class="form-group">
                    <select name="subject" class="form-control"
                        style="font-family:monospace; border-radius: 0px 0px 0px 0px;" id="">
                        <option value="" selected>---Select Subject Code--</option>
                        <?php

                        $subject_year = mysqli_query($conn, "select * from `subjects` where `stream`='Mechanical Engineering' and `semester`='7th Semester'");

                        while ($row = mysqli_fetch_assoc($subject_year)) {
                            echo '                   <option value="' . $row['sub_code'] . '">' . $row['sub_code'] . '</option>
';
                        }
                        ?>

                    </select>
                </div>
                <div class="form-group">
                    <select name="time" class="form-control"
                        style="font-family:monospace; border-radius: 0px 0px 0px 0px;" id="">
                        <option value="" selected>---Select Timing</option>
                        <option value="9:30AM">9:30AM</option>
                        <option value="10:30AM">10:30AM</option>

                        <option value="11:30AM">12:30AM</option>

                        <option value="9:30AM">1:30AM</option>
                        <option value="9:30AM">2:30AM</option>
                        <option value="9:30AM">3:30AM</option>




                    </select>
                </div>

                <div class="form-group">
                    <select name="faculty" class="form-control"
                        style="font-family:monospace; border-radius: 0px 0px 0px 0px;" id="">
                        <option value="" selected>---Select Faculty</option>
                        <?php


                        $position = "Faculty";

                        $first_year = mysqli_query($conn, "select * from `login` where `stream`='Mechanical Engineering' and `position`='$position'");
                        while ($row = mysqli_fetch_assoc($first_year)) {
                            echo '  <option value="' . $row['name'] . '">' . $row['name'] . '</option>';
                        }

                        ?>

                    </select>
                </div>

                <div class="form-group">
                    <input type="url" name="joining_link" class="form-control" placeholder="www.zoomclass.com/siem"
                        id="">
                </div>
                <div class="form-group">
                    <button type="submit" name="me_btn" class="btn btn-success form-control"
                        style="font-family:monospace; border-radius: 0px 0px 0px 0px;">Add Class For Today</button>
                </div>

            </form>

        </div>
    </div>
</div>










<?php




if (isset($_POST['cse_btn'])) {
    $time = $_POST['time'];
    $subject = $_POST['subject'];
    $subject_code = $_POST['subject_code'];

    $date = date("d-m-Y");
    $days = $_POST['days'];

    $faculty = $_POST['faculty'];
    $joining_link = $_POST['joining_link'];

    $add_cse = mysqli_query($conn, "insert into `today_class` (`date`,`subject`,`subject_code`,`semester`,`faculty`,`timiing`,`joining_link`,`stream`,`day`) 
    values ('$date','$subject','$subject_code','7th Semester','$faculty','$time','$joining_link','Computer Science Engineering','$days')");

    if ($add_cse) {
        echo '<script> swal("Class Added Successfully", "success") </script>;';
    } else {
        echo '<script> swal("Something Went Wrong", "Addition failed", "error") </script>;';
    }
}






?>

<?php




if (isset($_POST['ee_btn'])) {
    $time = $_POST['time'];
    $subject = $_POST['subject'];
    $subject_code = $_POST['subject_code'];

    $date = date("d-m-Y");
    $days = $_POST['days'];

    $faculty = $_POST['faculty'];
    $joining_link = $_POST['joining_link'];

    $add_cse = mysqli_query($conn, "insert into `today_class` (`date`,`subject`,`subject_code`,`semester`,`faculty`,`timiing`,`joining_link`,`stream`,`day`) 
    values ('$date','$subject','$subject_code','7th Semester','$faculty','$time','$joining_link','Electrical Engineering','$days')");

    if ($add_cse) {
        echo '<script> swal("Class Added Successfully", "success") </script>;';
    } else {
        echo '<script> swal("Something Went Wrong", "Addition failed", "error") </script>;';
    }
}






?>



<?php




if (isset($_POST['ece_btn'])) {
    $time = $_POST['time'];
    $subject = $_POST['subject'];
    $subject_code = $_POST['subject_code'];

    $date = date("d-m-Y");
    $days = $_POST['days'];

    $faculty = $_POST['faculty'];
    $joining_link = $_POST['joining_link'];

    $add_cse = mysqli_query($conn, "insert into `today_class` (`date`,`subject`,`subject_code`,`semester`,`faculty`,`timiing`,`joining_link`,`stream`,`day`) 
    values ('$date','$subject','$subject_code','7th Semester','$faculty','$time','$joining_link','Electronics & Commnucation Engineering','$days')");

    if ($add_cse) {
        echo '<script> swal("Class Added Successfully", "success") </script>;';
    } else {
        echo '<script> swal("Something Went Wrong", "Addition failed", "error") </script>;';
    }
}






?>


<?php




if (isset($_POST['ece_btn'])) {
    $time = $_POST['time'];
    $subject = $_POST['subject'];
    $subject_code = $_POST['subject_code'];

    $date = date("d-m-Y");
    $days = $_POST['days'];

    $faculty = $_POST['faculty'];
    $joining_link = $_POST['joining_link'];

    $add_cse = mysqli_query($conn, "insert into `today_class` (`date`,`subject`,`subject_code`,`semester`,`faculty`,`timiing`,`joining_link`,`stream`,`day`) 
    values ('$date','$subject','$subject_code','7th Semester','$faculty','$time','$joining_link','Mechanical Engineering','$days')");

    if ($add_cse) {
        echo '<script> swal("Class Added Successfully", "success") </script>;';
    } else {
        echo '<script> swal("Something Went Wrong", "Addition failed", "error") </script>;';
    }
}






?>

<?php




if (isset($_POST['ece_btn'])) {
    $time = $_POST['time'];
    $subject = $_POST['subject'];
    $subject_code = $_POST['subject_code'];

    $date = date("d-m-Y");
    $days = $_POST['days'];

    $faculty = $_POST['faculty'];
    $joining_link = $_POST['joining_link'];

    $add_cse = mysqli_query($conn, "insert into `today_class` (`date`,`subject`,`subject_code`,`semester`,`faculty`,`timiing`,`joining_link`,`stream`,`day`) 
    values ('$date','$subject','$subject_code','7th Semester','$faculty','$time','$joining_link','Civil Engineering','$days')");

    if ($add_cse) {
        echo '<script> swal("Class Added Successfully", "success") </script>;';
    } else {
        echo '<script> swal("Something Went Wrong", "Addition failed", "error") </script>;';
    }
}






?>