<!doctype html>
<html>
<head>
    @include('includes.head')
    <title>
        Review Page - @yield('title')
    </title>
    @yield('head')
</head>
<body>
<div class="container-fluid">

    <header class="row">
        @include('includes.header')
    </header>

    <div id="main" class="row">
        @yield('content')
    </div>

    <footer class="row">
        @include('includes.footer')
    </footer>

    @include('includes.scripts')
    @yield('foot')
</div>
</body>
</html>