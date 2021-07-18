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

    <title>View Notice</title>
</head>

<body class="bg-info">

    <div class="container">
        <div class="shadow-sm bg-white" style="margin-top: 20px; border-radius: 20px;">

            <div class="text-center py-4" style="font-size:20px; font-family: cursive;"><b><i>Notice Of Students</i></b>
            </div>

        </div>


        <div class="col-md-6 offset-md-3">
            <?php
            include '../Connection/connection.php';
            $notice_for = "Faculty";
            $date = date("Y/m/d");
            $datest1 = date('Y/m/d', mktime(0, 0, 0, date("m"), (date("d") - 1), date(("Y"))));


            $datest2 = date('Y/m/d', mktime(0, 0, 0, date("m"), (date("d") - 2), date(("Y"))));
            $datest3 = date('Y/m/d', mktime(0, 0, 0, date("m"), (date("d") - 3), date(("Y"))));
            $datest4 = date('Y/m/d', mktime(0, 0, 0, date("m"), (date("d") - 4), date(("Y"))));

            $datest5 = date('Y/m/d', mktime(0, 0, 0, date("m"), (date("d") - 5), date(("Y"))));

            $datest6 = date('Y/m/d', mktime(0, 0, 0, date("m"), (date("d") - 6), date(("Y"))));

            $datest7 = date('Y/m/d', mktime(0, 0, 0, date("m"), (date("d") - 7), date(("Y"))));

            $view_notice = mysqli_query($conn, "select * from `notice` where `notice_for`='$notice_for'");
            while ($row = mysqli_fetch_assoc($view_notice)) {



                if ($row['date_of_notice'] == $date || $row['date_of_notice'] == $datest1 || $row['date_of_notice'] == $datest2 || $row['date_of_notice'] == $datest3 || $row['date_of_notice'] == $datest4 || $row['date_of_notice'] == $datest5 || $row['date_of_notice'] == $datest6 || $row['date_of_notice'] == $datest7) {
            ?>

            <div class="shadow-sm bg-white my-2" style="border-radius: 10px;">
                <div class="mx-2 pt-2" style="font-size: 10px; font-family: sans-serif; color:red;"><i><b>New</b></i>
                </div>
                <div class="text-center py-3" style="font-size: 15px; font-family: monospace;">
                    <b><i><?php echo $row['title_of_notice'] ?></i></b>
                </div>
                <a href="./Notice Student/<?php echo $row['notice_file'] ?>" target="_blank" type="submit"
                    class="btn btn-default form-control border"
                    style="border-radius:0px 0px 10px 10px; font-family: monospace;"><b><i>View Notice
                            ---></i></b></a>

            </div>


            <?php
                } else {



                ?>

            <div class="shadow-sm bg-white my-4" style="border-radius: 10px;">

                <div class="text-center py-3" style="font-size: 15px; font-family: monospace;">
                    <b><i><?php echo $row['title_of_notice'] ?></i></b>
                </div>
                <a href="./Notice Student/<?php echo $row['notice_file'] ?>" target="_blank" type="submit"
                    class="btn btn-default form-control border"
                    style="border-radius:0px 0px 10px 10px; font-family: monospace;"><b><i>View Notice
                            ---></i></b></a>

            </div>

            <?php
                }
            }

            ?>

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