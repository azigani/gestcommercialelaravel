<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('template_html/plugins/images/favicon.png') }}">

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('template_html/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template_html/plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css') }}" rel="stylesheet">

    <link href="{{ asset('template_html/plugins/bower_components/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />

    <!-- Menu CSS -->
    <link href="{{ asset('template_html/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template_html/plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css">

    <!-- animation CSS -->
    <link href="{{ asset('template_html/css/animate.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('template_html/css/style.css') }}" rel="stylesheet">

    <!-- color CSS -->
    <link href="{{ asset('template_html/css/colors/megna.css') }}" id="theme" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
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
    <script src="{{ asset('template_html/plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('template_html/bootstrap/dist/js/tether.min.js') }}"></script>
    <script src="{{ asset('template_html/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('template_html/plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js') }}"></script>

    <!-- Menu Plugin JavaScript -->
    <script src="{{ asset('template_html/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js') }}"></script>

    <!-- Slimscroll JavaScript -->
    <script src="{{ asset('template_html/js/jquery.slimscroll.js') }}"></script>

    <!-- Wave Effects -->
    <script src="{{ asset('template_html/js/waves.js') }}"></script>

    <!-- Morris JavaScript -->
    <script src="{{ asset('template_html/plugins/bower_components/raphael/raphael-min.js') }}"></script>
    <script src="{{ asset('template_html/plugins/bower_components/morrisjs/morris.js') }}"></script>

    <!-- Sparkline chart JavaScript -->
    <script src="{{ asset('template_html/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

    <!-- jQuery peity -->
    <script src="{{ asset('template_html/plugins/bower_components/peity/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('template_html/plugins/bower_components/peity/jquery.peity.init.js') }}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('template_html/js/custom.min.js') }}"></script>
    <script src="{{ asset('template_html/js/dashboard1.js') }}"></script>
    <script src="{{ asset('template_html/plugins/bower_components/datatables/jquery.dataTables.min.js') }}"></script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->
    <script>

$(document).ready(function() {
    $('#articlesTable').DataTable({
        dom: 'Bfrtip', // Ajout des boutons au DOM
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print' // Définir les boutons d'exportation
        ]
    });
});
    $(document).ready(function() {
        $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;

                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before(
                                '<tr class="group"><td colspan="5">' + group + '</td></tr>'
                            );

                            last = group;
                        }
                    });
                }
            });

            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    </script>
    <!--Style Switcher -->
    <!-- Style Switcher -->
    <script src="{{ asset('template_html/plugins/bower_components/styleswitcher/jQuery.style.switcher.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#categoriesTable').DataTable({
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.11.5/i18n/French.json'
                }
            });
        });
    </script>
</body>
</html>
