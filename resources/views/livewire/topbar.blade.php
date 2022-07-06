      <ul class="navbar-nav navbar-nav-right">
        @if (Auth::user()->hasTeamRole(auth()->user()->currentTeam, 'admin'))
        <li class="nav-item dropdown d-none d-sm-block">
          <a class="nav-link btn btn-success create-new-button"  aria-expanded="false" href="{{route ('adduser')}}">+ Add User</a>  
        </li>
        @endif
        
        <li class="nav-item dropdown border-left">
          <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="mdi mdi-email"></i>
            <!-- <span class="count bg-success"></span> -->
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
            <h6 class="p-3 mb-0">Messages</h6>
            <div class="dropdown-divider"></div>
            <div class="dropdown-divider"></div>
            <div class="dropdown-divider"></div>
            <div class="dropdown-divider"></div>
            <p class="p-3 mb-0 text-center">No new messages</p>
          </div>
        </li>
        <li class="nav-item dropdown border-left">
          <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
            <i class="mdi mdi-bell"></i>
            <!-- <span class="count bg-danger"></span> -->
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
            <h6 class="p-3 mb-0">Notifications</h6>
            <div class="dropdown-divider"></div>
            
            <div class="dropdown-divider"></div>
            
            <div class="dropdown-divider"></div>
            
            <div class="dropdown-divider"></div>
            <p class="p-3 mb-0 text-center">See all notifications</p>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" id="teamDropdown" href="#" data-bs-toggle="dropdown">
            <div class="navbar-profile">
              <p class="mb-0 d-none d-sm-block navbar-profile-name">Teams</p>
              <i class="mdi mdi-menu-down d-none d-sm-block"></i>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="teamDropdown">
            <h6 class="p-3 mb-0">Teams</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item" href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-account-multiple text-danger"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject mb-1">Manage Teams</p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
                @if(Auth::user()->hasTeamRole(auth()->user()->currentTeam, 'admin'))
                  <a class="dropdown-item preview-item" href="{{ route('teams.create') }}">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-account-multiple-plus text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Create Team</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">Advanced settings</p>
                  <div class="dropdown-divider"></div>
             </div>
          @endif
        </li>
        @if(Auth::user()->hasTeamRole(auth()->user()->currentTeam, 'admin'))
        <li class="nav-item dropdown">
          <a class="nav-link" id="teamDropdown" href="#" data-bs-toggle="dropdown">
            <div class="navbar-profile">
              <p class="mb-0 d-none d-sm-block navbar-profile-name">Department</p>
              <i class="mdi mdi-menu-down d-none d-sm-block"></i>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="teamDropdown">
            <h6 class="p-3 mb-0">Teams</h6>
            <div class="dropdown-divider"></div>
            @foreach (Auth::user()->allTeams() as $team)
              <x-jet-switchable-team :team="$team" />
            @endforeach
        </li>
        @endif
        <li class="nav-item dropdown">
          <a class="nav-link" id="profileDropdown" href="#" data-bs-toggle="dropdown">
            <div class="navbar-profile">
              <img class="rounded-circle" width="32" height="32" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
              <p class="mb-0 d-none d-lg-block navbar-profile-name">{{ Auth::user()->name }}</p>
              <i class="mdi mdi-menu-down d-none d-sm-block"></i>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
            <h6 class="p-3 mb-0">Profile</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item" href="{{ route('profile.show') }}">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-settings text-success"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject mb-1">Settings</p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-logout text-danger"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject mb-1">{{ __('Logout') }}</p>
              </div>
            </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                 </form>
            <div class="dropdown-divider"></div>
            <p class="p-3 mb-0 text-center">Advanced settings</p>
          </div>
        </li>
      </ul>

