<!doctype html>
<html lang="en">
<head>
    @include('layouts.front._head')
</head>
<body>


<div class="wrap">

    <header role="banner">
        @include('layouts.front._header')
    </header>
    @yield('content')
    <footer class="site-footer">
        @include('layouts.front._footer')
    </footer>
    <!-- END footer -->

</div>

<!-- loader -->
<div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>
@include('layouts.front._scripts')
</body>
</html>