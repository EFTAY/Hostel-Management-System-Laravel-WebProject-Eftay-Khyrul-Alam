<div class="left-side-bar">
    <div class="brand-logo">
        <a href="{{ route('home') }}">
            <img src="{{ asset('vendors/images/baiust.png') }}" alt="" class="light-logo" >
            <h3 class="text:center" style="color: white">HOSTEL</h3>
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <li>
                    <a href="{{ route('home') }}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-house-1"></span><span class="mtext">Dashboard</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-name"></span><span class="mtext">Prerequisites</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('hostle-meal.index') }}">Hostle Meal</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-add-user"></span><span class="mtext">Student</span>
                    </a>
                    <ul class="submenu">
                        @can('add-student')
                        <li><a href="{{ route('student-information.create') }}">Add New Students</a></li>
                        @endcan
                        <li><a href="{{ route('student-information.index') }}">Students List</a></li>
                    </ul>
                </li>
                {{-- <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-apartment"></span><span class="mtext">Hostle Student</span>
                    </a>
                    <ul class="submenu">
                    <li><a href="{{ route('hostle-seats.index') }}">Hostel Seats</a></li>
                    </ul>
                </li> --}}
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-name"></span><span class="mtext">Permission</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('acl-management.index') }}">ACL Management</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>