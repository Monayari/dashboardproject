<!DOCTYPE html>
<html lang="en">

<body class="light rtl">
@include('sweetalert::alert')
@include('dashboard.layout.particals.head')

@include('dashboard.layout.particals.pageloader')
<div class="overlay"></div>

@include('dashboard.layout.particals.navbar')

<div>

    @include('dashboard.layout.particals.slidleft')
    @include('dashboard.layout.particals.slidright')

</div>

@yield('content')
@stack('scripts')

</body>

</html>
