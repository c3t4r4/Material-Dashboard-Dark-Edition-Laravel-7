@extends('MaterialDashboardDark.layouts.materialtemplate')

@section('header')
    @component('MaterialDashboardDark.components.header',['title'=> "Material Dashboard Dark Edition by Creative Tim"])
        <!-- CSS Leaflet 1.7.1 -->
        <link rel="stylesheet" href="{{ url(mix('MaterialDashboardDark/css/leaflet.css')) }}" />
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
        @component('MaterialDashboardDark.components.navbar',['title'=> "Leaflet Maps"])
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
        <!--  Leaflet Maps Plugin    -->
        <script src="{{ url(mix('MaterialDashboardDark/js/leaflet.js')) }}"></script>

        <script>
            $(document).ready(function() {
                var map = L.map('map').setView([51.505, -0.09], 13);

                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);
            });
        </script>

    @endcomponent
    <!-- END JS Footer -->
    </body>
@endsection
