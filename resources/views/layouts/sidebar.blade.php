<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image" style="opacity: .8;">
        <span class="brand-text font-weight-light">CALL.FIT [Ver 0.1]</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="img/avatar04.png" class="img-circle" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <router-link to="/dashboard" class="nav-link">
                        <i class="fas fa-tachometer-alt d-icon"></i>
                        <p class="d-text"> Dashboard </p>
                    </router-link>
                </li>
                <li class="nav-item">
                    <router-link to="/users" class="nav-link">
                        <i class="fas fa-award d-icon"></i>
                        <p class="d-text"> Memberships </p>
                    </router-link>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-prescription-bottle d-icon"></i>
                        <p class="d-text"> Products </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-capsules d-icon"></i>
                        <p class="d-text"> Nutrition </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-carrot d-icon"></i>
                        <p class="d-text"> Diet Charts </p>
                    </a>
                </li>



                {{-- <li class="nav-header">COMMUNICATION</li>
                </li> --}}
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-bullhorn d-icon"></i>
                        <p class="d-text"> Announcements </p>
                    </a>
                </li>
                 <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-comments d-icon"></i>
                        <p class="d-text"> Group Chat </p>
                    </a>
                </li> 
                 <li class="nav-item has-treeview menu-close">
                    <a href="#" class="nav-link">
                        <i class="fas fa-users d-icon"></i>
                        <p class="d-text">Members<i class="right fa fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-basketball-ball d-icon"></i>
                                <p class="d-text">Add Member</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-basketball-ball d-icon"></i>
                                <p class="d-text">Add Staff</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-blog d-icon"></i>
                        <p class="d-text">
                            My Blog
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>


                <li class="nav-item">
                    <router-link to="/profile" class="nav-link">
                        <i class="fas fa-user d-icon"></i>
                        <p class="d-text"> Profile </p>
                    </router-link>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <i class="fas fa-power-off d-icon"></i>
                        <p>{{ __('Logout') }}</p>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
                
            </ul>
        </nav>

    </div>
  
</aside>