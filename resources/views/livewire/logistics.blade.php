<ul class="nav">
    <li class="nav-item profile">
        <div class="profile-desc">
            <div class="profile-pic">
                <div class="count-indicator">
                    <img class="img-xs rounded-circle " src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}>
            <span class=" count bg-success"></span>
                </div>
                <div class="profile-name">
                    <h5 class="mb-0 font-weight-normal">{{ Auth::user()->name }}</h5>
                    <span>Logistics </span>
                </div>
            </div>
        </div>
    </li>
    <li class="nav-item nav-category">
        <span class="nav-link">Navigation</span>
    </li>
    <li class="nav-item menu-items">
        <a class="nav-link" href="{{route ('home')}}">
            <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
            </span>
            <span class="menu-title">Dashboard</span>
        </a>
    </li>

    <div class="dropdown-divider"></div>
    <li class="nav-item menu-items">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <span class="menu-icon">
                <i class="mdi mdi-package-variant"></i>
            </span>
            <span class="menu-title">Logistics</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="#">Warehousing</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">Procurement</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">Project Management</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">Vendor Portal</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">Fleet Management</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">Audit Management</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">Vehicle Reservation</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">M.R.O</a></li>
            </ul>
        </div>
    </li>
    <div class="dropdown-divider"></div>
    <li class="nav-item menu-items">
        <a class="nav-link" data-bs-toggle="collapse" href="#procurement" aria-expanded="false" aria-controls="procurement">
            <span class="menu-icon">
                <i class="mdi mdi-package-variant"></i>
            </span>
            <span class="menu-title">Procurement</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="procurement">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route ('requests')}}">Request Lists</a></li>
            </ul>
        </div>
    </li>
</ul>