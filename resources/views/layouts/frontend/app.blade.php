<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    @include('layouts.frontend.includes.head')
    @stack('css')

</head>

<body>
    @include('layouts.frontend.includes.top-header')
    @include('layouts.frontend.includes.header')

    @yield('content')

    @include('layouts.frontend.includes.footer')
    @include('layouts.frontend.includes.foot')
    @stack('js')
</body>

</html>
