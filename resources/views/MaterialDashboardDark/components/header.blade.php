<head>
    <meta charset="utf-8">

    <link rel="apple-touch-icon" sizes="76x76" href="{{ url('MaterialDashboardDark/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ url('MaterialDashboardDark/img/favicon.png') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>
        @if($title)
            {{$title}}
        @endif
    </title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="{{ url(mix('MaterialDashboardDark/css/font-awesome.min.css')) }}">
    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ url(mix('MaterialDashboardDark/css/material-dashboard.css')) }}"  />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="{{ url(mix('MaterialDashboardDark/demo/demo.css')) }}" />

    @if($slot)
        {{ $slot }}
    @endif

</head>
