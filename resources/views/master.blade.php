<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->

<!-- Mirrored from byrushan.com/projects/mae/1-0/alternative-header.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Feb 2019 13:41:21 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> @yield('title') |SI Video Skripsi Undiksha</title>

    <!-- Vendor CSS -->
    <link href="vendors/bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="vendors/bower_components/animate.css/animate.min.css" rel="stylesheet">
    <link href="vendors/bower_components/bootstrap-sweetalert/lib/sweet-alert.css" rel="stylesheet">
    <link href="vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css"
        rel="stylesheet">
    <link href="vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css"
        rel="stylesheet">
    <link href="vendors/bower_components/google-material-color/dist/palette.css" rel="stylesheet">

    <!-- CSS -->
    <link href="css/app.min.1.css" rel="stylesheet">
    <link href="css/app.min.2.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    {{-- Datatables --}}
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.css">

</head>

<body style="background-color: white;">
    <header id="header" class="media">
        <div class="pull-left h-logo">
            <a href="/" class="hidden-xs">
                SI Video
                <small>Undiksha</small>
            </a>

            <div class="menu-collapse" data-ma-action="sidebar-open" data-ma-target="main-menu">
                <div class="mc-wrap">
                    <div class="mcw-line top palette-White bg"></div>
                    <div class="mcw-line center palette-White bg"></div>
                    <div class="mcw-line bottom palette-White bg"></div>
                </div>
            </div>
        </div>

        <ul class="pull-right h-menu">
            <li class="hm-search-trigger">
                <a href="#" data-ma-action="search-open">
                    <i class="hm-icon zmdi zmdi-search"></i>
                </a>
            </li>

            <li class="dropdown hidden-xs hidden-sm h-apps">
                <a data-toggle="dropdown" href="#">
                    <i class="hm-icon zmdi zmdi-email"></i>
                </a>
            </li>
            <li class="dropdown hidden-xs">
                <a data-toggle="dropdown" href="#"><i class="hm-icon zmdi zmdi-notifications"></i></a>
            </li>
            <li class="hm-alerts" data-user-alert="sua-messages" data-ma-action="sidebar-open"
                data-ma-target="user-alerts">
                <a href="#"><i class="hm-icon zmdi zmdi-notifications"></i></a>
            </li>
            <li class="dropdown hm-profile">
                <a data-toggle="dropdown" href="#">
                    <img src="img/profile-pics/1.jpg" alt="">
                </a>

                <ul class="dropdown-menu pull-right dm-icon">
                    <li>
                        <a href="profile-about.html"><i class="zmdi zmdi-account"></i> View Profile</a>
                    </li>
                    <li>
                        <a href="#"><i class="zmdi zmdi-time-restore"></i> Logout</a>
                    </li>
                </ul>
            </li>
        </ul>

        <div class="media-body h-search">
            <form class="p-relative">
                <input type="text" class="hs-input" placeholder="Search any video">
                <i class="zmdi zmdi-search hs-reset" data-ma-action="search-clear"></i>
            </form>
        </div>

    </header>

    <section id="main">

        <aside style="background: #2d323d;" id="s-main-menu" class="sidebar">
            <div class="smm-header">
                <i class="zmdi zmdi-long-arrow-left" data-ma-action="sidebar-close"></i>
            </div>

            <ul class="main-menu">
                <li>
                    <a href="/"><i class="zmdi zmdi-home"></i>Dashboard</a>
                </li>
                <li>
                        <a href="/read"><i class="zmdi zmdi-format-list-bulleted"></i>Item1</a>
                    </li>
                <li>
                    <a href="/mahasiswa"><i class="zmdi zmdi-format-list-bulleted"></i>Upload Data Skripsi</a>
                </li>
            </ul>
        </aside>

        <section style="margin-left: 20px;" id="content">

            @yield('content')

        </section>

        <footer id="footer">
            Copyright &copy; 2015 Material Admin

            <ul class="f-menu">
                <li><a href="#">Home</a></li>
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Reports</a></li>
                <li><a href="#">Support</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </footer>

    </section>

    <!-- Page Loader -->
    <div class="page-loader palette-Light-Blue bg">
        <div class="preloader pl-xl pls-white">
            <svg class="pl-circular" viewBox="25 25 50 50">
                <circle class="plc-path" cx="50" cy="50" r="20" />
            </svg>
        </div>
    </div>

    <!-- Older IE warning message -->
    <!--[if lt IE 9]>
            <div class="ie-warning">
                <h1 class="c-white">Warning!!</h1>
                <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
                <div class="iew-container">
                    <ul class="iew-download">
                        <li>
                            <a href="http://www.google.com/chrome/">
                                <img src="img/browsers/chrome.png" alt="">
                                <div>Chrome</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.mozilla.org/en-US/firefox/new/">
                                <img src="img/browsers/firefox.png" alt="">
                                <div>Firefox</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.opera.com">
                                <img src="img/browsers/opera.png" alt="">
                                <div>Opera</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.apple.com/safari/">
                                <img src="img/browsers/safari.png" alt="">
                                <div>Safari</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                                <img src="img/browsers/ie.png" alt="">
                                <div>IE (New)</div>
                            </a>
                        </li>
                    </ul>
                </div>
                <p>Sorry for the inconvenience!</p>
            </div>
        <![endif]-->

    <!-- Javascript Libraries -->
    <script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <script src="vendors/bower_components/salvattore/dist/salvattore.min.js"></script>



    <script src="vendors/bower_components/flot/jquery.flot.js"></script>
    <script src="vendors/bower_components/flot/jquery.flot.resize.js"></script>
    <script src="vendors/bower_components/flot.curvedlines/curvedLines.js"></script>

    <script src="vendors/sparklines/jquery.sparkline.min.js"></script>
    <script src="vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>

    <script src="vendors/bower_components/moment/min/moment.min.js"></script>
    <script src="vendors/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js"></script>
    <script src="vendors/bower_components/Waves/dist/waves.min.js"></script>
    <script src="vendors/bootstrap-growl/bootstrap-growl.min.js"></script>
    <script src="vendors/bower_components/bootstrap-sweetalert/lib/sweet-alert.min.js"></script>
    <script src="vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js">
    </script>

    <!-- Placeholder for IE9 -->
    <!--[if IE 9 ]>
            <script src="vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
        <![endif]-->

    <script src="js/flot-charts/curved-line-chart.js"></script>
    <script src="js/flot-charts/bar-chart.js"></script>
    <script src="js/charts.js"></script>

    <script src="js/charts.js"></script>
    <script src="js/functions.js"></script>
    <script src="js/actions.js"></script>
    <script src="js/demo.js"></script>

</body>

</html>
