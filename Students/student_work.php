<div class="row">
    <div class="shadow-sm border my-2 mx-3 bg-white " style="width:100%; border-radius:20px; height:163px;">
        <div class="d-flex justify-content-between ">

            <div class="mx-4" style="font-size:40px; color:red; font-family: monospace;"><i class="fa fa-user"
                    aria-hidden="true"></i></div>
            <div class="mx-4 py-4" style="font-size: 20px; color:red; font-family: monospace;">
                <?php echo $_SESSION['name'] ?></div>



        </div>
        <div class="text-center pt-1 pb-3" style="font-size: 18px; font-family:monospace;">Your Profile </div>
        <a href="profile_2" type="submit" class="btn btn-default border form-control"
            style="border-radius: 0px 0px 20px 20px;">Go
            Check
            &nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i>
        </a>
    </div>
    <div class="shadow-sm border my-2 mx-3 bg-white " style="width:100%; border-radius:20px; height:163px;">
        <div class="d-flex justify-content-between ">

            <div class="mx-4" style="font-size:40px; color:black; font-family: monospace;"><i class="fa fa-book"
                    aria-hidden="true"></i></div>
            <div class="mx-4 py-4" style="font-size: 20px; color:black; font-family: monospace;">40</div>



        </div>
        <div class="text-center pt-1 pb-3" style="font-size: 18px; font-family:monospace;">Your Attendance </div>
        <a href="view_attendance" type="submit" class="btn btn-default border form-control"
            style="border-radius: 0px 0px 20px 20px;">Go
            Check
            &nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i>
        </a>
    </div>

    <div class="shadow-sm border my-2 mx-3 bg-white " style="width:100%; border-radius:20px; height:163px;">
        <div class="d-flex justify-content-between ">

            <div class="mx-4" style="font-size:40px; color:black; font-family: monospace;"><i class="fa fa-user"
                    aria-hidden="true"></i></div>
            <div class="mx-4 py-4" style="font-size: 20px; color:black; font-family: monospace;">52</div>



        </div>
        <div class="text-center pt-1 pb-3" style="font-size: 18px; font-family:monospace;">Your Homework </div>
        <a href="" type="submit" class="btn btn-default border form-control"
            style="border-radius: 0px 0px 20px 20px;">Go
            Check
            &nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i>
        </a>
    </div>

    <div class="shadow-sm border my-2 mx-3 bg-white " style="width:100%; border-radius:20px; height:163px;">
        <div class="d-flex justify-content-between ">

            <div class="mx-4" style="font-size:40px; color:black; font-family: monospace;"><i class="fa fa-user"
                    aria-hidden="true"></i></div>
            <div class="mx-4 py-4" style="font-size: 20px; color:black; font-family: monospace;">45</div>



        </div>
        <div class="text-center pt-1 pb-3" style="font-size: 18px; font-family:monospace;">Your Notice </div>
        <a href="notice" type="submit" class="btn btn-default border form-control"
            style="border-radius: 0px 0px 20px 20px;">Go
            Check
            &nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i>
        </a>
    </div>


    <div class="shadow-sm border my-2 mx-3 bg-white " style="width:100%; border-radius:20px; height:163px;">
        <div class="d-flex justify-content-between ">

            <div class="mx-4" style="font-size:40px; color:black; font-family: monospace;"><i class="fa fa-user"
                    aria-hidden="true"></i></div>
            <div class="mx-4 py-4" style="font-size: 20px; color:black; font-family: monospace;">5</div>



        </div>
        <div class="text-center pt-1 pb-3" style="font-size: 18px; font-family:monospace;">Your Classwss For Today
        </div>
        <a data-toggle="modal" data-target="#class" type="submit" class="btn btn-default border form-control"
            style="border-radius: 0px 0px 20px 20px;">Go
            Check
            &nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i>
        </a>
    </div>

</div>

<?php include 'todays_class.php'; ?>