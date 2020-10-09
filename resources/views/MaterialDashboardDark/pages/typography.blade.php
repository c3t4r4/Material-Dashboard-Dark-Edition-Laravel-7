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
            @component('MaterialDashboardDark.components.navbar',['title'=> "Typography"])
            @endcomponent
            <!-- End Navbar -->

            <div class="content">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Material Dashboard Heading</h4>
                            <p class="card-category">Created using Roboto Font Family</p>
                        </div>
                        <div class="card-body">
                            <div id="typography">
                                <div class="card-title">
                                    <h2>Typography</h2>
                                </div>
                                <div class="row">
                                    <div class="tim-typo">
                                        <h1>
                                            <span class="tim-note">Header 1</span>The Life of Material Dashboard </h1>
                                    </div>
                                    <div class="tim-typo">
                                        <h2>
                                            <span class="tim-note">Header 2</span>The Life of Material Dashboard</h2>
                                    </div>
                                    <div class="tim-typo">
                                        <h3>
                                            <span class="tim-note">Header 3</span>The Life of Material Dashboard</h3>
                                    </div>
                                    <div class="tim-typo">
                                        <h4>
                                            <span class="tim-note">Header 4</span>The Life of Material Dashboard</h4>
                                    </div>
                                    <div class="tim-typo">
                                        <h5>
                                            <span class="tim-note">Header 5</span>The Life of Material Dashboard</h5>
                                    </div>
                                    <div class="tim-typo">
                                        <h6>
                                            <span class="tim-note">Header 6</span>The Life of Material Dashboard</h6>
                                    </div>
                                    <div class="tim-typo">
                                        <p>
                                            <span class="tim-note">Paragraph</span>
                                            I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.</p>
                                    </div>
                                    <div class="tim-typo">
                                        <span class="tim-note">Quote</span>
                                        <blockquote class="blockquote">
                                            <p>
                                                I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.
                                            </p>
                                            <small>
                                                Kanye West, Musician
                                            </small>
                                        </blockquote>
                                    </div>
                                    <div class="tim-typo">
                                        <span class="tim-note">Muted Text</span>
                                        <p class="text-muted">
                                            I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...
                                        </p>
                                    </div>
                                    <div class="tim-typo">
                                        <span class="tim-note">Primary Text</span>
                                        <p class="text-primary">
                                            I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
                                    </div>
                                    <div class="tim-typo">
                                        <span class="tim-note">Info Text</span>
                                        <p class="text-info">
                                            I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
                                    </div>
                                    <div class="tim-typo">
                                        <span class="tim-note">Success Text</span>
                                        <p class="text-success">
                                            I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
                                    </div>
                                    <div class="tim-typo">
                                        <span class="tim-note">Warning Text</span>
                                        <p class="text-warning">
                                            I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...
                                        </p>
                                    </div>
                                    <div class="tim-typo">
                                        <span class="tim-note">Danger Text</span>
                                        <p class="text-danger">
                                            I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
                                    </div>
                                    <div class="tim-typo">
                                        <h2>
                                            <span class="tim-note">Small Tag</span>
                                            Header with small subtitle
                                            <br>
                                            <small>Use "small" tag for the headers</small>
                                        </h2>
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
        <script>
            $(document).ready(function() {
                $().ready(function() {
                    $sidebar = $('.sidebar');

                    $sidebar_img_container = $sidebar.find('.sidebar-background');

                    $full_page = $('.full-page');

                    $sidebar_responsive = $('body > .navbar-collapse');

                    window_width = $(window).width();

                    $('.fixed-plugin a').click(function(event) {
                        // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
                        if ($(this).hasClass('switch-trigger')) {
                            if (event.stopPropagation) {
                                event.stopPropagation();
                            } else if (window.event) {
                                window.event.cancelBubble = true;
                            }
                        }
                    });

                    $('.fixed-plugin .active-color span').click(function() {
                        $full_page_background = $('.full-page-background');

                        $(this).siblings().removeClass('active');
                        $(this).addClass('active');

                        var new_color = $(this).data('color');

                        if ($sidebar.length != 0) {
                            $sidebar.attr('data-color', new_color);
                        }

                        if ($full_page.length != 0) {
                            $full_page.attr('filter-color', new_color);
                        }

                        if ($sidebar_responsive.length != 0) {
                            $sidebar_responsive.attr('data-color', new_color);
                        }
                    });

                    $('.fixed-plugin .background-color .badge').click(function() {
                        $(this).siblings().removeClass('active');
                        $(this).addClass('active');

                        var new_color = $(this).data('background-color');

                        if ($sidebar.length != 0) {
                            $sidebar.attr('data-background-color', new_color);
                        }
                    });

                    $('.fixed-plugin .img-holder').click(function() {
                        $full_page_background = $('.full-page-background');

                        $(this).parent('li').siblings().removeClass('active');
                        $(this).parent('li').addClass('active');


                        var new_image = $(this).find("img").attr('src');

                        if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                            $sidebar_img_container.fadeOut('fast', function() {
                                $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                                $sidebar_img_container.fadeIn('fast');
                            });
                        }

                        if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                            $full_page_background.fadeOut('fast', function() {
                                $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                                $full_page_background.fadeIn('fast');
                            });
                        }

                        if ($('.switch-sidebar-image input:checked').length == 0) {
                            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
                            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                        }

                        if ($sidebar_responsive.length != 0) {
                            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
                        }
                    });

                    $('.switch-sidebar-image input').change(function() {
                        $full_page_background = $('.full-page-background');

                        $input = $(this);

                        if ($input.is(':checked')) {
                            if ($sidebar_img_container.length != 0) {
                                $sidebar_img_container.fadeIn('fast');
                                $sidebar.attr('data-image', '#');
                            }

                            if ($full_page_background.length != 0) {
                                $full_page_background.fadeIn('fast');
                                $full_page.attr('data-image', '#');
                            }

                            background_image = true;
                        } else {
                            if ($sidebar_img_container.length != 0) {
                                $sidebar.removeAttr('data-image');
                                $sidebar_img_container.fadeOut('fast');
                            }

                            if ($full_page_background.length != 0) {
                                $full_page.removeAttr('data-image', '#');
                                $full_page_background.fadeOut('fast');
                            }

                            background_image = false;
                        }
                    });

                    $('.switch-sidebar-mini input').change(function() {
                        $body = $('body');

                        $input = $(this);

                        if (md.misc.sidebar_mini_active == true) {
                            $('body').removeClass('sidebar-mini');
                            md.misc.sidebar_mini_active = false;

                            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

                        } else {

                            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

                            setTimeout(function() {
                                $('body').addClass('sidebar-mini');

                                md.misc.sidebar_mini_active = true;
                            }, 300);
                        }

                        // we simulate the window Resize so the charts will get updated in realtime.
                        var simulateWindowResize = setInterval(function() {
                            window.dispatchEvent(new Event('resize'));
                        }, 180);

                        // we stop the simulation of Window Resize after the animations are completed
                        setTimeout(function() {
                            clearInterval(simulateWindowResize);
                        }, 1000);

                    });
                });
            });
        </script>
    @endcomponent
    <!-- END JS Footer -->
    </body>
@endsection
