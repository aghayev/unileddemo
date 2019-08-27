<!DOCTYPE html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<div class="container">

    <header>
        @include('includes.header')
    </header>

    <div class="body_sec">
        @yield('content')
    </div>

    <footer>
        @include('includes.footer')
    </footer>

</div>
</body>
</html>