<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
        <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">{{(App\Model\User::find(Auth::id()))->role->name}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{Auth::user()->id.Auth::user()->name}}

                </a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview ">
                    <a href="#" class="nav-link active ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/dashboard" class="nav-link {{Request::is('dashboard') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>


                    </ul>
                </li>
                @if(Auth::user()->role_id ===1)
                    <li class="nav-item has-treeview ">
                        <a href="#" class="nav-link ">
                            <i class="nav-icon fas fa-user-md"></i>
                            <p>
                                User
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">


                            <li class="nav-item">
                                <a href="/users" class="nav-link {{Request::is('users') ? 'active' : '' }} ">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>All user</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/tutors" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>All tutor</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/nonstudenttutor" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>tutor without tutee</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/nonstudenttutor" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Student</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/nonstudenttutor" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Staff</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview ">
                        <a href="#" class="nav-link ">
                            <i class="nav-icon fas fa-user-md"></i>
                            <p>
                                Allocation
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">

                            <li class="nav-item">
                                <a href="/allReg" class="nav-link {{Request::is('allReg') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>All Allocation</p>
                                </a>
                            </li>
                            {{--                            <li class="nav-item">--}}
                            {{--                                <a href="/users" class="nav-link {{Request::is('users') ? 'active' : '' }} ">--}}
                            {{--                                    <i class="far fa-circle nav-icon"></i>--}}
                            {{--                                    <p>All user</p>--}}
                            {{--                                </a>--}}
                            {{--                            </li>--}}
                            {{--                            <li class="nav-item">--}}
                            {{--                                <a href="/tutors" class="nav-link">--}}
                            {{--                                    <i class="far fa-circle nav-icon"></i>--}}
                            {{--                                    <p>All tutor</p>--}}
                            {{--                                </a>--}}
                            {{--                            </li>--}}
                            {{--                            <li class="nav-item">--}}
                            {{--                                <a href="/nonstudenttutor" class="nav-link">--}}
                            {{--                                    <i class="far fa-circle nav-icon"></i>--}}
                            {{--                                    <p>tutor without tutee</p>--}}
                            {{--                                </a>--}}
                            {{--                            </li>--}}
                        </ul>
                    </li>

                @endif

                @if(Auth::user()->role_id!= 1)
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon far fa-user"></i>
                            <p>
                                Meeting
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @if(Auth::user()->role_id==3)
                                <li class="nav-item">
                                    <a href="/tutorMeetings" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>All meeting</p>
                                    </a>
                                </li>
                            @endif
                            @if(Auth::user()->role_id==4)
                                <li class="nav-item">
                                    <a href="/StudentMeetings" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>All meeting</p>
                                    </a>
                                </li>
                            @endif
                            <li class="nav-item">
                                <a href="/todayMeeting" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Today Meeting</p>
                                </a>
                            </li>

                        </ul>
                    </li>
                @endif
                @if(Auth::user()->role_id ===3)
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon far fa-user"></i>
                            <p>
                                Your student
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/assignedstudent" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>student list</p>
                                </a>
                            </li>


                        </ul>
                    </li>
                @endif
                @if(Auth::user()->role_id ===4)
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon far fa-user"></i>
                            <p>
                                Your Tutor
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/assigntutor" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Tutor list</p>
                                </a>
                            </li>


                        </ul>
                    </li>
                @endif

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-bell"></i>
                        <p>
                            Email
                            @if(\App\Model\Email::where('to_user' ,Auth::id())->where('status','=',0)->count() > 0 )
                                (<span
                                    class="text-info">{{\App\Model\Email::where('to_user' ,Auth::id())->where('status','=',0)->count() }}</span>
                                )
                            @endif


                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/allEmail" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>all Email</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/unseenMail" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>unread</p>
                            </a>
                        </li>

                    </ul>
                </li>
                @if(Auth::user()->role_id ==3 || Auth::user()->role_id ==4 )
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon  fas fa-bullhorn"></i>
                            <p>
                                Request
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @if(Auth::user()->role_id ===3)
                                <li class="nav-item">
                                    <a href="/allrequests" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>All request</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/mailbox/compose.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>done request</p>
                                    </a>
                                </li>
                            @endif
                            @if(Auth::user()->role_id ===4)
                                <li class="nav-item">
                                    <a href="/myrequest" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Your request</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/newrequest" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>new request</p>
                                    </a>
                                </li>
                            @endif

                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon far fa-file"></i>
                            <p>
                                Document
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/newdocument" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Upload document</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/yourdocument" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Your document</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/sharedDocument" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Shared with you</p>
                                </a>
                            </li>

                        </ul>
                    </li>
                @endif
                @if(\Auth::user()->role_id ==1)
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon far fa-file"></i>
                            <p>
                                Report
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/report/statistic" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Statistic Report</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/report/exception" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Exceptional Report</p>
                                </a>
                            </li>



                        </ul>
                    </li>
                @endif
                @if(\Auth::user()->role_id ==4)
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-user-friends"></i>
                            <p>
                                All Friend
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/getFriendList" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Friend List</p>
                                </a>
                            </li>

                        </ul>
                    </li>
                @endif

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
