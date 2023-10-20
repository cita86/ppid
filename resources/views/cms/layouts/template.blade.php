<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CMS PPID</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ asset('vendor/AdminLTE-2.4.18/bower_components/bootstrap/dist/css/bootstrap.min.css') }}"/>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('vendor/AdminLTE-2.4.18/bower_components/font-awesome/css/font-awesome.min.css')}}"/>
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('vendor/AdminLTE-2.4.18/bower_components/Ionicons/css/ionicons.min.css')}}"/>
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('vendor/AdminLTE-2.4.18/dist/css/AdminLTE.min.css')}}"/>
  <link rel="stylesheet" href="{{ asset('vendor/AdminLTE-2.4.18/dist/css/skins/_all-skins.min.css')}}"/>
  <link rel="stylesheet" href="css/_all-skins.min.css"/>
  <link rel="stylesheet" href="css/style.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{ asset('vendor/AdminLTE-2.4.18/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}"/>
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('vendor/AdminLTE-2.4.18/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}"/>
  <!-- trix - text editor -->
  <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
  <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
  <!-- CK editor classic -->
  <script src="https://cdn.ckeditor.com/ckeditor5/39.0.2/classic/ckeditor.js"></script>
  <!-- Option Value -->
  <script src="{{ asset('js/halamanstatis.js') }}"></script>
  <script src="{{ asset('js/prosedur.js') }}"></script>
  
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <style>
    trix-toolbar [data-trix-button-group="file-tools"] {
      display: none;
    }
    .ck-editor__editable_inline
    {
      height: 150px;
    }
  </style>
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <img src="image/logocms.png" alt="" class="logo-default" />
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{ asset('vendor/AdminLTE-2.4.18/dist/img/user2-160x160.jpg" class="user-image" alt="User Image"')}}"/>
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              </li>
              <!-- Menu Footer Akun-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="">
          <a href="/cms/informasi">
            <i class="fa fa-solid fa-barcode"></i> <span>Informasi PPID</span>
          </a>
        </li>
        <li>
          <a href="/cms/regulasi">
            <i class="fa fa-solid fa-book"></i> <span>Regulasi</span>
          </a>
        </li>
        <li class="">
          <a href="/cms/prosedur">
            <i class="fa fa-solid fa-bookmark"></i></i> <span>Prosedur Informasi</span>
          </a>    
        </li>
        <li class="">
          <a href="/cms/halamanstatis">
            <i class="fa fa-solid fa-paperclip"></i> <span>Halaman Statis</span>
          </a>
        </li>
        <li class="">
          <a href="/cms/slider">
            <i class="fa fa-solid fa-images"></i> <span>Slider</span>
          </a>
        </li>
        <li class="">
          <a href="/cms/vertikal">
            <i class="fa fa-solid fa-sitemap"></i> <span>Kantor Vertikal</span>
          </a>
        </li>
        <li class="">
          <a href="/cms/faq">
            <i class="fa fa-solid fa-circle-question"></i> <span>FAQ</span>
          </a>
        </li>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      @yield('container')
    </section>
    <!-- /.content -->
  </div>
  
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b></b>
    </div>
    <strong>2023 &copy; <a href="https://adminlte.io">Direktorat Jenderal Kekayaan Negara</a></strong> 
  </footer>

<!-- jQuery 3 -->
<script src="{{ asset('vendor/AdminLTE-2.4.18/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('vendor/AdminLTE-2.4.18/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('vendor/AdminLTE-2.4.18/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('vendor/AdminLTE-2.4.18/bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{ asset('vendor/AdminLTE-2.4.18/bower_components/moment/min/moment.min.js')}}"></script>
<script src="{{ asset('vendor/AdminLTE-2.4.18/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- datepicker -->
<script src="{{ asset('vendor/AdminLTE-2.4.18/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{ asset('vendor/AdminLTE-2.4.18/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{ asset('vendor/AdminLTE-2.4.18/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('vendor/AdminLTE-2.4.18/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('vendor/AdminLTE-2.4.18/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('vendor/AdminLTE-2.4.18/dist/js/demo.js')}}"></script>
<!--CK Editor 
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.2/classic/ckeditor.js"></script>-->
<!--<script src="{{ asset('vendor/AdminLTE-2.4.18/bower_components/ckeditor/ckeditor.js')}}"></script>-->
 
<script>
    ClassicEditor.create( document.querySelector( '#editor' ), {
      removePlugins: [],
      fullPage: true,
      allowedContent: true,
      autoGrow_onStartup: true,
      toolbar : {
        items: [
              'undo', 'redo',
              '|', 'heading',
              '|', 'fontfamily', 'fontsize', 'fontColor', 'fontBackgroundColor',
              '|', 'bold', 'italic', 'strikethrough', 'subscript', 'superscript', 'code',
              '|', 'blockQuote', 'codeBlock',
              '|', 'alignment',
              '|', 'bulletedList', 'numberedList', 'todoList', 'outdent', 'indent'
            ],
        shouldNotGroupWhenFull: true,
        // forcePasteAsPlainText = true,
      }
      } )
        .then( editor => {
          console.log( editor );
      } )
      .then( editor1 => {
          console.log( editor1 );
      } )
        .catch( error => {
          console.error( error );
      } );
  </script>

  <script type="text/javascript">
    $(document).ready(function () {
    
    window.setTimeout(function() {
        $(".alert").fadeTo(1000, 0).slideUp(1000, function(){
            $(this).remove(); 
        });
    }, 3000);
    
    });
  </script>
  
</body>
</html>
