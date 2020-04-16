<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
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
                            Allocation
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
                        <li class="nav-item">
                            <a href="/allReg" class="nav-link {{Request::is('allReg') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Allocation</p>
                            </a>
                        </li>
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
                    </ul>
                </li>
                @endif


                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-user"></i>
                        <p>
                            Meeting
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/mailbox/mailbox.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>your meeting</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/mailbox/compose.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>add a meeting</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/mailbox/read-mail.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Read</p>
                            </a>
                        </li>
                    </ul>
                </li>
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
                            <a href="pages/mailbox/compose.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>unread</p>
                            </a>
                        </li>

                    </ul>
                </li>
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

                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
