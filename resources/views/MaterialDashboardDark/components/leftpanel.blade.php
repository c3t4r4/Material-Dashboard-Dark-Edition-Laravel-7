<div class="sidebar" data-color="purple" data-background-color="black" data-image="{{ url('MaterialDashboardDark/img/sidebar-2.jpg') }}">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
            Creative Tim
        </a></div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item {{ isActive('material-dashboard-dark.dashboard') }}">
                <a class="nav-link" href="{{ route('material-dashboard-dark.dashboard') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item {{ isActive('material-dashboard-dark.blank') }}">
                <a class="nav-link" href="{{ route('material-dashboard-dark.blank') }}">
                    <i class="material-icons">insert_drive_file</i>
                    <p>Blank Page</p>
                </a>
            </li>
            <li class="nav-item {{ isActive('material-dashboard-dark.user') }}">
                <a class="nav-link" href="{{ route('material-dashboard-dark.user') }}">
                    <i class="material-icons">person</i>
                    <p>User Profile</p>
                </a>
            </li>
            <li class="nav-item {{ isActive('material-dashboard-dark.tables') }}">
                <a class="nav-link" href="{{ route('material-dashboard-dark.tables') }}">
                    <i class="material-icons">content_paste</i>
                    <p>Table List</p>
                </a>
            </li>
            <li class="nav-item {{ isActive('material-dashboard-dark.typography') }}">
                <a class="nav-link" href="{{ route('material-dashboard-dark.typography') }}">
                    <i class="material-icons">library_books</i>
                    <p>Typography</p>
                </a>
            </li>
            <li class="nav-item {{ isActive('material-dashboard-dark.icons') }}">
                <a class="nav-link" href="{{ route('material-dashboard-dark.icons') }}">
                    <i class="material-icons">bubble_chart</i>
                    <p>Icons</p>
                </a>
            </li>
            <li class="nav-item {{ isActive('material-dashboard-dark.googlemaps') }}">
                <a class="nav-link" href="{{ route('material-dashboard-dark.googlemaps') }}">
                    <i class="material-icons">location_ons</i>
                    <p>Google Maps</p>
                </a>
            </li>
            <li class="nav-item {{ isActive('material-dashboard-dark.leafletmaps') }}">
                <a class="nav-link" href="{{ route('material-dashboard-dark.leafletmaps') }}">
                    <i class="material-icons">map</i>
                    <p>Leaflet Maps</p>
                </a>
            </li>
            <li class="nav-item {{ isActive('material-dashboard-dark.notifications') }}">
                <a class="nav-link" href="{{ route('material-dashboard-dark.notifications') }}">
                    <i class="material-icons">notifications</i>
                    <p>Notifications</p>
                </a>
            </li>
            <li class="nav-item {{ isActive('material-dashboard-dark.upgrade') }}">
              <a class="nav-link" href="{{ route('material-dashboard-dark.upgrade') }}">
                  <i class="material-icons">unarchive</i>
                  <p>Upgrade to PRO</p>
              </a>
          </li>
        </ul>
    </div>
</div>
