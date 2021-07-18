<div class="card-header border shadow-sm text-center bg-white mx-1 my-2" id="profile"
    style="border-radius:20px 20px 0px 0px" style="cursor:default;">
    <i class="fa fa-arrow-down" aria-hidden="true"></i>&nbsp; WELCOME <span style="color:red">
        <?php echo $_SESSION['name'] ?>&nbsp;</span><i class="fa fa-arrow-down" aria-hidden="true"></i>

</div>

<div class="shadow-sm border mb-2" id="profile_body" style="border-radius: 20px; width:100%;display: none; ">
    <?php


    $name = $_SESSION['name'];
    $username = $_SESSION['username'];

    $profile = mysqli_fetch_assoc(mysqli_query($conn, "select * from `login` where `username`='$username'"));
    $father_name = $profile['fname'];
    $email = $profile['email'];

    $phone = $profile['phone'];

    $pimg = $profile['pimg'];
    $qualification = $profile['qualification'];
    $dept = $profile['dept'];


    ?>
    <div class="card-header text-center bg-default" style="border-radius: 20px 20px 0px 0px;">PROFILE</div>
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
            <div class="mx-1" style="font-size: 20px; font-family: math;">Id No </div>
            <div class="mx-1" style="font-size: 20px; font-family: math;">: </div>
            <div class="mx-1" style="font-size: 20px; font-family: math;"><?php echo $username  ?></div>


        </div>
    </div>

    <div class="shadow-sm border m-2  bg-default" style="border-radius: 5px;">
        <div class="d-flex justify-content-between m-3">
            <div class="mx-1" style="font-size: 20px; font-family: math;">Qualificition </div>
            <div class="mx-1" style="font-size: 20px; font-family: math;">: </div>
            <div class="mx-1" style="font-size: 20px; font-family: math;"><?php echo $qualification  ?></div>


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
            <div class="mx-1" style="font-size: 20px; font-family: math;">Department </div>
            <div class="mx-1" style="font-size: 20px; font-family: math;">: </div>
            <div class="mx-1" style="font-size: 20px; font-family: math;"><?php echo $dept  ?></div>


        </div>
    </div>

    <div class="d-flex justify-content-center">
        <a href="../update_profile?user_id=<?php echo $_SESSION['user_id'] ?>&position=<?php echo $_SESSION['position'] ?>"
            type="submit" class="form-control btn btn-outline-primary mb-3 " style="width:10rem; border-radius: 5px;">
            Update Profile
        </a>
    </div>
</div>







<script>
$(() => {
    $('#profile').click(() => {
        $('#profile_body').slideToggle("slow");
    })
});
</script>