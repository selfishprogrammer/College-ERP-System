<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Akaya+Kanadaka&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>College ERP System</title>
</head>

<body>

    <?php

    session_start();
    if (isset($_SESSION['loggedin']) && $_SESSION['position'] = 'administator') {


        include '../nav_for_all.php'; ?>
    <!-- Student -->
    <div class="card-header shadow-sm bg-success text-center my-4" style="font-size: 30px; font-family: monospace;">
        Student Portion
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">

                <?php include 'students_category.php' ?>

            </div>
            <div class="col-md-8">
                <div class="row">
                    <?php include 'view_students_details.php'  ?>
                </div>
            </div>


            <div class="col-md-2">

                <div class="shadow-lg bg-white my-3" style="width: 100%;  border-radius: 10px;">

                    <div class="d-flex justify-content-center">
                        <div class=" mx-4 my-2" style="font-size: 30px; color:chartreuse; font-family: cursive;"><i
                                class="fa fa-cutlery" aria-hidden="true"></i>
                        </div>

                        <div class="mx-4 my-3" style="font-size: 25px; font-family: math;">80</div>

                    </div>
                    <div class="text-center pt-1 pb-1" style="font-size: 18px; font-family: math;">CANTEEN INFORMATION
                    </div>
                    <button type="submit" style="border-radius:0px 0px 0px 0px;"
                        class="btn btn-default form-control border pt-1">Add Details &nbsp;<i class="fa fa-arrow-right"
                            aria-hidden="true"></i>
                    </button>
                    <button type="submit" class="btn btn-default form-control border pt-1"
                        style="border-radius:0px 0px 10px 10px;">View Details&nbsp;<i class="fa fa-arrow-right"
                            aria-hidden="true"></i>

                    </button>
                </div>



                <div class="shadow-lg bg-white my-3" style="width: 100%;  border-radius: 10px;">

                    <div class="d-flex justify-content-center">
                        <div class=" mx-4 my-2" style="font-size: 30px; color:chartreuse; font-family: cursive;"><i
                                class="fa fa-bed" aria-hidden="true"></i>

                        </div>

                        <div class="mx-4 my-3" style="font-size: 25px; font-family: math;">80</div>

                    </div>
                    <div class="text-center pt-1 pb-1" style="font-size: 18px; font-family: math;">HOSTEL INFORMATION
                    </div>
                    <button type="submit" style="border-radius:0px 0px 0px 0px;"
                        class="btn btn-default form-control border pt-1">Add Details &nbsp;<i class="fa fa-arrow-right"
                            aria-hidden="true"></i>
                    </button>
                    <button type="submit" class="btn btn-default form-control border pt-1"
                        style="border-radius:0px 0px 10px 10px;">View Details&nbsp;<i class="fa fa-arrow-right"
                            aria-hidden="true"></i>
                    </button>
                </div>

            </div>

            </form>

        </div>

    </div>
    <!-- Student -->

    <div class="card-header shadow-sm bg-success text-center my-4" style="font-size: 30px; font-family: monospace;">
        Faculty Portion
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">

                <?php include 'faculty_category.php' ?>

            </div>
            <div class="col-md-10">
                <div class="row">
                    <?php include 'view_faculty_details.php'  ?>
                </div>
            </div>







            <!-- Student -->



            <!-- Optional JavaScript; choose one of the two! -->

            <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
                crossorigin="anonymous">
            </script>


            <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->



            <style>
            /* Style the search box */


            /* Style the navigation menu */
            #myMenu {
                list-style-type: none;
                padding: 0;
                margin: 0;
                background-color: black;
            }

            /* Style the navigation links */
            #myMenu li a {
                padding: 12px;
                text-decoration: none;
                color: white;
                display: block
            }

            #myMenu li a:hover {
                background-color: #035980;
            }
            </style>
</body>

</html>

<?php } else {
        header("location:./index");
    } ?>