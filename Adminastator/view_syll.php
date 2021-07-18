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

    <title> Add Fee Structure</title>
</head>

<body class="bg-info">

    <div class="container">

        <div class="shadow-sm bg-white" style="margin-top: 80px; border-radius: 20px;">


            <div class="card-header text-center bg-primary"
                style="border-radius: 20px 20px 0px 0px; font-size: 25px; font-family: math;">Syllabus Of Streams and
                Semesters</div>



            <div class="container my-4">
                <div class="d-flex justify-content-center">
                    <div class="row">

                        <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post">

                            <div class="form-group mx-2">
                                <button type="submit" class="btn btn-outline-info form-control " name="first_year"
                                    style="font-family: monospace;">First Year Syllabus</button>

                            </div>

                        </form>
                        <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post">

                            <div class="form-group mx-2">
                                <button type="submit" class="btn btn-outline-primary form-control " name="second_year"
                                    style="font-family: monospace;">Second Year Syllabus</button>

                            </div>

                        </form>
                        <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post">

                            <div class="form-group mx-2">
                                <button type="submit" class="btn btn-outline-warning form-control " name="third_year"
                                    style="font-family: monospace;">Third Year Syllabus</button>

                            </div>

                        </form>
                        <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post">

                            <div class="form-group mx-2">
                                <button type="submit" class="btn btn-outline-danger form-control " name="forth_year"
                                    style="font-family: monospace;">Forth Year Syllabus</button>

                            </div>

                        </form>

                    </div>

                </div>

            </div>


            <!-- For First year -->

            <?php

            if (isset($_POST['first_year'])) {
                include '../Connection/connection.php';


                $row_first_data = mysqli_fetch_assoc(mysqli_query($conn, "select * from `syllabus` where `year`='first_year'"));
            ?>

            <div class="container">
                <div class="shadow-sm my-4" style="overflow-y: auto;">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" style="font-family: monospace;"><b>Syllabus Of Year</b></th>
                                <th scope="col" style="font-family: monospace;"><b>CSE</b></th>
                                <th scope="col" style="font-family: monospace;"><b> ME</b></th>
                                <th scope="col" style="font-family: monospace;"><b> CE</b></th>
                                <th scope="col" style="font-family: monospace;"><b> EE</b></th>
                                <th scope="col" style="font-family: monospace;"><b> ECE</b></th>





                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th style="font-family: monospace;"><?php echo $row_first_data['year'] ?></th>
                                <th style="font-family: monospace;"><a target="_blank"
                                        href="Syllabus/<?php echo $row_first_data['cse'] ?>"
                                        class="btn btn-info form-control" style="font-family: monospace;">CSE</a></th>
                                <th style="font-family: monospace;"><a target="_blank"
                                        href="Syllabus/<?php echo $row_first_data['me'] ?>"
                                        class="btn btn-primary form-control" style="font-family: monospace;">ME</a></th>
                                <th style="font-family: monospace;"><a target="_blank"
                                        href="Syllabus/<?php echo $row_first_data['ce'] ?>"
                                        class="btn btn-secondary form-control" style="font-family: monospace;">CE</a>
                                </th>
                                <th style="font-family: monospace;"><a target="_blank"
                                        href="Syllabus/<?php echo $row_first_data['ee'] ?>"
                                        class="btn btn-danger form-control" style="font-family: monospace;">EE</a></th>
                                <th style="font-family: monospace;"><a target="_blank"
                                        href="Syllabus/<?php echo $row_first_data['ece'] ?>"
                                        class="btn btn-warning form-control" style="font-family: monospace;">ECE</a>
                                </th>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <?php


            }




?>
    <!-- For First year -->
    <!-- ?Second year -->

    <?php

if (isset($_POST['second_year'])) {
    include '../Connection/connection.php';


    $row_first_data = mysqli_fetch_assoc(mysqli_query($conn, "select * from `syllabus` where `year`='second_year'"));
?>

    <div class="container">
        <div class="shadow-sm my-4" style="overflow-y: auto;">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col" style="font-family: monospace;"><b>Syllabus Of Year</b></th>
                        <th scope="col" style="font-family: monospace;"><b>CSE</b></th>
                        <th scope="col" style="font-family: monospace;"><b> ME</b></th>
                        <th scope="col" style="font-family: monospace;"><b> CE</b></th>
                        <th scope="col" style="font-family: monospace;"><b> EE</b></th>
                        <th scope="col" style="font-family: monospace;"><b> ECE</b></th>





                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th style="font-family: monospace;"><?php echo $row_first_data['year'] ?></th>
                        <th style="font-family: monospace;"><a target="_blank"
                                href="Syllabus/<?php echo $row_first_data['cse'] ?>" class="btn btn-info form-control"
                                style="font-family: monospace;">CSE</a></th>
                        <th style="font-family: monospace;"><a target="_blank"
                                href="Syllabus/<?php echo $row_first_data['me'] ?>" class="btn btn-primary form-control"
                                style="font-family: monospace;">ME</a></th>
                        <th style="font-family: monospace;"><a target="_blank"
                                href="Syllabus/<?php echo $row_first_data['ce'] ?>"
                                class="btn btn-secondary form-control" style="font-family: monospace;">CE</a>
                        </th>
                        <th style="font-family: monospace;"><a target="_blank"
                                href="Syllabus/<?php echo $row_first_data['ee'] ?>" class="btn btn-danger form-control"
                                style="font-family: monospace;">EE</a></th>
                        <th style="font-family: monospace;"><a target="_blank"
                                href="Syllabus/<?php echo $row_first_data['ece'] ?>"
                                class="btn btn-warning form-control" style="font-family: monospace;">ECE</a>
                        </th>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>
    </div>


    <?php


}




?>
    <!-- Second Year -->
    <!-- ?third year -->

    <?php

if (isset($_POST['third_year'])) {
    include '../Connection/connection.php';


    $row_first_data = mysqli_fetch_assoc(mysqli_query($conn, "select * from `syllabus` where `year`='third_year'"));
?>

    <div class="container">
        <div class="shadow-sm my-4" style="overflow-y: auto;">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col" style="font-family: monospace;"><b>Syllabus Of Year</b></th>
                        <th scope="col" style="font-family: monospace;"><b>CSE</b></th>
                        <th scope="col" style="font-family: monospace;"><b> ME</b></th>
                        <th scope="col" style="font-family: monospace;"><b> CE</b></th>
                        <th scope="col" style="font-family: monospace;"><b> EE</b></th>
                        <th scope="col" style="font-family: monospace;"><b> ECE</b></th>





                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th style="font-family: monospace;"><?php echo $row_first_data['year'] ?></th>
                        <th style="font-family: monospace;"><a target="_blank"
                                href="Syllabus/<?php echo $row_first_data['cse'] ?>" class="btn btn-info form-control"
                                style="font-family: monospace;">CSE</a></th>
                        <th style="font-family: monospace;"><a target="_blank"
                                href="Syllabus/<?php echo $row_first_data['me'] ?>" class="btn btn-primary form-control"
                                style="font-family: monospace;">ME</a></th>
                        <th style="font-family: monospace;"><a target="_blank"
                                href="Syllabus/<?php echo $row_first_data['ce'] ?>"
                                class="btn btn-secondary form-control" style="font-family: monospace;">CE</a>
                        </th>
                        <th style="font-family: monospace;"><a target="_blank"
                                href="Syllabus/<?php echo $row_first_data['ee'] ?>" class="btn btn-danger form-control"
                                style="font-family: monospace;">EE</a></th>
                        <th style="font-family: monospace;"><a target="_blank"
                                href="Syllabus/<?php echo $row_first_data['ece'] ?>"
                                class="btn btn-warning form-control" style="font-family: monospace;">ECE</a>
                        </th>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>
    </div>


    <?php


}




?>
    <!-- Second Year -->
    <!-- forth_year year -->

    <?php

if (isset($_POST['forth_year'])) {
    include '../Connection/connection.php';


    $row_first_data = mysqli_fetch_assoc(mysqli_query($conn, "select * from `syllabus` where `year`='forth_year'"));
?>

    <div class="container">
        <div class="shadow-sm my-4" style="overflow-y: auto;">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col" style="font-family: monospace;"><b>Syllabus Of Year</b></th>
                        <th scope="col" style="font-family: monospace;"><b>CSE</b></th>
                        <th scope="col" style="font-family: monospace;"><b> ME</b></th>
                        <th scope="col" style="font-family: monospace;"><b> CE</b></th>
                        <th scope="col" style="font-family: monospace;"><b> EE</b></th>
                        <th scope="col" style="font-family: monospace;"><b> ECE</b></th>





                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th style="font-family: monospace;"><?php echo $row_first_data['year'] ?></th>
                        <th style="font-family: monospace;"><a target="_blank"
                                href="Syllabus/<?php echo $row_first_data['cse'] ?>" class="btn btn-info form-control"
                                style="font-family: monospace;">CSE</a></th>
                        <th style="font-family: monospace;"><a target="_blank"
                                href="Syllabus/<?php echo $row_first_data['me'] ?>" class="btn btn-primary form-control"
                                style="font-family: monospace;">ME</a></th>
                        <th style="font-family: monospace;"><a target="_blank"
                                href="Syllabus/<?php echo $row_first_data['ce'] ?>"
                                class="btn btn-secondary form-control" style="font-family: monospace;">CE</a>
                        </th>
                        <th style="font-family: monospace;"><a target="_blank"
                                href="Syllabus/<?php echo $row_first_data['ee'] ?>" class="btn btn-danger form-control"
                                style="font-family: monospace;">EE</a></th>
                        <th style="font-family: monospace;"><a target="_blank"
                                href="Syllabus/<?php echo $row_first_data['ece'] ?>"
                                class="btn btn-warning form-control" style="font-family: monospace;">ECE</a>
                        </th>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>
    </div>


    <?php


}




?>
    <!-- forth_year Year -->


    <div class="footer bg-primary"></div>
    </div>


    </div>


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>