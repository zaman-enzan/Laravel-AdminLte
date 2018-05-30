@include('layouts.header')

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="{{ route('login') }}"><b>Enzan</b></a>
        </div>

        @yield('content')

        <div class="login-footer text-center">
            <p>&copy; <a href="http://enzan-k.com">Enzan Koubou Co., Ltd</a>. All Rights Reserved.</p>
        </div>
    </div>
</body>
</html>
