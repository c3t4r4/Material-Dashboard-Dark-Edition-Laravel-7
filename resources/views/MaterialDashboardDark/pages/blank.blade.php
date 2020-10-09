@extends('MaterialDashboardDark.layouts.materialtemplate')

@section('header')
    @component('MaterialDashboardDark.components.header',['title'=> "Material Dashboard Dark Edition by Creative Tim"])
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
            @component('MaterialDashboardDark.components.navbar',['title'=> "Blank Page"])
            @endcomponent
            <!-- End Navbar -->

            <div class="content">

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

    @endcomponent
    <!-- END JS Footer -->
    </body>
@endsection
