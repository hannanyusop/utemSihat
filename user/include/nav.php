<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header  d-flex  align-items-center">
            <a class="navbar-brand" href="dashboard.html">
                <img src="../../assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
            </a>
            <div class=" ml-auto ">
                <!-- Sidenav toggler -->
                <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
                    <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.php">
                            <i class="fa fa-home  text-blue"></i>
                            <span class="nav-link-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="meal-today.php">
                            <i class="fa fa-calendar  text-green"></i>
                            <span class="nav-link-text">Today Meals</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="food-list.php">
                            <i class="fa fa-utensils  text-orange"></i>
                            <span class="nav-link-text">Food List</span>
                        </a>
                    </li>
                    <?php if($user_is_admin == 1){ ?>
                        <li class="nav-item">
                            <a class="nav-link" href="exchange-admin.php">
                                <i class="fa fa-exchange-alt  text-red"></i>
                                <span class="nav-link-text">Switch To Admin</span>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</nav>
