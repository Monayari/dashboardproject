<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>
        @section('pagetitle') - Bootstrap 4 Admin Dashboard Template
        @show
    </title>
    <!-- Favicon-->
{{--    <meta name="csrf-token" content="{{ csrf_token() }}">--}}

{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">--}}

{{--    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">--}}

{{--    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>--}}

{{--    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>--}}
{{--    <script type="text/javascript">--}}
{{--        var siteUrl = "{{url('/')}}";--}}
{{--    </script>--}}
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">


    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Plugins Core Css -->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- <script src="{{ asset('js/app.js') }}"></script> -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <link href="{{ asset('/css/dashboard/app.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/dashboard/materialize-rtl.min.css') }}" rel="stylesheet">
    <!-- Custom Css -->
    <link href="{{ asset('/css/dashboard/style.css') }}" rel="stylesheet">
    <!-- You can choose a theme from css/styles instead of get all themes -->
    <link href="{{ asset('/css/dashboard/all-themes.css') }}" rel="stylesheet">

    <link href="{{ asset('/css/dashboard/multi-select.css') }}" rel="stylesheet">

</head>
