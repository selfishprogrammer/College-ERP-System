<?php
include '../Connection/connection.php';
if (isset($_GET['status_false'])) {
    $false = $_GET['status_false'];
    $sql = mysqli_query($conn, "update `exam` set `status1`='false' where `exam_id`='$false'");
    if ($sql) {
        header("location:view_question_for_exam");
    }
} else if (isset($_GET['status_true'])) {
    $true = $_GET['status_true'];
    $sql = mysqli_query($conn, "update `exam` set `status1`='true' where `exam_id`='$true'");
    if ($sql) {
        header("location:view_question_for_exam");
    }
}