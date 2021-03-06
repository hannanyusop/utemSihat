
<?php

$title = 'DASHBOARD';
$links = [
        'title' => 'url'
];

?>
<!DOCTYPE html>
<html>

<?php require('include/head.php'); ?>

<body>
    <?php require('include/nav.php') ?>
    <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Topnav -->
        <?php require ('include/topnav.php') ?>
        <!-- Header -->
        <div class="header bg-primary pb-6">
            <div class="container-fluid">
                <div class="header-body">
                    <div class="row align-items-center py-4">
                        <div class="col-lg-6 col-7">
                            <?php include ('include/breadcrumb.php') ?>
                        </div>
                        <div class="col-lg-6 col-5 text-right">
                            <a href="#" class="btn btn-sm btn-neutral">Filters</a>
                        </div>
                    </div>
                    <!-- Card stats -->
                </div>
            </div>
        </div>
        <!-- Page content -->
        <div class="container-fluid mt--6">

            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="h3 mb-0">Hi! <?= $user_name ?></h5>
                        </div>
                        <div class="card bg-gradient-default">
                            <!-- Card body -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0 text-white">Today Calories</h5>
                                        <span class="h2 font-weight-bold mb-0 text-white">0/3000</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-white text-dark rounded-circle shadow">
                                            <i class="fa fa-hamburger"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3 mb-0 text-sm">
                                    <span class="text-white mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                                    <span class="text-nowrap text-light">Since last month</span>
                                </p>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row shortcuts px-4">
                                <a href="meal-today.php" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-red">
                      <i class="ni ni-calendar-grid-58"></i>
                    </span>
                                    <small>Today Meal</small>
                                </a>
                                <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-orange">
                      <i class="fa fa-utensils"></i>
                    </span>
                                    <small>Add Meal</small>
                                </a>
                                <a href="food-list.php" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-info">
                      <i class="fa fa-cookie"></i>
                    </span>
                                    <small>Food List</small>
                                </a>
                                <a href="report.php" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-green">
                      <i class="ni ni-books"></i>
                    </span>
                                    <small>Reports</small>
                                </a>
                                <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-yellow">
                      <i class="fa fa-trophy"></i>
                    </span>
                                    <small>Records</small>
                                </a>
                                <?php if($user_is_admin == 1){ ?>
                                    <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-purple">
                      <i class="fa fa-exchange-alt"></i>
                    </span>
                                        <small>Admin</small>
                                    </a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <!-- Card header -->
                <div class="card-header">
                    <!-- Title -->
                    <h5 class="h3 mb-0">Progress track</h5>
                </div>
                <!-- Card body -->
                <div class="card-body">
                    <!-- List group -->
                    <ul class="list-group list-group-flush list my--3">
                        <li class="list-group-item px-0">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <!-- Avatar -->
                                    <a href="#" class="avatar rounded-circle">
                                        <img alt="Image placeholder" src="../assets/img/theme/bootstrap.jpg">
                                    </a>
                                </div>
                                <div class="col">
                                    <h5>Protein</h5>
                                    <div class="progress progress-xs mb-0">
                                        <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item px-0">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <!-- Avatar -->
                                    <a href="#" class="avatar rounded-circle">
                                        <img alt="Image placeholder" src="../assets/img/theme/angular.jpg">
                                    </a>
                                </div>
                                <div class="col">
                                    <h5>Sugar</h5>
                                    <div class="progress progress-xs mb-0">
                                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item px-0">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <!-- Avatar -->
                                    <a href="#" class="avatar rounded-circle">
                                        <img alt="Image placeholder" src="../assets/img/theme/sketch.jpg">
                                    </a>
                                </div>
                                <div class="col">
                                    <h5>Calorie</h5>
                                    <div class="progress progress-xs mb-0">
                                        <div class="progress-bar bg-red" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%;"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item px-0">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <!-- Avatar -->
                                    <a href="#" class="avatar rounded-circle">
                                        <img alt="Image placeholder" src="../assets/img/theme/react.jpg">
                                    </a>
                                </div>
                                <div class="col">
                                    <h5>Cholesterol</h5>
                                    <div class="progress progress-xs mb-0">
                                        <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>


        </div>
    </div>
</body>

<?php require('include/script.php') ?>
</html>