<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="template_html/../plugins/images/favicon.png">
    <title>Elite Hospital Admin Template - Hospital admin dashboard web app kit</title>
    <!-- Bootstrap Core CSS -->
    <link href="template_html/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="template_html/plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css"
        rel="stylesheet">
    <!-- Menu CSS -->
    <link href="template_html/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <link href="template_html/plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css"
        rel="stylesheet" type="text/css" />
    <!-- animation CSS -->
    <link href="template_html/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="template_html/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="template_html/css/colors/megna.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="template_html/https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="template_html/https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Navigation -->
        @include('partials.header')
        @include('partials.sidebar')
        <!-- Left navbar-header -->
        <!-- Left navbar-header end -->
        <!-- Page Content -->
        <div id="page-wrapper">
          @yield('content')
            <!-- /.container-fluid -->
            @include('partials.footer')
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="template_html/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="template_html/bootstrap/dist/js/tether.min.js"></script>
    <script src="template_html/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="template_html/plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="template_html/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>

    <!--slimscroll JavaScript -->
    <script src="template_html/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="template_html/js/waves.js"></script>
    <!--Morris JavaScript -->
    <script src="template_html/plugins/bower_components/raphael/raphael-min.js"></script>
    <script src="template_html/plugins/bower_components/morrisjs/morris.js"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="template_html/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!-- jQuery peity -->
    <script src="template_html/plugins/bower_components/peity/jquery.peity.min.js"></script>
    <script src="template_html/plugins/bower_components/peity/jquery.peity.init.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="template_html/js/custom.min.js"></script>
    <script src="template_html/js/dashboard1.js"></script>
    <!--Style Switcher -->
    <script src="template_html/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>




</body>

</html>
