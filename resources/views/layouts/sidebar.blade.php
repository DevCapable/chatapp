<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <!-- User Profile-->
                <li>
                    <!-- User Profile-->
                    <div class="user-profile d-flex no-block dropdown m-t-20">
                        <div class="user-pic"><img src="../../assets/images/users/1.jpg" alt="users"
                                class="rounded-circle" width="40" /></div>
                        <div class="user-content hide-menu m-l-10">
                            <a href="#" class="" id="Userdd" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <h5 class="m-b-0 user-name font-medium">Steave Jobs <i
                                        class="fa fa-angle-down"></i></h5>
                                <span class="op-5 user-email">varun@gmail.com</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="Userdd">
                        
                                        <x-jet-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                                            <i class="ti-user m-r-5 m-l-5"></i> {{ __('My Profile') }}
                                         </x-jet-responsive-nav-link>

                                <x-jet-responsive-nav-link class="dropdown-item" href="javascript:void(0)"><i
                                        class="ti-wallet m-r-5 m-l-5"></i> My Balance</x-jet-responsive-nav-link>
                                <a class="dropdown-item" href="javascript:void(0)"><i
                                        class="ti-email m-r-5 m-l-5"></i> Inbox</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i
                                        class="ti-settings m-r-5 m-l-5"></i> Account Setting</a>
                                <div class="dropdown-divider"></div>
                              
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
            
                                            <x-jet-dropdown-link href="{{ route('logout') }}"
                                                     onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                              <i
                                        class="fa fa-power-off m-r-5 m-l-5"></i>  {{ __('Log Out') }}
                                            </x-jet-dropdown-link>
                                        </form>

                            </div>
                        </div>
                    </div>
                    <!-- End User Profile-->
                </li>
                <li class="p-15 m-t-10"><a href="javascript:void(0)"
                        class="btn d-block w-100 create-btn text-white no-block d-flex align-items-center"><i
                            class="fa fa-plus-square"></i> <span class="hide-menu m-l-5">Create New</span> </a>
                </li>
                <!-- User Profile-->
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="index.html" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                            class="hide-menu">Dashboard</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="pages-profile.html" aria-expanded="false"><i
                            class="mdi mdi-account-network"></i><span class="hide-menu">Profile</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="table-basic.html" aria-expanded="false"><i class="mdi mdi-border-all"></i><span
                            class="hide-menu">Table</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route('allUsers') }}" aria-expanded="false"><i class="mdi mdi-face"></i><span
                            class="hide-menu">All Users</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="starter-kit.html" aria-expanded="false"><i class="mdi mdi-file"></i><span
                            class="hide-menu">Blank</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="error-404.html" aria-expanded="false"><i class="mdi mdi-alert-outline"></i><span
                            class="hide-menu">404</span></a></li>
                <li class="text-center p-40 upgrade-btn">
                    <a href="https://www.wrappixel.com/templates/xtremeadmin/"
                        class="btn d-block w-100 btn-danger text-white" target="_blank">Upgrade to Pro</a>
                </li>
                <li> @livewire('search-user')</li>
            </ul>

        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>