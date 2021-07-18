<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <title> Add Syllabus</title>
</head>

<body class="bg-danger">

    <div class="container">

        <div class="shadow-sm bg-white" style="border-radius: 20px; margin-top: 140px; margin-bottom: 140px;">

            <div class="text-center py-4" style="font-size: 20px; font-family: cursive;">College ERP System</div>
            <hr>
            <div class="container">
                <button type="submit" id="first_year_btn" class=" my-1 btn btn-default form-control border"
                    style="font-family: monospace;"><B><I>First Year</I></B></button>
                <button type="submit" id="second_year_btn" class="my-1 btn btn-default form-control border"
                    style="font-family: monospace;"><B><I>Second Year</I></B></button>
                <button type="submit" id="third_year_btn" class="my-1 btn btn-default form-control border"
                    style="font-family: monospace;"><B><I>Third Year</I></B></button>
                <button type="submit" id="forth_year_btn" class="mt-1 mb-3 btn btn-default form-control border"
                    style="font-family: monospace;"><B><I>Forth Year</I></B></button>

            </div>
            <!-- First Year -->
            <form action="<?php $_SERVER['REQUEST_URI'] ?>" id="first" style="display: none;"
                enctype="multipart/form-data" class="p-4" method="post">

                <div class="form-group">
                    <label for=""><b><i>Computer Sceince Engineering</i></b></label>
                    <input type="file" style="border-radius: 0px 0px 0px 0px;" name="cse" class="form-control" id="">

                </div>
                <div class="form-group">
                    <label for=""><b><i>Electrical Engineering</i></b></label>
                    <input type="file" style="border-radius: 0px 0px 0px 0px;" name="ee" class="form-control" id="">

                </div>
                <div class="form-group">
                    <label for=""><b><i>Civil Engineering</i></b></label>
                    <input type="file" style="border-radius: 0px 0px 0px 0px;" name="ce" class="form-control" id="">

                </div>
                <div class="form-group">
                    <label for=""><b><i>Electronics and Commnucation Engineering</i></b></label>
                    <input type="file" style="border-radius: 0px 0px 0px 0px;" name="ece" class="form-control" id="">

                </div>
                <div class="form-group">
                    <label for=""><b><i>Mechanical Engineering</i></b></label>
                    <input type="file" style="border-radius: 0px 0px 0px 0px;" name="me" class="form-control" id="">

                </div>
                <div class="form-group">
                    <input type="hidden" name="first_year" value="first_year" class="form-control" id="">

                </div>

                <div class="form-group">

                    <button type="submit" name="syl_first" class="btn btn-danger form-control">Add First Year</button>

                </div>
            </form>
            <!-- First year -->
            <!-- second Year -->
            <form action="<?php $_SERVER['REQUEST_URI'] ?>" id="second" style="display: none;"
                enctype="multipart/form-data" class="p-4" method="post">

                <div class="form-group">
                    <label for=""><b><i>Computer Sceince Engineering</i></b></label>
                    <input type="file" style="border-radius: 0px 0px 0px 0px;" name="cse" class="form-control" id="">

                </div>
                <div class="form-group">
                    <label for=""><b><i>Electrical Engineering</i></b></label>
                    <input type="file" style="border-radius: 0px 0px 0px 0px;" name="ee" class="form-control" id="">

                </div>
                <div class="form-group">
                    <label for=""><b><i>Civil Engineering</i></b></label>
                    <input type="file" style="border-radius: 0px 0px 0px 0px;" name="ce" class="form-control" id="">

                </div>
                <div class="form-group">
                    <label for=""><b><i>Electronics and Commnucation Engineering</i></b></label>
                    <input type="file" style="border-radius: 0px 0px 0px 0px;" name="ece" class="form-control" id="">

                </div>
                <div class="form-group">
                    <label for=""><b><i>Mechanical Engineering</i></b></label>
                    <input type="file" style="border-radius: 0px 0px 0px 0px;" name="me" class="form-control" id="">

                </div>
                <div class="form-group">
                    <input type="hidden" name="second_year" value="second_year" class="form-control" id="">

                </div>
                <div class="form-group">

                    <button type="submit" name="syl_second" class="btn btn-danger form-control">Add Second Year</button>

                </div>
            </form>
            <!-- second year -->


            <!-- third Year -->
            <form action="<?php $_SERVER['REQUEST_URI'] ?>" id="third" style="display: none;"
                enctype="multipart/form-data" class="p-4" method="post">

                <div class="form-group">
                    <label for=""><b><i>Computer Sceince Engineering</i></b></label>
                    <input type="file" style="border-radius: 0px 0px 0px 0px;" name="cse" class="form-control" id="">

                </div>
                <div class="form-group">
                    <label for=""><b><i>Electrical Engineering</i></b></label>
                    <input type="file" style="border-radius: 0px 0px 0px 0px;" name="ee" class="form-control" id="">

                </div>
                <div class="form-group">
                    <label for=""><b><i>Civil Engineering</i></b></label>
                    <input type="file" style="border-radius: 0px 0px 0px 0px;" name="ce" class="form-control" id="">

                </div>
                <div class="form-group">
                    <label for=""><b><i>Electronics and Commnucation Engineering</i></b></label>
                    <input type="file" style="border-radius: 0px 0px 0px 0px;" name="ece" class="form-control" id="">

                </div>
                <div class="form-group">
                    <label for=""><b><i>Mechanical Engineering</i></b></label>
                    <input type="file" style="border-radius: 0px 0px 0px 0px;" name="me" class="form-control" id="">

                </div>
                <div class="form-group">
                    <input type="hidden" name="third_year" value="third_year" class="form-control" id="">

                </div>
                <div class="form-group">

                    <button type="submit" name="syl_third" class="btn btn-danger form-control">Add Third Year</button>

                </div>
            </form>
            <!-- third year -->

            <!-- forth Year -->
            <form action="<?php $_SERVER['REQUEST_URI'] ?>" id="forth" style="display: none;"
                enctype="multipart/form-data" class="p-4" method="post">

                <div class="form-group">
                    <label for=""><b><i>Computer Sceince Engineering</i></b></label>
                    <input type="file" style="border-radius: 0px 0px 0px 0px;" name="cse" class="form-control" id="">

                </div>
                <div class="form-group">
                    <label for=""><b><i>Electrical Engineering</i></b></label>
                    <input type="file" style="border-radius: 0px 0px 0px 0px;" name="ee" class="form-control" id="">

                </div>
                <div class="form-group">
                    <label for=""><b><i>Civil Engineering</i></b></label>
                    <input type="file" style="border-radius: 0px 0px 0px 0px;" name="ce" class="form-control" id="">

                </div>
                <div class="form-group">
                    <label for=""><b><i>Electronics and Commnucation Engineering</i></b></label>
                    <input type="file" style="border-radius: 0px 0px 0px 0px;" name="ece" class="form-control" id="">

                </div>
                <div class="form-group">
                    <label for=""><b><i>Mechanical Engineering</i></b></label>
                    <input type="file" style="border-radius: 0px 0px 0px 0px;" name="me" class="form-control" id="">

                </div>
                <div class="form-group">
                    <input type="hidden" name="forth_year" value="forth_year" class="form-control" id="">

                </div>
                <div class="form-group">

                    <button type="submit" name="syl_forth" class="btn btn-danger form-control">Add Forth Year</button>

                </div>
            </form>
            <!-- forth year -->


        </div>

    </div>

    <?php
    include '../Connection/connection.php';
    if (isset($_POST['syl_first'])) {

        $cse = $_FILES['cse']['name'];
        $cse_tmp = $_FILES['cse']['tmp_name'];

        $directory = "Syllabus/" . $cse;
        move_uploaded_file($cse_tmp, $directory);

        $ece = $_FILES['ece']['name'];
        $ece_tmp = $_FILES['ece']['tmp_name'];

        $directory1 = "Syllabus/" . $ece;
        move_uploaded_file($ece_tmp, $directory1);

        $me = $_FILES['me']['name'];
        $me_tmp = $_FILES['me']['tmp_name'];

        $directory5 = "Syllabus/" . $me;
        move_uploaded_file($me_tmp, $directory5);


        $ce = $_FILES['ce']['name'];
        $ce_tmp = $_FILES['ce']['tmp_name'];

        $directory2 = "Syllabus/" . $ce;
        move_uploaded_file($ce_tmp, $directory2);


        $ee = $_FILES['ee']['name'];
        $ee_tmp = $_FILES['ee']['tmp_name'];

        $directory3 = "Syllabus/" . $ee;
        move_uploaded_file($ee_tmp, $directory3);

        $sem = $_POST['first_year'];

        $insert_syll = mysqli_query($conn, "insert into `syllabus` (`cse`,`ee`,`me`,`ece`,`ce`,`year`) values ('$cse','$ee','$me','$ece','$ce','$sem')");
        if ($insert_syll) {
            echo '<b>Syllabus Inserted</b>';
        }
    }


    if (isset($_POST['syl_second'])) {

        $cse = $_FILES['cse']['name'];
        $cse_tmp = $_FILES['cse']['tmp_name'];

        $directory = "Syllabus/" . $cse;
        move_uploaded_file($cse_tmp, $directory);

        $ece = $_FILES['ece']['name'];
        $ece_tmp = $_FILES['ece']['tmp_name'];

        $directory1 = "Syllabus/" . $ece;
        move_uploaded_file($ece_tmp, $directory1);

        $me = $_FILES['me']['name'];
        $me_tmp = $_FILES['me']['tmp_name'];

        $directory5 = "Syllabus/" . $me;
        move_uploaded_file($me_tmp, $directory5);


        $ce = $_FILES['ce']['name'];
        $ce_tmp = $_FILES['ce']['tmp_name'];

        $directory2 = "Syllabus/" . $ce;
        move_uploaded_file($ce_tmp, $directory2);


        $ee = $_FILES['ee']['name'];
        $ee_tmp = $_FILES['ee']['tmp_name'];

        $directory3 = "Syllabus/" . $ee;
        move_uploaded_file($ee_tmp, $directory3);

        $sem = $_POST['second_year'];

        $insert_syll = mysqli_query($conn, "insert into `syllabus` (`cse`,`ee`,`me`,`ece`,`ce`,`year`) values ('$cse','$ee','$me','$ece','$ce','$sem')");
        if ($insert_syll) {
            echo '<b>Syllabus Inserted</b>';
        }
    }




    if (isset($_POST['syl_third'])) {

        $cse = $_FILES['cse']['name'];
        $cse_tmp = $_FILES['cse']['tmp_name'];

        $directory = "Syllabus/" . $cse;
        move_uploaded_file($cse_tmp, $directory);

        $ece = $_FILES['ece']['name'];
        $ece_tmp = $_FILES['ece']['tmp_name'];

        $directory1 = "Syllabus/" . $ece;
        move_uploaded_file($ece_tmp, $directory1);

        $me = $_FILES['me']['name'];
        $me_tmp = $_FILES['me']['tmp_name'];

        $directory5 = "Syllabus/" . $me;
        move_uploaded_file($me_tmp, $directory5);


        $ce = $_FILES['ce']['name'];
        $ce_tmp = $_FILES['ce']['tmp_name'];

        $directory2 = "Syllabus/" . $ce;
        move_uploaded_file($ce_tmp, $directory2);


        $ee = $_FILES['ee']['name'];
        $ee_tmp = $_FILES['ee']['tmp_name'];

        $directory3 = "Syllabus/" . $ee;
        move_uploaded_file($ee_tmp, $directory3);

        $sem = $_POST['third_year'];

        $insert_syll = mysqli_query($conn, "insert into `syllabus` (`cse`,`ee`,`me`,`ece`,`ce`,`year`) values ('$cse','$ee','$me','$ece','$ce','$sem')");
        if ($insert_syll) {
            echo '<b>Syllabus Inserted</b>';
        }
    }




    if (isset($_POST['syl_forth'])) {

        $cse = $_FILES['cse']['name'];
        $cse_tmp = $_FILES['cse']['tmp_name'];

        $directory = "Syllabus/" . $cse;
        move_uploaded_file($cse_tmp, $directory);

        $ece = $_FILES['ece']['name'];
        $ece_tmp = $_FILES['ece']['tmp_name'];

        $directory1 = "Syllabus/" . $ece;
        move_uploaded_file($ece_tmp, $directory1);

        $me = $_FILES['me']['name'];
        $me_tmp = $_FILES['me']['tmp_name'];

        $directory5 = "Syllabus/" . $me;
        move_uploaded_file($me_tmp, $directory5);


        $ce = $_FILES['ce']['name'];
        $ce_tmp = $_FILES['ce']['tmp_name'];

        $directory2 = "Syllabus/" . $ce;
        move_uploaded_file($ce_tmp, $directory2);


        $ee = $_FILES['ee']['name'];
        $ee_tmp = $_FILES['ee']['tmp_name'];

        $directory3 = "Syllabus/" . $ee;
        move_uploaded_file($ee_tmp, $directory3);

        $sem = $_POST['forth_year'];

        $insert_syll = mysqli_query($conn, "insert into `syllabus` (`cse`,`ee`,`me`,`ece`,`ce`,`year`) values ('$cse','$ee','$me','$ece','$ce','$sem')");
        if ($insert_syll) {
            echo '<b>Syllabus Inserted</b>';
        }
    }



    ?>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
    </script>
    <script>
    $(() => {
        $('#first_year_btn').click(() => {
            $('#first').slideToggle()
        })
        $('#second_year_btn').click(() => {
            $('#second').slideToggle()
        })
        $('#third_year_btn').click(() => {
            $('#third').slideToggle()
        })
        $('#forth_year_btn').click(() => {
            $('#forth').slideToggle()
        })
    });
    </script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>