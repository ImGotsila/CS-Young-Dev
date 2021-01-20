<?php session_start();

 ?>
<?php
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

            <div class="nk-sidebar">
                <div class="nk-nav-scroll">

                    <ul class="metismenu" id="menu">
                        <li>
                            <a href="Home.php" aria-expanded="false">
                                <i class="icon-badge menu-icon"></i><span class="nav-text">Join Game</span>
                            </a>
                        </li>
                        <li>
                            <a href="widgets.html" aria-expanded="false">
                                <i class="icon-badge menu-icon"></i><span class="nav-text">Create Game</span>
                            </a>
                        </li>
                        <li>
                            <a href="widgets.html" aria-expanded="false">
                                <i class="icon-badge menu-icon"></i><span class="nav-text">Dashboard</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!--**********************************
            Sidebar end
        ***********************************-->


            <!--**********************************
            Content body start
        ***********************************-->
            <div class="content-body">
                <div class="container-fluid mt-3">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <?php
                                    $query = "SELECT * FROM `game_list` ORDER BY pro_track desc " or die("Error:" . mysqli_error(null));
                                    if ($result = mysqli_query($con, $query)) {
                                        while ($row = mysqli_fetch_array($result)) {
                                            $base = 'Score_board_page.php';
                                            $game = $row['data'];
                                            $data = array(                                 
                                                'game' => $game
                                            );

                                            $url = $base . '?' . http_build_query($data);

                                            echo   '<div class="col-lg-3 col-sm-7">';
                                            echo   '<div class="card">';
                                            echo       '<div class="card-body">';
                                            echo           '<div class="text-center">';
                                            echo               '<span class="display-5"><i class="icon-grid gradient-'; echo $row['id']; echo '-text"></i></span>';
                                            echo               '<h2 class="mt-3">';echo $row["game_name"];echo '</h2>';
                                            echo               '<p>Game Progress '; echo $row['pro_track']; echo '% For complete</p><a href="';echo $url; echo '" class="btn gradient-1 btn-lg border-0 btn-rounded px-5">Join now</a>';
                                            echo            '</div>
                                                        </div>
                                                    </div>
                                                    </div>';
                                        }
                                        mysqli_free_result($result);
                                    } else {
                                        echo "ERROR: Could not able to execute $query. " . mysqli_error($con);
                                    }
                                    mysqli_close($con);
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--**********************************
            Content body end
        ***********************************-->


                    <!--**********************************
            Footer start
        ***********************************
                        <div class="footer">
                            <div class="copyright">
                                <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a> 2018</p>
                            </div>
                        </div>
                        **********************************
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