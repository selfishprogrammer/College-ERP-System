<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['position'] == "Faculty") {

    include '../Connection/connection.php';
?>
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
    <title>Profile</title>
</head>

<body class="bg-white">
    <?php include '../nav_for_all.php' ?>

    <div class="container">
        s
        <div class="col-md-12 my-2">


            <button id="notice_head" class=" text-center bg-white  border btn btn-default form-control"
                style="border-radius: 12px; font-size: 20px; font-family: cursive;"><i class="fa fa-arrow-down"
                    aria-hidden="true"></i>
                &nbsp; Notice &nbsp; <i class="fa fa-arrow-down" aria-hidden="true"></i>

            </button>
        </div>
        <div class="col-md-6 offset-md-3" id="notice_body" style="display:none">
            <?php


                $notice_query = mysqli_query($conn, "select * from `notice` where `notice_for`='Faculty' order by `date_of_notice` desc");
                $date = date("Y/m/d");
                $datest1 = date('Y/m/d', mktime(0, 0, 0, date("m"), (date("d") - 1), date(("Y"))));


                $datest2 = date('Y/m/d', mktime(0, 0, 0, date("m"), (date("d") - 2), date(("Y"))));
                $datest3 = date('Y/m/d', mktime(0, 0, 0, date("m"), (date("d") - 3), date(("Y"))));
                $datest4 = date('Y/m/d', mktime(0, 0, 0, date("m"), (date("d") - 4), date(("Y"))));

                $datest5 = date('Y/m/d', mktime(0, 0, 0, date("m"), (date("d") - 5), date(("Y"))));

                $datest6 = date('Y/m/d', mktime(0, 0, 0, date("m"), (date("d") - 6), date(("Y"))));

                $datest7 = date('Y/m/d', mktime(0, 0, 0, date("m"), (date("d") - 7), date(("Y"))));

                while ($notice = mysqli_fetch_assoc($notice_query)) {

                ?>







            <?php
                    if ($notice['date_of_notice'] == $date || $notice['date_of_notice'] == $datest1 || $notice['date_of_notice'] == $datest2 || $notice['date_of_notice'] == $datest3 || $notice['date_of_notice'] == $datest4 || $notice['date_of_notice'] == $datest5 || $notice['date_of_notice'] == $datest6 || $notice['date_of_notice'] == $datest7) {
                    ?>

            <div class="shadow-sm border my-2" style="border-radius: 10px; background-color: #c9afa72e;">
                <div class="text-center py-2" style="font-size:20px; font-family:monospace">
                    <?php echo $notice['title_of_notice'] ?></div>
                <div class="d-flex justify-content-between py-1 pr-3"
                    style="font-size:20px; color:yellowgreen; font-family:monospace">
                    <b class="pl-2" style="color:red;">New</b>&nbsp;<?php echo $notice['date_of_notice'] ?>
                </div>

                <a target="_blank" href="../Adminastator/Notice Student/<?php echo $notice['notice_file']  ?>"
                    class="btn btn-default border form-control" style="border-radius: 0px 0px 10px 10px;">View
                    Notice -></a>

            </div>




            <?php } else {




                    ?>

            <div class="shadow-sm border my-2" style="border-radius: 10px; background-color: #c9afa72e;">
                <div class="text-center py-2" style="font-size:20px; font-family:monospace">
                    <?php echo $notice['title_of_notice'] ?></div>
                <div class="d-flex justify-content-end py-1 pr-3"
                    style="font-size:20px; color:yellowgreen; font-family:monospace">
                    <?php echo $notice['date_of_notice'] ?>
                </div>

                <a target="_blank" href="../Adminastator/Notice Student/<?php echo $notice['notice_file']  ?>"
                    class="btn btn-default border form-control" style="border-radius: 0px 0px 10px 10px;">View
                    Notice -></a>

            </div>

            <?php
                    }
                } ?>


        </div>
    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>


    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script>
    $(() => {

        $('#notice_head').click(() => {

            $('#notice_body').slideToggle("slow")

        })

    })
    </script>
</body>

</html>

<?php } else {
    header("location:../");
} ?>