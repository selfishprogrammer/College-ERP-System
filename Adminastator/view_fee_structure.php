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

    <title>Students Fee Structure</title>
</head>

<body class="bg-info">

    <div class="container">

        <div class="shadow-sm bg-white border" style="border-radius: 20px; margin-top: 80px;">

            <div class="card-header bg-warning" style="border-radius: 20px 20px 0px 0px;"></div>

            <div class="col-md-6 offset-md-3">
                <?php
                include '../Connection/connection.php';
                $row = mysqli_fetch_assoc(mysqli_query($conn, "select * from `fee_structure`"));

                ?>
                <div class="shadow-sm border my-4" style="border-radius: 10px;">

                    <div class="text-center py-3" style="font-size: 25px; font-family: monospace;">

                        Surendra Institute of Engineering & Management

                    </div>
                    <hr>

                    <div class="d-flex justify-content-center">

                        <a href="./Fee Structure/<?php echo $row['fee_structure'] ?>" type="submit"
                            class="btn btn-outline-success my-3" style="font-family: monospace;">Download
                            Fee Structure</a>
                    </div>

                    <div class="d-flex justify-content-between">

                        <a href="update_fee_structure?fee_id=<?php echo $row['fee_id'] ?>" type="submit"
                            class="btn btn-outline-primary my-3 mx-1" style="font-family: monospace;">Update
                            Fee Structure</a>
                        <a href="delete_fee_structure?fee_id=<?php echo $row['fee_id'] ?>" type="submit"
                            class="btn btn-outline-danger my-3 mx-1" style="font-family: monospace;">Delete
                            Fee Structure</a>


                    </div>
                    <div class="d-flex justify-content-center">

                        <a href="./Fee Structure/<?php echo $row['fee_structure'] ?>" target="_blank" type="submit"
                            class="btn btn-outline-warning my-3" style="font-family: monospace;">View
                            Fee Structure</a>

                    </div>

                </div>

            </div>


            <div class="card-header bg-warning" style="border-radius: 0px 0px 20px 20px;"></div>

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