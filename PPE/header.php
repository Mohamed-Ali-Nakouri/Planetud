<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="home.php">PPe-project</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">

        <!-- /.dropdown -->

        <!-- /.dropdown -->

        <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="deconnexion.php">
                <i class="fa fa-sign-out fa-fw"></i>
            </a>

            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">

                <li>
                    <a href="home.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                </li>
                <li>
                    <a href="user_list.php"><i class="fa fa-user fa-fw"></i> Users</a>

                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="Car_list.php"><i class="fa fa-automobile fa-fw"></i> Cars</span></a>

                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="workorder_list.php"><i class="fa fa fa-tasks  fa-fw"></i> Work Order</span></a>

                    <!-- /.nav-second-level -->
                </li>
                <?php if($_SESSION['type']=='worker')
                 {?>
                <li>
                    <a href="take_it.php"><i class="fa fa fa-tasks  fa-fw"></i> Task List</span></a>

                    <!-- /.nav-second-level -->
                </li>
              <?php } ?>
              </ul>

        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>
