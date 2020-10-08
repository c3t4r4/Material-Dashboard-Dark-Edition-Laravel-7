<!--   Core JS Files   -->
<script src="{{ url(mix('MaterialDashboardDark/js/material-core.js')) }}"></script>

<!--  Google Maps Plugin    -->
{{--<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>--}}

<!-- Chartist JS -->
<script src="{{ url(mix('MaterialDashboardDark/js/plugins/chartist.min.js')) }}"></script>

<!--  Notifications Plugin    -->
<script src="{{ url(mix('MaterialDashboardDark/js/plugins/bootstrap-notify.js')) }}"></script>

<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ url(mix('MaterialDashboardDark/js/material-dashboard.js')) }}"></script>

@if($slot)
    {{ $slot }}
@endif
