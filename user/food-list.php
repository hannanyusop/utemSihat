<?php

$title = 'FOOD LIST';
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
                            <div class="col-lg-6 col-7">
                                <?php include ('include/breadcrumb.php') ?>
                            </div>
                        </div>
                    </div>
                    <!-- Card stats -->
                </div>
            </div>
        </div>
        <!-- Page content -->
        <div class="container-fluid mt--6">

            <div class="card">
                <div class="card-header py-0">
                    <!-- Search form -->
                    <form>
                        <div class="form-group mb-0">
                            <div class="input-group input-group-lg input-group-flush">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <span class="fas fa-search"></span>
                                    </div>
                                </div>
                                <input type="search" class="form-control" placeholder="Search">
                            </div>
                        </div>
                    </form>
                </div>
            </div>


            <div class="row">
                <div class="col-md-4 col-xs-6">
                    <div class="card">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <!-- Avatar -->
                                    <a href="#" class="avatar avatar-xl">
                                        <img alt="Image placeholder" src="../assets/img/foods/01.png">
                                    </a>
                                </div>
                                <div class="col ml--2">
                                    <h4 class="mb-0">
                                        <a href="#!">FRIED CHICKEN</a>
                                    </h4>
                                    <small>30g Cal/20g Cols/10g Sugar/50g Protien</small>
                                </div>
                                <div class="col-auto">
                                    <button type="button" class="btn btn-sm btn-primary">Add</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

<?php require('include/script.php') ?>
</html>