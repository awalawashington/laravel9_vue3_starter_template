<div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left">
                <a href="{{ route('admin.dashboard') }}" class="logo">
                    <span>
                        <img src="{{ asset('admin/assets/images/logo-sm.png') }}" alt="logo-small" class="logo-sm">
                    </span>
                </a>
            </div>
            <!--end logo-->
            <!-- Navbar -->
            <nav class="navbar-custom">    
                <ul class="list-unstyled topbar-nav float-right mb-0"> 
                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <img src="{{ asset('admin/assets/images/users/user-4.jpg') }}" alt="profile-user" class="rounded-circle" /> 
                            <span class="ml-1 nav-user-name hidden-sm">{{ auth()->user()->name}}<i class="mdi mdi-chevron-down"></i> </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{ route('admin.settings') }}"><i class="dripicons-user text-muted mr-2"></i> Profile</a>
                            <a class="dropdown-item" href="{{ route('admin.settings') }}"><i class="dripicons-gear text-muted mr-2"></i> Settings</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('admin.logout') }}" onclick="event.preventDefault(); 
                            document.getElementById('logout-form').submit();"><i class="dripicons-exit text-muted mr-2"></i> Logout</a>
                        </div>
                        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul><!--end topbar-nav-->
    
                <ul class="list-unstyled topbar-nav mb-0">                        
                    <li>
                        <button class="button-menu-mobile nav-link waves-effect waves-light">
                            <i class="dripicons-menu nav-icon"></i>
                        </button>
                    </li>
                    <li class="hide-phone app-search">
                        <form role="search" class="">
                            <input type="text" placeholder="Search..." class="form-control">
                            <a href=""><i class="fas fa-search"></i></a>
                        </form>
                    </li>
                </ul>
            </nav>
            <!-- end navbar-->
        </div>