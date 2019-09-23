<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UwrapperA-Compatible" content="IE=edge">
    <title>HRC-@yield('title')</title>
    <style>
        .pendding {
		background-color: lightblue;
		width: 270px;
		height: 30px;
	}
    </style>
    <base href="{{ asset('') }}">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('') }}/admins/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('') }}/admins/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('') }}/admins/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('') }}/admins/dist/css/AdminLTE.min.css">
    <!-- <link rel="stylesheet" href="{{ asset('') }}/css/styles.css"> -->
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset('') }}/admins/dist/css/skins/_all-skins.min.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{ asset('') }}/admins/bower_components/morris.js/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{ asset('') }}/admins/bower_components/jvectormap/jquery-jvectormap.css">
    <!-- Date Picker -->
    <link rel="stylesheet"
          href="{{ asset('') }}/admins/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('') }}/admins/bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{ asset('') }}/admins/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <script language="javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
    <link rel="stylesheet" href="{{ asset('') }}/admins/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    {{-- ck --}}
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
    {{-- tag --}}
    <link rel="stylesheet" type="text/css" href="{{asset('')}}tag/dist/jquery-tagsinput.min.css"/>
    <script src="{{asset('')}}tag/dist/jquery-tagsinput.min.js" defer></script>
    {{-- endtag --}}
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

{{--header--}}
@include('admins.layout.header')
<!-- Left side column. contains the logo and sidebar -->
{{--Menu--}}
@include('admins.layout.menu')
<!-- Content Wrapper. Contains page content -->
{{--wrapper--}}
@yield('content')
<!-- /.content-wrapper -->
{{--footer--}}
@include('admins.layout.footer')
<!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark" style="display: none;">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
            <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane" id="control-sidebar-home-tab">
                <h3 class="control-sidebar-heading">Recent Activity</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                                <p>Will be 23 on April 24th</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-user bg-yellow"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                                <p>New phone +1(800)555-1234</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                                <p>nora@example.com</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-file-code-o bg-green"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                                <p>Execution time 5 seconds</p>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

                <h3 class="control-sidebar-heading">Tasks Progress</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Custom Template Design
                                <span class="label label-danger pull-right">70%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Update Resume
                                <span class="label label-success pull-right">95%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Laravel Integration
                                <span class="label label-warning pull-right">50%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Back End Framework
                                <span class="label label-primary pull-right">68%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

            </div>
            <!-- /.tab-pane -->
            <!-- Stats tab content -->
            <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
            <!-- /.tab-pane -->
            <!-- Settings tab content -->
            <div class="tab-pane" id="control-sidebar-settings-tab">
                <form method="post">
                    <h3 class="control-sidebar-heading">General Settings</h3>

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Report panel usage
                            <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                            Some information about this general settings option
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Allow mail redirect
                            <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                            Other sets of options are available
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Expose author name in posts
                            <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                            Allow the user to show his name in blog posts
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <h3 class="control-sidebar-heading">Chat Settings</h3>

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Show me as online
                            <input type="checkbox" class="pull-right" checked>
                        </label>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Turn off notifications
                            <input type="checkbox" class="pull-right">
                        </label>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Delete chat history
                            <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                        </label>
                    </div>
                    <!-- /.form-group -->
                </form>
            </div>
            <!-- /.tab-pane -->
        </div>
    </aside>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{ asset('') }}admins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('') }}admins/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>




<script src="{{ asset('') }}/admins/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('') }}/admins/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
    $(function () {
        $('#example1').DataTable();
        $('#example3').DataTable();
        $('#example4').DataTable();
        $('#example5').DataTable();
        $('#example2').DataTable({

            'paging': true,
            'lengthChange': false,
            'searching': false,
            'ordering': true,
            'info': true,
            'autoWidth': false
        });
    })
</script>
<script>
    CKEDITOR.replace('contentt', {
        filebrowserBrowseUrl: '{{asset("")}}ckfinder/ckfinder.html',
        filebrowserImageBrowseUrl: '{{asset("")}}ckfinder/ckfinder.html?type=Images',
        filebrowserFlashBrowseUrl: '{{asset("")}}ckfinder/ckfinder.html?type=Flash',
        filebrowserUploadUrl: '{{asset("")}}ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
        filebrowserImageUploadUrl: '{{asset("")}}ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
        filebrowserFlashUploadUrl: '{{asset("")}}ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
    });
    CKEDITOR.replace('contentt1', {
        filebrowserBrowseUrl: '{{asset("")}}ckfinder/ckfinder.html',
        filebrowserImageBrowseUrl: '{{asset("")}}ckfinder/ckfinder.html?type=Images',
        filebrowserFlashBrowseUrl: '{{asset("")}}ckfinder/ckfinder.html?type=Flash',
        filebrowserUploadUrl: '{{asset("")}}ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
        filebrowserImageUploadUrl: '{{asset("")}}ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
        filebrowserFlashUploadUrl: '{{asset("")}}ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
    });
    CKEDITOR.replace('contentt2', {
        filebrowserBrowseUrl: '{{asset("")}}ckfinder/ckfinder.html',
        filebrowserImageBrowseUrl: '{{asset("")}}ckfinder/ckfinder.html?type=Images',
        filebrowserFlashBrowseUrl: '{{asset("")}}ckfinder/ckfinder.html?type=Flash',
        filebrowserUploadUrl: '{{asset("")}}ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
        filebrowserImageUploadUrl: '{{asset("")}}ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
        filebrowserFlashUploadUrl: '{{asset("")}}ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
    });
</script>
<script src="{{ asset('') }}admins/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('') }}admins/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
{{--Tag--}}
{{-- tags --}}
<script>
    $(document).ready(function () {
        $('[data-role="tags-input"]').tagsInput();
    });
</script>

{{--EndTag--}}
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('') }}admins/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="{{ asset('') }}admins/bower_components/raphael/raphael.min.js"></script>
<script src="{{ asset('') }}admins/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="{{ asset('') }}admins/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="{{ asset('') }}admins/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="{{ asset('') }}admins/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('') }}admins/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{ asset('') }}admins/bower_components/moment/min/moment.min.js"></script>
<script src="{{ asset('') }}admins/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="{{ asset('') }}admins/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('') }}admins/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="{{ asset('') }}admins/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="{{ asset('') }}admins/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('') }}admins/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('') }}admins/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('') }}admins/dist/js/demo.js"></script>
<script src="{{ asset('admins/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('admins/tinymce/config.js') }}"></script>
</body>
</html>
