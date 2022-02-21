<div class="left-sidenav">
                <div class="main-icon-menu">
                    <nav class="nav">
                        <a href="#MetricaAnalytic" class="nav-link" data-toggle="tooltip-custom" data-placement="top" title="" data-original-title="Dashboard">
                            <svg class="nav-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M208 448V320h96v128h97.6V256H464L256 64 48 256h62.4v192z"/></svg>
                        </a><!--end MetricaAnalytic-->

                        <a href="#MetricaCrypto" class="nav-link" data-toggle="tooltip-custom" data-placement="top" title="" data-original-title="Users">
                            <svg class="nav-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M337.454 232c33.599 0 61.092-27.002 61.092-60 0-32.997-27.493-60-61.092-60s-61.09 27.003-61.09 60c0 32.998 27.491 60 61.09 60zm-162.908 0c33.599 0 61.09-27.002 61.09-60 0-32.997-27.491-60-61.09-60s-61.092 27.003-61.092 60c0 32.998 27.493 60 61.092 60zm0 44C126.688 276 32 298.998 32 346v54h288v-54c0-47.002-97.599-70-145.454-70zm162.908 11.003c-6.105 0-10.325 0-17.454.997 23.426 17.002 32 28 32 58v54h128v-54c0-47.002-94.688-58.997-142.546-58.997z"/></svg>
                        </a><!--end MetricaCrypto-->

                    </nav><!--end nav-->
                </div><!--end main-icon-menu-->

                <div class="main-menu-inner">
                    <div class="menu-body slimscroll">
                        <div id="MetricaAnalytic" class="main-icon-menu-pane">
                            <div class="title-box">
                                <h6 class="menu-title">Dashboard</h6>       
                            </div>
                            <ul class="nav">
                                <li class="nav-item"><a class="nav-link" href="{{ route('admin.dashboard') }}"><i class="dripicons-home"></i>Dashboard</a></li>
                            </ul>
                        </div><!-- end Analytic -->
                        <div id="MetricaCrypto" class="main-icon-menu-pane">
                            <div class="title-box">
                                <h6 class="menu-title">Users</h6>
                            </div>
                            <ul class="nav">
                                <li class="nav-item"><a class="nav-link" href="{{ route('admin.users.index') }}"><i class="dripicons-user-group"></i>All Users</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('admin.users.create') }}"><i class="dripicons-user"></i>Create User</a></li>
                            </ul>
                        </div><!-- end Crypto -->
                    </div><!--end menu-body-->
                </div><!-- end main-menu-inner-->
            </div>