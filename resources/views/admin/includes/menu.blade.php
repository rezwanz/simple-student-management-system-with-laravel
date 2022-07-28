<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{ route('dashboard') }}" class="waves-effect">
                        <i class="bx bx-home-circle"></i><span class="badge badge-pill badge-info float-right">03</span>
                        <span>Dashboards</span>
                    </a>
                </li>

                @if(auth()->user()->access_label == 2)
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-layout"></i>
                            <span>User Module</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{ route('users.create') }}">Add User</a></li>
                            <li><a href="{{ route('users.index') }}">Manage User</a></li>
                        </ul>
                    </li>
                @endif

                @if(auth()->user()->access_label == 1)
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-store"></i>
                            <span>Teacher Module</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{ route('edit-profile') }}">Edit Profile</a></li>
                        </ul>
                    </li>
                @endif

                @if(auth()->user()->access_label == 1 || auth()->user()->access_label == 2)
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-bitcoin"></i>
                            <span>Course Module</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{ route('courses.create') }}">Add Course</a></li>
                            <li><a href="{{ route('courses.index') }}">Manage Course</a></li>
                        </ul>
                    </li>
                @endif

                @if(auth()->user()->access_label == 0)
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-envelope"></i>
                            <span>Student Module</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{ route('edit-profile') }}">Update Profile</a></li>
                        </ul>
                    </li>
                @endif
                @if(auth()->user()->access_label == 2)
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-receipt"></i>
                            <span>Enroll Module</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{ route('manage-enroll') }}">Manage Enroll</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
