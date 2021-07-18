<div class="card-header text-center bg-primary my-2" id="head1" style="font-size: 20px; font-family: math;"><b><i><i
                class="fa fa-arrow-down" aria-hidden="true"></i>&nbsp;STUDENTS DETAILS&nbsp;<i class="fa fa-arrow-down"
                aria-hidden="true"></i> </i></b></div>


<div class="shadow-sm border bg-primary" id="body1" style="width:100%; border-radius:20px;  display:none;">
    <div class="shadow-sm mx-2 my-2 bg-white" style="border-radius:20px;">
        <div class="text-center py-4 pb-1" style="font-size: 18px; font-family:math">Add New Student Details</div>
        <a href="add_new_student_details" type="submit" class="btn btn-info form-control" style="border-radius: 0px 0px 20px 20px;">Go Add
            &nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i></a>
    </div>
    <div class="shadow-sm mx-2 my-2 bg-white" style="border-radius:20px;">
        <div class="text-center py-4 pb-1" style="font-size: 18px; font-family:math">View Student Details</div>
        <button type="submit" class="btn btn-primary form-control" style="border-radius: 0px 0px 20px 20px;">Go Add
            &nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i>
    </div>
    <div class="shadow-sm mx-2 my-2 bg-white" style="border-radius:20px;">
        <div class="text-center py-4 pb-1" style="font-size: 18px; font-family:math">View Student Result</div>
        <button type="submit" class="btn btn-danger form-control" style="border-radius: 0px 0px 20px 20px;">Go Add
            &nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i>
    </div>
    <div class="shadow-sm mx-2 my-2 bg-white" style="border-radius:20px;">
        <div class="text-center py-4 pb-1" style="font-size: 18px; font-family:math">View Student Attendance</div>
        <button type="submit" class="btn btn-success form-control" style="border-radius: 0px 0px 20px 20px;">Go Add
            &nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i>
    </div><div class="shadow-sm mx-2 my-2 bg-white" style="border-radius:20px;">
        <div class="text-center py-4 pb-1" style="font-size: 18px; font-family:math">View Student Library Queries</div>
        <button type="submit" class="btn btn-warning form-control" style="border-radius: 0px 0px 20px 20px;">Go Add
            &nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i>
    </div>
    <div class="shadow-sm mx-2 my-2 bg-white" style="border-radius:20px;">
        <div class="text-center py-4 pb-1" style="font-size: 18px; font-family:math">Add New Student Exam Questions</div>
        <button type="submit" class="btn btn-secondary form-control" style="border-radius: 0px 0px 20px 20px;">Go Add
            &nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i>
    </div>


</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script>
$(() => {
    $('#head1').click(() => {
        $('#body1').slideToggle("slow")
    })
});
</script>