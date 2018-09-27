<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">Apartment Rental</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
        <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                </li>
                <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                </li>
                <li class="divider"></li>
                <li><a href="index"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li class="sidebar-search" style="text-align:center;">
                    <div class="input-group custom-search-form">
                        <!-- <input type="text" class="form-control" placeholder="Search..."> -->
                        <!-- <span class="input-group-btn"> -->
                        <!-- <button class="btn btn-default" type="button"> -->
                            <!-- <i class="fa fa-search"></i> -->
                        <!-- </button> -->
                    <!-- </span> -->
					<label>ADMINISTRATOR</label>
                    </div>
                    <!-- /input-group -->
                </li>
                <li>
                    <a href="index?route=dashboard"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                </li>
                <li>
                    <a href="index?route=rooms"><i class="fa fa-table fa-fw"></i> Rooms</a>
                </li>
                <li>
                    <a href="index?route=applicants"><i class="fa fa-table fa-fw"></i> Applicants</a>
                </li>
                <li>
                    <a href="index?route=tenants"><i class="fa fa-table fa-fw"></i> Tenants</a>
                </li>
                <li>
                    <a href="index?route=payments"><i class="fa fa-table fa-fw"></i> Payments</a>
                </li>
                <li>
                    <a href="index?route=complaints"><i class="fa fa-table fa-fw"></i> Complaints</a>
                </li>
                <li>
                    <a href="index?route=notifications"><i class="fa fa-table fa-fw"></i> Notifications</a>
                </li>
                <!-- <li>
                    <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#">Second Level Item</a>
                        </li>
                        <li>
                            <a href="#">Second Level Item</a>
                        </li>
                        <li>
                            <a href="#">Third Level <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li> -->
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>