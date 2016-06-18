<!-- Left side column. contains the logo and sidebar -->
<aside class="left-side sidebar-offcanvas">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('assets/admin/img/avatar3.png') }}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>Hello, {{ Str::limit(Auth::user()->us_fullname, 10) }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li @if(Request::is('admincp')) class="active" @endif><a href="{{ URL::to('admincp') }}" ><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <li class="treeview @if(Request::is('admincp/newPage') || Request::is('admincp/pages')) active @endif">
                <a href="#"><i class="fa fa-bar-chart-o"></i><span>{{ trans('pages.content-pages') }}</span><i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li @if(Request::is('admincp/newPage')) class="active" @endif><a href="{{ URL::to('admincp/newPage') }}"><i class="fa fa-angle-double-right"></i> {{ trans('pages.create-page') }}</a></li>
                    <li @if(Request::is('admincp/pages')) class="active" @endif><a href="{{ URL::to('admincp/pages') }}"><i class="fa fa-angle-double-right"></i> {{ trans('pages.view-pages') }}</a></li>
                </ul>
            </li>
            <li class="treeview @if(Request::is('admincp/newUser') || Request::is('admincp/users')) active @endif">
                <a href="#"><i class="fa fa-bar-chart-o"></i><span>{{ trans('users.users') }}</span><i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li @if(Request::is('admincp/newUser')) class="active" @endif><a href="{{ URL::to('admincp/newUser') }}"><i class="fa fa-angle-double-right"></i> {{ trans('users.create-user') }}</a></li>
                    <li @if(Request::is('admincp/users')) class="active" @endif><a href="{{ URL::to('admincp/users') }}"><i class="fa fa-angle-double-right"></i> {{ trans('users.view-users') }}</a></li>
                </ul>
            </li>
            <li><a href="{{ URL::to('admincp/logout') }}" ><i class="fa fa-dashboard"></i> <span>{{ trans('users.logout') }}</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>