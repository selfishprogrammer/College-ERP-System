<?php
include '../Connection/connection.php';
$roll_no = $_POST['roll_no'];

$present = "P";
echo $day = date("F");
$date = date("d/m/Y");


$add_attendance = mysqli_query($conn, "insert into `atendance` (`roll_no`,`month`,`day`,`todays_attendance`) values ('$roll_no','$day','$date','$present')");