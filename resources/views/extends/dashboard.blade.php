<!DOCTYPE html>
<html lang="en">
<head>
    @yield('title')
    @yield('meta')
</head>
<body class="sb-nav-fixed">

    @include('admin.layout.header')
    @include('admin.layout.navbar')

    @yield('content')
    {{-- @include('layout.') --}}
    @include('admin.layout.footer')

    @yield('script')
</body>
</html>
