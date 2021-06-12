<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Toeicln</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('bower_components/Ionicons/css/ionicons.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ asset('dist/css/skins/_all-skins.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  @yield('styles')

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini fixed">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../../index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="user-image" alt="User Image">
              <span class="hidden-xs">{{ Auth::user()->name }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">

                <p>
                {{ Auth::user()->name }}
                </p>
              </li>
              <!-- Menu Body -->

              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a class="btn btn-info btn-flat" href="{{ url('logout') }}"
                      onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                      <i class="ion-log-out"></i>  {{ lang('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li><a href="{{ route('frontend_home') }}" target="_blank"><i class="fa fa-home"></i> <span>Home page</span></a></li>
        <li @if(Route::current()->getName() === 'dashboard' ) class="active" @endif><a href="{{ route('dashboard') }}"><i class="fa fa-book"></i> <span>Dash board</span></a></li>
        <li class="header">CONTENT MANAGEMENT</li>
        
        <li @if(Route::current()->getName() === 'backend_articles' ) class="active" @endif><a href="{{ route('backend_articles') }}"><i class="fa fa-newspaper-o"></i> Articles</a></li>
        <li @if(Route::current()->getName() === 'backend_article_add' ) class="active" @endif><a href="{{ route('backend_article_add')}}"><i class="fa fa-plus"></i> Add new articles</a></li>
        <li @if(Route::current()->getName() === 'backend_tag_index' ) class="active" @endif><a href="{{ route('backend_tag_index') }}"><i class="fa fa-newspaper-o"></i> Tags</a></li>
        <li @if(Route::current()->getName() === 'categories_view' ) class="active" @endif><a href="{{ route('categories_view') }}"><i class="fa fa-list-alt"></i> <span> Categories</span></a></li>
        <li @if(Route::current()->getName() === 'backend_contacts_index' ) class="active" @endif><a href="{{ route('backend_contacts_index') }}"><i class="fa fa-address-book"></i> <span> Contacts</span></a></li>
        <li @if(Route::current()->getName() === 'backend_files' ) class="active" @endif><a href="{{ route('backend_files') }}"><i class="fa fa-hdd-o"></i> <span> Files</span></a></li>
        <li @if(Route::current()->getName() === 'backend_documents_index' ) class="active" @endif><a href="{{ route('backend_documents_index') }}"><i class="fa fa-hdd-o"></i> <span> Documents</span></a></li>
        <li @if(Route::current()->getName() === 'backend_menus' ) class="active" @endif><a href="{{ route('backend_menus') }}"><i class="fa fa-snowflake-o"></i> <span> Menu</span></a></li>
        <li @if(Route::current()->getName() === 'backend_sliders' ) class="active" @endif><a href="{{ route('backend_sliders') }}"><i class="fa fa-snowflake-o"></i> <span> Slider</span></a></li>
        <li class="header">SYSTEM</li>
        <li @if(Route::current()->getName() === 'backend_users_index' ) class="active" @endif><a href="{{ route('backend_users_index') }}"><i class="fa fa-users"></i> <span> Users</span></a></li>
        <li @if(Route::current()->getName() === 'backend_setting_index' ) class="active" @endif><a href="{{ route('backend_setting_index') }}"><i class="fa fa-cog"></i> <span> Setting</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        @yield('content')
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- SlimScroll -->
<script src="{{ asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js') }}"></script>
@yield('scripts')

<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
</body>
</html>
