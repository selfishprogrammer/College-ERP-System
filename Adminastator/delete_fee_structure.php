<?php 
include '../Connection/connection.php';
$fee_id=$_GET['fee_id'];
$delete=mysqli_query($conn,"delete from `fee_structure` where `fee_id`='$fee_id'");
if($delete){
    header("location:view_fee_structure");
}