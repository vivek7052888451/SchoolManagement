  <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="{{ asset('backend/images/logo.png')}}" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="{{asset('backend/images/logo2.png')}}" alt="Logo"></a>
            </div>
           

             <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                     @if(auth()->user()->hasAnyPermission('Session', 'Department','Class Room','Routing','Subject','Syllabus','Homework'))

                    
                    <li class="active">
                        <a href="{{route('admin.dashboard')}}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">UI elements</h3><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Academic</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="ui-buttons.html">Session</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="ui-badges.html">Department</a></li>
                            <li><i class="fa fa-bars"></i><a href="ui-tabs.html">Class Room</a></li>
                            <li><i class="fa fa-share-square-o"></i><a href="ui-social-buttons.html">Routing</a></li>
                            <li><i class="fa fa-id-card-o"></i><a href="ui-cards.html">Subject</a></li>
                            <li><i class="fa fa-exclamation-triangle"></i><a href="ui-alerts.html">Syllabus</a></li>
                            <li><i class="fa fa-spinner"></i><a href="ui-progressbar.html">Homework</a></li>
                           
                           
                        </ul>
                    </li>
                    @endif
                    @if(auth()->user()->hasAnyPermission('Teacher Attendance', 'Student Attendance'))
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Attendance</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="tables-basic.html">Teacher Attendance</a></li>
                            <li><i class="fa fa-table"></i><a href="tables-data.html">Student Attendace</a></li>
                        </ul>
                    </li>
                    @endif
                    @if(auth()->user()->hasAnyPermission('Admin', 'Student','Teacher','Parent','Role'))
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Users</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-book"></i><a href="">Admin</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="{{route('admin.student')}}">Student</a></li>
                             <li><i class="fa fa-file-word-o"></i><a href="{{route('admin.teacher')}}">Teacher</a></li>
                              <li><i class="fa fa-fire"></i><a href="{{route('admin.parent')}}">Parent</a></li>
                              <li><i class="menu-icon ti-email"></i><a href="{{route('admin.role')}}">Role</a></li>
                           
                        </ul>
                    </li>
                    @endif
                    @if(auth()->user()->hasAnyPermission('Exam List', 'Schedule','Mark','Exam Rule','Promotion'))

                    <h3 class="menu-title">Icons</h3><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Exam</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-fort-awesome"></i><a href="{{route('admin.examlist')}}">Exam List</a></li>
                            <li><i class="menu-icon ti-themify-logo"></i><a href="font-themify.html">Schedule</a></li>
                            <li><i class="fa fa-book"></i><a href="ui-switches.html">Mark</a></li>
                            <li><i class="fa fa-th"></i><a href="ui-grids.html">Exam Rule</a></li>
                            <!--  <li><i class="fa fa-book"></i><a href="ui-switches.html">Exam Result</a></li> -->
                            <li><i class="fa fa-th"></i><a href="ui-grids.html">Promotion</a></li>
                        </ul>
                    </li>
                    @endif

                    @if(auth()->user()->hasAnyPermission('Staff', 'Class Routing'))
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Report</a>
                        <ul class="sub-menu children dropdown-menu">
                          <!--   <li><i class="menu-icon fa fa-line-chart"></i><a href="charts-chartjs.html">Student</a></li>
                            <li><i class="menu-icon fa fa-area-chart"></i><a href="charts-flot.html">Teacher</a></li> -->
                            <li><i class="menu-icon fa fa-pie-chart"></i><a href="charts-peity.html">Staff</a></li>
                            <li><i class="menu-icon fa fa-area-chart"></i><a href="charts-flot.html">Class Routing</a></li>
                           <!--  <li><i class="menu-icon fa fa-pie-chart"></i><a href="charts-peity.html">Exam Routing</a></li>
                            <li><i class="menu-icon ti-email"></i><a href="charts-flot.html">Teacher Attendance</a></li>
                            <li><i class="menu-icon fa fa-bar-chart"></i><a href="charts-peity.html">Student Attendace</a></li> -->
                        </ul>
                    </li>
                    @endif


                  @if(auth()->user()->hasAnyPermission('Message', 'Calender'))
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-area-chart"></i>Announcement</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-map-o"></i><a href="maps-gmap.html">Message</a></li>
                            <li><i class="menu-icon fa fa-street-view"></i><a href="maps-vector.html">Calender</a></li>
                        </ul>
                    </li>
                    @endif
                    @if(auth()->user()->hasAnyPermission('Fee Type', 'Fee'))
                    <h3 class="menu-title">Accounting</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Accounting</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-login.html">Fee Type</a></li>
                           
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Fee</a></li>
                        </ul>

                    </li>
                    @endif

                  @if(auth()->user()->hasAnyPermission('Rule', 'Setting','Logout'))
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-login.html">Rules</a></li>
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-register.html">Setting</a></li>
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="{{ route('logout') }}"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a></li>
                                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                        </ul>
                        
                    </li>
                    @endif

                </ul>
             </div><!-- /.navbar-collapse -->
           
            
        </nav>
    </aside><!-- /#left-panel -->