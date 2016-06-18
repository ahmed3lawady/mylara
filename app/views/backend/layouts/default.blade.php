<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Control Panel :: @yield('title')</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        {{ HTML::style('assets/admin/css/bootstrap.min.css'); }}
        <!-- font Awesome -->
        {{ HTML::style('assets/admin/css/font-awesome.min.css'); }}
        <!-- Ionicons -->
        {{ HTML::style('assets/admin/css/ionicons.min.css'); }}
        <!-- Theme style -->
        {{ HTML::style('assets/admin/css/AdminLTE.css'); }}

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="pace-done skin-black fixed">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="{{ URL::to('admincp') }}" class="logo">AdminLTE</a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>{{ Auth::user()->us_fullname }} <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="{{ asset('assets/admin/img/avatar3.png') }}" class="img-circle" alt="User Image" />
                                    <p>
                                        {{ Auth::user()->us_fullname }} - {{ Auth::user()->us_usertype }}
                                        <small>Member since {{ Auth::user()->created_at }}</small>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="{{ URL::to('admincp/updateUser/'.Auth::user()->us_id) }}" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="{{ URL::to('admincp/logout') }}" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            @include('backend.layouts.menu')
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>@yield('title')</h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                        <li class="active">@yield('title')</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    @yield('content')
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- jQuery 2.0.2 -->
        {{ HTML::script('assets/admin/js/jquery.min.js'); }}
        <!-- Bootstrap -->
        {{ HTML::script('assets/admin/js/bootstrap.min.js'); }}
        <!-- AdminLTE App -->
        {{ HTML::script('assets/admin/js/AdminLTE/app.js'); }}
        
        @yield('scripts')
    </body>
</html>