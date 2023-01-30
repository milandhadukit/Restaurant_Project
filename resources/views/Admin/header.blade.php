{{-- @extends('layouts.Admin_master') --}}

<body>

    <!--  wrapper -->
    <div id="wrapper">

        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    {{-- <img src="assets/img/logo.png" alt="" /> --}}
                    <h2>Restaurant Project</h2>
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->


            <ul class="nav navbar-top-links navbar-right">
                <!-- main dropdown -->
                <li class="dropdown">
                    {{-- <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <span class="top-label label label-danger">3</span><i class="fa fa-envelope fa-3x"></i>
                </a> --}}

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-3x"></i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i>Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="{{ url('logout') }}"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                        </li>
                    </ul>
                    <!-- end dropdown-user -->
                </li>
                <!-- end main dropdown -->
            </ul>
            <!-- end navbar-top-links -->

        </nav>
        <!-- end navbar top -->

        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->


            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu" style=" padding-top:20px">


                    <li class="selected">
                        <a href="{{ route('home') }}"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Food Category
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">

                            <li>
                                <a href="{{ route('add-categories') }}"> -> Add Food Category</a>
                            </li>

                            <li>
                                <a href="{{ route('view-categories') }}"> -> View Food Category</a>
                            </li>


                        </ul>

                        <!-- second-level-items -->
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-list-alt"></i> Food Item
                            <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{ route('add-items') }}"> -> Add Food Item</a>
                            </li>

                            <li>
                                <a href="{{ route('view-items') }}"> -> View Food Item</a>
                            </li>

                        </ul>
                    </li>

                    <li>
                        <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables
                            <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('add-table') }}"> -> Add Table Details</a>
                                </li>
    
                                <li>
                                    <a href="{{ route('view-table') }}"> -> View Table Details</a>
                                </li>
    
                            </ul>
                    </li>


                    <li>
                        <a href="tables.html"><i class="fa fa-table fa-fw"></i> Reservation Tables
                            <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('add-table') }}"> -> Book Table</a>
                                </li>
    
                                <li>
                                    <a href="{{ route('view-table') }}"> -> View Table Details</a>
                                </li>
    
                            </ul>
                    </li>


                    <li>
                        <a href="forms.html"><i class="fa fa-edit fa-fw"></i> About us</a>
                    </li>

                    <li>
                        <a href="forms.html"><i class="fa fa-phone"></i> Contact us</a>
                    </li>



                    <li>
                        <a href="#"><i class="fa fa-wrench fa-fw"></i> Setting<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">

                            <li>
                                <a href="notifications.html">Notifications</a>
                            </li>


                        </ul>
                    </li>


                    <!-- second-level-items -->

                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->

    </div>
    <!-- end wrapper -->

</body>
