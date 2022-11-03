<!DOCTYPE html>
<html lang="en">
<head>
    @yield('title')
    @yield('meta')
</head>
<body>
<div class="main" id="main">
    @include('shop.layout.header')


    @yield('content')
    {{-- @include('layout.') --}}
    @include('shop.layout.footer')

    @yield('script')
</div>
</body>
</html>
