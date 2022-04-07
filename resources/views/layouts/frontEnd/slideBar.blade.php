<div class="left-side-bar">
    <div class="brand-logo">
        <a href="{{ route('student.dashboard') }}">
            {{-- <img src="{{ asset('vendors/images/hostel-logo.png') }}" alt="" class="dark-logo"> --}}
            <img src="{{ asset('vendors/images/hostel-logo.png') }}" style="width:60px;" alt="" class="light-logo">
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <li>
                    <a href="{{ route('student.dashboard') }}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-house-1"></span><span class="mtext">Dashboard</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-name"></span><span class="mtext">Meal System</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('meal.index') }}">Book My meal</a></li>
                        <li><a href="{{ route('meal.show',session()->get('studentID')) }}">Meal History</a></li>
                    </ul>
                </li>
                
            </ul>
        </div>
    </div>
</div>