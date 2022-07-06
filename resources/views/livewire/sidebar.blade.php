
<ul class="nav">
  <li class="nav-item profile">
              <div class="profile-desc">
                <div class="profile-pic">
                  <div class="count-indicator">
                    <img class="img-xs rounded-circle " src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}>
                    <span class="count bg-success"></span>
                  </div>
                  <div class="profile-name">
                    <h5 class="mb-0 font-weight-normal">{{ Auth::user()->name }}</h5>
                    <span>Super Admin</span>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item nav-category">
              <span class="nav-link">Navigation</span>
            </li>
            <li class="nav-item menu-items">
              <a class="nav-link" href="{{route ('dashboard')}}">
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
              <a class="nav-link" data-bs-toggle="collapse" href="#finance" aria-expanded="false" aria-controls="finance">
                <span class="menu-icon">
                  <i class="mdi mdi-bank"></i>
                </span>
                <span class="menu-title">Finance</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="finance">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="#">Budget Management</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#">Disbursement</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#">Collection</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#">General Ledger</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#">AP / AR</a></li>
                </ul>
              </div>
            </li>
       
            <div class="dropdown-divider"></div>
            <li class="nav-item menu-items">
              <a class="nav-link" data-bs-toggle="collapse" href="#hrp2" aria-expanded="false" aria-controls="hrp2">
                <span class="menu-icon">
                  <i class="mdi mdi-worker"></i>
                </span>
                <span class="menu-title">HR Part 2</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="hrp2">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="#">Time and Attendance</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#">Time Sheet Management</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#">Leave Management</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#">Claims & Reinbursement</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#">Payroll Management</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#">Core Human Capital</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#">HR Analytics</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#">Compensation Planning</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#">Shift and Schedule</a></li>
                </ul>
              </div>
            </li>
  
            <div class="dropdown-divider"></div>
            <li class="nav-item menu-items">
              <a class="nav-link" data-bs-toggle="collapse" href="#core" aria-expanded="false" aria-controls="core">
                <span class="menu-icon">
                  <i class="mdi mdi-wan"></i>
                </span>
                <span class="menu-title">Core Transaction</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="core">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="#">Recruitment</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#">Applicant Management</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#">New Hire on Board</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#">Employee Management</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#">Recruiting Analytics <br>& Reporting</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#">Position / Job <br>Management</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#">Payroll & Payment <br>Management</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#">Placement Management</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#">Clients Management</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#">Clients Agreement <br> & Contract Management</a></li>
                </ul>
              </div>
            </li>
           
            <div class="dropdown-divider"></div>
  </ul>
  