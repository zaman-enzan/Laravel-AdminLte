@include('layouts.header')

<body class="hold-transition skin sidebar-mini">
    <div class="wrapper">

        <header class="main-header">
            <a href="{{ route('dashboard') }}" class="logo">
                <span class="logo-lg"><b>Enzan</b></span>
            </a>
            <nav class="navbar navbar-static-top">
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown header-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-user-circle-o"></i>
                                <span>{{ Auth::user()->name }}</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <ul class="menu">
                                        <li>
                                            <a href="{{ route('change.password') }}">
                                                <div class="pull-left"><i class="fa fa-gear"></i></div>
                                                <p>Change Password</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                <div class="pull-left"><i class="fa fa-sign-out"></i></div>
                                                <p>Sign Out</p>
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- =============================================== -->

        <aside class="main-sidebar">
            <section class="sidebar">
                <ul class="sidebar-menu" data-widget="tree">
                    <li>
                        <a href="{{ route('dashboard') }}">
                            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-pie-chart"></i>
                            <span>Menu</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ url('/') }}"><i class="fa fa-circle-o"></i> Sub-menu1</a></li>
                            <li><a href="{{ url('/') }}"><i class="fa fa-circle-o"></i> Sub-menu2</a></li>
                        </ul>
                    </li>
                </ul>
            </section>
        </aside>

        @yield('content')

        <footer class="main-footer text-center">
            <strong>Copyright &copy; {{ date('Y') }} <a href="http://enzan-k.com">ENZAN KOUBOU CO., LTD</a>.</strong> All rights reserved.
        </footer>

    </div>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')

</body>
</html>
