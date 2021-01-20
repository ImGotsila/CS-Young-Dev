<?php session_start();?>
<?php 

if (!$_SESSION["UserID"]){

	  Header("Location: form_login.php");

}else{?>
 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?php echo $_SESSION["title"];?></title>
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
        
        <?php include("layout/nk-sidebar-menu.html");  ?>
        
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row">
                    <h5 class="card-title">เกม 4ห้องหัวใจ</h5>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                    <h5>1.แจกรูปหัวใจให้กับผู้เข้าร่วมคนละ 1 ดวง พร้อมปากกา หรือสีเมจิก </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                               <h5> 2.ให้ผู้เข้าร่วมแบ่งหัวใจออกเป็น 4 ช่อง และเขียนหมายเลขกำกับไว้ ซึ่งแล้วแต่การออกแบบของแต่ละคน</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5> 3.เจ้าหน้าที่กิจกรรม กล่าวว่า หัวใจของคนเรามี 4 ห้อง แล้วในวันนี้เราจะมอบหัวใจให้กับเพื่อนใหม่ของเราซึ่งเราจะต้องเข้าไปพูดคุยเพื่อสร้างความสัมพันธ์ <br>
                                    แล้วเขียนชื่อพร้อมกับชื่อหมู่บ้าน โรงเรียน ซึ่งเพื่อนก็ต้องเขียนชื่อเราด้วยลงในหัวใจช่องเดียวกัน <br>
                                    ซึ่งจะต้องหาให้ครบทั้ง 4 ช่อง ตามเวลาที่กำหนดโดยยกเว้นคนที่มาจากที่เดียวกัน</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                               <h5> 4.เจ้าหน้าที่กิจกรรมสุ่มถาม 1 คนแล้วให้คนนั้นบอกชื่อเพื่อนพร้อมกับชื่อหมู่บ้าน โรงเรียน ซึ่งต้องทายด้วยว่าเป็นใครแล้วก็ให้คนที่ถูกเอ่ยชื่อนั้น บอกชื่อเพื่อนอีก 1 คน</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5>5.ถามในลักษณะเช่นนี้ไปเรื่อยๆ จนกว่าผู้นำกิจกรรมเห็นสมควรจึงยุติการถาม</h5>
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