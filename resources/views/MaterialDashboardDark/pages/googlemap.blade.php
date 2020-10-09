@extends('MaterialDashboardDark.layouts.materialtemplate')

@section('header')
    @component('MaterialDashboardDark.components.header',['title'=> "Material Dashboard Dark Edition by Creative Tim"])
        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link rel="stylesheet" href="{{ url(mix('MaterialDashboardDark/demo/demo.css')) }}" />
    @endcomponent
@endsection

@section('body')
    <body class="dark-edition">

    <!-- MAIN PANEL -->
    <div class="wrapper ">

        <!-- Left panel : Navigation area -->
    @component('MaterialDashboardDark.components.leftpanel')
    @endcomponent
    <!-- END Left panel -->

        <div class="main-panel">

            <!-- Navbar -->
        @component('MaterialDashboardDark.components.navbar',['title'=> "Google Maps"])
        @endcomponent
        <!-- End Navbar -->

            <div class="content">
                <div id="map"></div>
            </div>

            <!-- PAGE FOOTER -->
            @component('MaterialDashboardDark.components.pagefooter')
                <script>
                    const x = new Date().getFullYear();
                    let date = document.getElementById('date');
                    date.innerHTML = '&copy; ' + x + date.innerHTML;
                </script>
        @endcomponent
        <!-- END PAGE FOOTER -->

        </div>

    </div>
    <!-- END MAIN PANEL -->

    <!-- FIXED PLUGIN -->
    @component('MaterialDashboardDark.components.fixedplugin')
    @endcomponent
    <!-- END FIXED PLUGIN -->

    <!--================================================== -->

    <!-- JS Footer -->
    @component('MaterialDashboardDark.components.jsfooter')

        <!--  Google Maps Plugin    -->
        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

        <script>
            $(document).ready(function() {
                // Javascript method's body can be found in assets/js/demos.js
                demo.initGoogleMaps();
            });
        </script>
    @endcomponent
    <!-- END JS Footer -->
    </body>
@endsection
