<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        {{--        <li class="nav-item d-none d-sm-inline-block">--}}
        {{--            <a href="index3.html" class="nav-link">Home</a>--}}
        {{--        </li>--}}
        {{--        <li class="nav-item d-none d-sm-inline-block">--}}
        {{--            <a href="#" class="nav-link">Contact</a>--}}
        {{--        </li>--}}
    </ul>

    <!-- SEARCH FORM -->
{{--    <form class="form-inline ml-3">--}}
{{--        <div class="input-group input-group-sm">--}}
{{--            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">--}}
{{--            <div class="input-group-append">--}}
{{--                <button class="btn btn-navbar" type="submit">--}}
{{--                    <i class="fas fa-search"></i>--}}
{{--                </button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </form>--}}

<!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="" href="
                 @if(Auth::user()->role_id == 4)
                /assigntutor
                @else
                /assignedstudent
                @endif
                ">
                <i class="far fa-comments"></i>
                <span id="no-unseen" class="badge badge-danger navbar-badge"></span>
            </a>

        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="" href="/allEmail">
                <i class="far fa-bell"></i>
                @if(\App\Model\Email::where('to_user' ,Auth::id())->where('status','=',0)->count() > 0 )
                    <span class="badge badge-warning navbar-badge">



                        {{\App\Model\Email::where('to_user' ,Auth::id())->where('status','=',0)->count() }}


                </span>
                @endif
            </a>
            {{--            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">--}}
            {{--                <span class="dropdown-item dropdown-header">15 Notifications</span>--}}
            {{--                <div class="dropdown-divider"></div>--}}
            {{--                <a href="#" class="dropdown-item">--}}
            {{--                    <i class="fas fa-envelope mr-2"></i> 4 new messages--}}
            {{--                    <span class="float-right text-muted text-sm">3 mins</span>--}}
            {{--                </a>--}}
            {{--                <div class="dropdown-divider"></div>--}}
            {{--                <a href="#" class="dropdown-item">--}}
            {{--                    <i class="fas fa-users mr-2"></i> 8 friend requests--}}
            {{--                    <span class="float-right text-muted text-sm">12 hours</span>--}}
            {{--                </a>--}}
            {{--                <div class="dropdown-divider"></div>--}}
            {{--                <a href="#" class="dropdown-item">--}}
            {{--                    <i class="fas fa-file mr-2"></i> 3 new reports--}}
            {{--                    <span class="float-right text-muted text-sm">2 days</span>--}}
            {{--                </a>--}}
            {{--                <div class="dropdown-divider"></div>--}}
            {{--                <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>--}}
            {{--            </div>--}}
        </li>

        <li class="nav-item">
            <a href="{{route('logout')}}" class="nav-link" role="button">
                <i class="fa fa-sign-out-alt"></i>
            </a>
        </li>
    </ul>
</nav>
