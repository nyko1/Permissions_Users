<div class="topbar-nav header navbar" role="banner">
    <nav id="topbar">
        <ul class="navbar-nav theme-brand flex-row  text-center">
            <li class="nav-item theme-logo">
                <a href="index-2.html">
                    <img src="assets/img/logo.svg" class="navbar-logo" alt="logo">
                </a>
            </li>
            <li class="nav-item theme-text">
                <a href="index-2.html" class="nav-link"> NykoTech </a>
            </li>
        </ul>
        

        <ul class="list-unstyled menu-categories" id="topAccordion">

            <li class="menu single-menu">
                <a href="{{route('admin.users.index')}}">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                        <span>Dashboard</span>
                    </div>
                </a>
            </li>

            

            <li class="menu single-menu">
                <a href="#page" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                        <span>Users</span>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </a>
                <ul class="collapse submenu list-unstyled" id="page"  data-parent="#topAccordion">
                    <li>
                        <a href="{{route('admin.users.index')}}"> Users </a>
                    </li>
                    <li>
                        <a href="{{route('admin.users.index')}}"> Add users </a>
                    </li>
                </ul>
            </li>

            <li class="menu single-menu">
                <a href="#">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
                        <span>Permissions</span>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="page"  data-parent="#topAccordion">
                    <li>
                        <a href="{{route('admin.permissions.index')}}"> Permissions </a>
                    </li>
                    <li>
                        <a href="{{route('admin.permissions.create')}}"> Add Permission </a>
                    </li>
                </ul>
            </li>

            <li class="menu single-menu">
                <a href="#">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
                        <span>Roles</span>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="page"  data-parent="#topAccordion">
                    <li>
                        <a href="{{route('admin.roles.index')}}"> Roles </a>
                    </li>
                    <li>
                        <a href="{{route('admin.roles.create')}}"> Add Roles </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</div>