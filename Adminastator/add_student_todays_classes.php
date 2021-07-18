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

    <title> Add Class Details</title>
</head>

<body>
    <?php include '../Connection/connection.php' ?>
    <div class="container">

        <!-- CLICKING PORTION -->
        <div class="form-group my-2" style="font-family: monospace;">
            <button type="button" id="first_year" class="form-control btn btn-info"><i><b>ADD FIRST YEAR
                        CLASS</b></i></button>
        </div>
        <div class="form-group my-2" style="font-family: monospace;">
            <button type="button" id="second_year" class="form-control btn btn-warning"><i><b>ADD SECOND YEAR
                        CLASS</b></i></button>
        </div>
        <div class="form-group my-2" style="font-family: monospace;">
            <button type="button" id="third_year" class="form-control btn btn-primary"><i><b>ADD THIRD YEAR
                        CLASS</b></i></button>
        </div>
        <div class="form-group my-2" style="font-family: monospace;">
            <button type="button" id="forth_year" class="form-control btn btn-success"><i><b>ADD FORTH YEAR
                        CLASS</b></i></button>
        </div>
        <!-- CLICKING PORTION -->
        <!-- BODY PORTION -->

        <div id="first_year_body" style="display: none;">

            <?php include './first_year.php' ?>
        </div>
        <!-- BODY PORTION -->







        <!-- BODY PORTION -->

        <div id="second_year_body" style="display: none;">
            <?php include './second_year.php' ?>


        </div>
        <!-- BODY PORTION -->








        <!-- BODY PORTION -->

        <div id="third_year_body" style="display: none;">
            <?php include './third_year.php' ?>


        </div>


















        <!--4th BODY PORTION -->

        <div id="forth_year_body" style="display: none;">
            <?php include './forth_year.php' ?>


        </div>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
    </script>
    <script>
    $(() => {
        $('#first_year').click(() => {
            $('#first_year_body').slideToggle()
        })
        $('#second_year').click(() => {
            $('#second_year_body').slideToggle()
        })
        $('#third_year').click(() => {
            $('#third_year_body').slideToggle()
        })
        $('#forth_year').click(() => {
            $('#forth_year_body').slideToggle()
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