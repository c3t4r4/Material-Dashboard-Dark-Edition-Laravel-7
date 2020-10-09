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
            @component('MaterialDashboardDark.components.navbar',['title'=> "Icons"])
            @endcomponent
            <!-- End Navbar -->

            <div class="content">
                <div class="container-fluid">
                    <div class="container-fluid">
                        <div class="card card-plain">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Material Design Icons</h4>
                                <p class="card-category">Handcrafted by our friends from
                                    <a target="_blank" href="https://design.google.com/icons/">Google</a>
                                </p>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card-body">
                                        <div class="iframe-container d-none d-lg-block">
                                            <iframe src="https://design.google.com/icons/">
                                                <p>Your browser does not support iframes.</p>
                                            </iframe>
                                        </div>
                                        <div class="col-md-12 d-none d-sm-block d-md-block d-lg-none d-block d-sm-none text-center ml-auto mr-auto">
                                            <h5 class="card-description">The icons are visible on Desktop mode inside an iframe. Since the iframe is not working on Mobile and Tablets please visit the icons on their original page on Google. Check the
                                                <a href="https://design.google.com/icons/" target="_blank">Material Icons</a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
