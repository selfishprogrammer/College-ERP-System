<?php
include '../Connection/connection.php';
$exam_name = $_GET['exam_name'];
$subject = $_GET['subject'];
$roll_no = $_GET['roll_no'];

$sql = mysqli_query($conn, "update `exam_submission` set `status`='checked' where `exam_id`='$exam_name' and `subject`='$subject' and `roll_no`='$roll_no'");

if ($sql) {

    header("location:exam_submission_details?exam_name=$exam_name&subject=$subject&roll_no=$roll_no");
}