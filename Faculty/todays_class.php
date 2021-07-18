<div class="modal fade" id="class" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" style="Width:100%">
        <div class="modal-content">
            <div class="card-header bg-info">

            </div>
            <div class="modal-body">



                <div class="container-fluid  py-4">
                    <div style="overflow-x: auto;">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="font-family:monospace" scope="col"><b>Today's Date</b></th>
                                    <th style="font-family:monospace" scope="col"><b>Day</b></th>

                                    <th style="font-family:monospace" scope="col"><b>Subject</b></th>
                                    <th style="font-family:monospace" scope="col"><b>Subject Code</b></th>
                                    <th style="font-family:monospace" scope="col"><b>Semester</b></th>
                                    <th style="font-family:monospace" scope="col"><b>Timing</b></th>
                                    <th style="font-family:monospace" scope="col"><b>Joining Link</b></th>
                                </tr>
                            </thead>
                            <?php
                            $faculty_name = $_SESSION['name'];
                            $stream = $_SESSION['stream'];
                            $day = date('l');



                            $todays_class = mysqli_query($conn, "select * from `today_class` where `stream` = '$stream' and `faculty` = '$faculty_name' and `day` = '$day'");
                            while ($row = mysqli_fetch_assoc($todays_class)) {





                            ?>
                            <tbody>
                                <tr>
                                    <td style="font-family:monospace"><?php echo $row['date']  ?></td>
                                    <td style="font-family:monospace"><?php echo $row['day']  ?></td>

                                    <td style="font-family:monospace"><?php echo $row['subject']  ?></td>
                                    <td style="font-family:monospace"><?php echo $row['subject_code']  ?></td>
                                    <td style="font-family:monospace"><?php echo $row['semester']  ?></td>

                                    <td style="font-family:monospace"><?php echo $row['timiing']  ?></td>
                                    <td style="font-family:monospace"><a href="<?php echo $row['joining_link']  ?>"
                                            class="btn btn-primary form-control" target="_blank"
                                            style="font-family:monospace">Join</a>
                                    </td>
                                </tr>

                            </tbody>


                            <?php
                            }
                            ?>
                        </table>




                    </div>
                </div>

            </div>
            <div class="card-footer bg-info">

            </div>
        </div>
    </div>
</div>