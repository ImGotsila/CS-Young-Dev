<?php session_start();
//echo $_GET['game'];
?>
<?php
$table_selected = $_GET['game'];
if (!$_SESSION["UserID"]) {

    Header("Location: form_login.php");
} else {
    include('connection.php');
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title><?php echo $_SESSION["title"]; ?></title>
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
        <!-- Pignose Calender -->
        <link href="./plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
        <!-- Chartist -->
        <link rel="stylesheet" href="./plugins/chartist/css/chartist.min.css">
        <link rel="stylesheet" href="./plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <!-- Custom Stylesheet -->
        <link href="css/style.css" rel="stylesheet">

    </head>

    <body>

        <!--*******************
        Preloader start
    ********************-->
        <div id="preloader">
            <div class="loader">
                <svg class="circular" viewBox="25 25 50 50">
                    <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
                </svg>
            </div>
        </div>
        <!--*******************
        Preloader end
    ********************-->


        <!--**********************************
        Main wrapper start
    ***********************************-->
        <div id="main-wrapper">



            <!--**********************************
            Header start
        ***********************************-->

            <?php include("layout/header.php");  ?>

            <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

            <!--**********************************
            Sidebar start
        ***********************************-->

            <?php include("layout/Menu_slot_2.html");  ?>

            <!--**********************************
            Sidebar end
        ***********************************-->

            <!--**********************************
            Content body start
        ***********************************-->
            <div class="content-body">
                <div class="container-fluid mt-3">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body text-center">
                                    <h1>Score Board</h1>
                                </div>
                            </div>
                        </div>
                        <?php
                        $query = "SELECT * FROM $table_selected ORDER BY (score1+score2+score3)  desc" or die("Error:" . mysqli_error(null));
                        if ($result = mysqli_query($con, $query)) {
                            $count_no = 0;
                            $cnt = 0;
                            while ($row = $result->fetch_assoc()) {
                                $cnt++;
                                $topscr["team" . $cnt] = $row["team"];
                                $topscr["total" . $cnt] = $row["score1"] + $row["score2"] + $row["score3"];
                            }
                        }
                        ?>
                        <div class="col-lg-4 col-sm-6">
                            <div class="card">
                                <div class="social-graph-wrapper" style="background-color:#fdd813;">
                                    <span class="s-icon"><i class="icon-trophy"></i></span>
                                </div>
                                <div class="row">
                                    <div class="col-6 border-right">
                                        <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                            <h3 class="m-1"><?php echo $topscr["team1"]; ?> </h3>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                            <h3 class="m-1"><?php echo (string)$topscr["total1"]; ?> </h3>
                                            <p class="m-0">Score</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="card">
                                <div class="social-graph-wrapper" style="background-color: 	#bfbebf;">
                                    <span class="s-icon"><i class="fas fa-medal"></i></span>
                                </div>
                                <div class="row">
                                    <div class="col-6 border-right">
                                        <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                            <h3 class="m-1"><?php echo $topscr["team2"]; ?></h3>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                            <h3 class="m-1"><?php echo (string)$topscr["total2"]; ?></h3>
                                            <p class="m-0">Score</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="card">
                                <div class="social-graph-wrapper" style="background-color: #5b83c2;">
                                    <span class="s-icon"><i class="fas fa-award"></i></span>
                                </div>
                                <div class="row">
                                    <div class="col-6 border-right">
                                        <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                            <h3 class="m-1"><?php echo (string)$topscr["team3"]; ?></h3>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                            <h3 class="m-1"><?php echo (string)$topscr["total3"]; ?></h3>
                                            <p class="m-0">Score</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">List Of Range</h4>
                                    <div class="table-responsive">

                                        <table class="table table-bordered table-striped verticle-middle">
                                            <?php
                                            if ($result = mysqli_query($con, $query)) {
                                                $count_no = 0;
                                            ?>
                                                <thead>
                                                    <tr>
                                                        <th scope="col">No.</th>
                                                        <th scope="col">Team</th>
                                                        <th scope="col">Pay</th>
                                                        <th scope="col">Score 1</th>
                                                        <th scope="col">Score 2</th>
                                                        <th scope="col">Score 3</th>
                                                        <th scope="col">Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    while ($row = mysqli_fetch_array($result)) {
                                                        $count_no += 1;
                                                    ?>
                                                        <tr>
                                                            <td> <?php echo $count_no; ?> </td>
                                                            <td> <?php echo $row['team'] ?> </td>
                                                            <td> <?php echo $row['pay']  ?></td>
                                                            <td> <?php echo $row['score1']  ?></td>
                                                            <td> <?php echo $row['score2']  ?></td>
                                                            <td> <?php echo $row['score3']  ?></td>
                                                            <td> <?php echo (string)($topscr["total" . $count_no]) ?> </td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            <?php
                                                mysqli_free_result($result);
                                            } else {
                                                echo "ERROR: Could not able to execute $query. " . mysqli_error($con);
                                            }
                                            mysqli_close($con);
                                            ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!--**********************************
            Content body end
        ***********************************-->


            <!--**********************************
            Footer start
        ***********************************-->
            <div class="footer">
                <div class="copyright">
                    <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a> 2018</p>
                </div>
            </div>
            <!--**********************************
            Footer end
        ***********************************-->
        </div>
        <!--**********************************
        Main wrapper end
    ***********************************-->

        <!--**********************************
        Scripts
    ***********************************-->
        <script src="plugins/common/common.min.js"></script>
        <script src="js/custom.min.js"></script>
        <script src="js/settings.js"></script>
        <script src="js/gleek.js"></script>
        <script src="js/styleSwitcher.js"></script>

        <!-- Chartjs -->
        <script src="./plugins/chart.js/Chart.bundle.min.js"></script>
        <!-- Circle progress -->
        <script src="./plugins/circle-progress/circle-progress.min.js"></script>
        <!-- Datamap -->
        <script src="./plugins/d3v3/index.js"></script>
        <script src="./plugins/topojson/topojson.min.js"></script>
        <script src="./plugins/datamaps/datamaps.world.min.js"></script>
        <!-- Morrisjs -->
        <script src="./plugins/raphael/raphael.min.js"></script>
        <script src="./plugins/morris/morris.min.js"></script>
        <!-- Pignose Calender -->
        <script src="./plugins/moment/moment.min.js"></script>
        <script src="./plugins/pg-calendar/js/pignose.calendar.min.js"></script>
        <!-- ChartistJS -->
        <script src="./plugins/chartist/js/chartist.min.js"></script>
        <script src="./plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>



        <script src="./js/dashboard/dashboard-1.js"></script>

    </body>

    </html>
<?php } ?>