<div class="card-header shadow-sm bg-white bg-white text-center mx-1 my-1 border" id="cat_body"
    style="cursor:alias; font-family: monospace; border-radius: 20px 20px 0px 0px"> <i class=" fa fa-arrow-down"
        aria-hidden="true"></i>&nbsp; STUDENT CATEGORY&nbsp;<i class="fa fa-arrow-down" aria-hidden="true"></i>
</div>
<div id="cat" class="shadow-lg bg-dark border mx-1" style="display: none; background-color:white ;">
    <div class="mx-2">
        <a href="profile_2" class="shadow-sm bg-white border my-2 btn btn-default form-control px-2" style="font-family: monospace; border-radius: 
    10px;  ">
            Profile->

        </a>
        <a href="view_attendance" class="shadow-sm bg-white border my-2 btn btn-default form-control px-2" style="font-family: monospace; border-radius: 
    10px;  ">
            Attendance->

        </a>
        <a href="homework_of_student" class="shadow-sm bg-white border my-2 btn btn-default form-control px-2" style="font-family: monospace; border-radius: 
    10px;  ">
            Homework->

        </a>

        <a class="shadow-sm bg-white border my-2 btn btn-default form-control px-2" data-toggle="modal"
            data-target="#class" style="font-family: monospace; border-radius: 
    10px;  ">
            Today's Class->

        </a>
        <a href="result_of_student" class="shadow-sm bg-white border my-2 btn btn-default form-control px-2" style="font-family: monospace; border-radius: 
    10px;  ">
            Result->

        </a>
        <a href="online_exam" class="shadow-sm bg-white border my-2 btn btn-default form-control px-2" style="font-family: monospace; border-radius: 
    10px;  ">
            Online Exam->

        </a>

        <a href="fee_status" class="shadow-sm bg-white border my-2 btn btn-default form-control px-2" style="font-family: monospace; border-radius: 
    10px;  ">
            Fee Details->

        </a>
        <a href="notice" class="shadow-sm bg-white border my-2 btn btn-default form-control px-2" style="font-family: monospace; border-radius: 
    10px;  ">
            Notice ->

        </a>

        <a href="../logout" class="shadow-sm bg-white border my-2 btn btn-default form-control px-2" style="font-family: monospace; border-radius: 
    10px;  ">
            Logout->

        </a>
    </div>
</div>
<?php include 'todays_class.php'; ?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script>
$(() => {

    $('#cat_body').click(() => {

        $('#cat').slideToggle("slow")

    })

})
</script>