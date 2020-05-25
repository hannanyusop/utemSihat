<?php

$title = 'TODAY MEAL';
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
                <!-- Card header -->
                <div class="card-header">
                    <!-- Title -->
                    <h5 class="h3 mb-0"><?= date('d - M - Y') ?></h5>
                </div>
                <!-- Card body -->
                <div class="card-body">
                    <div class="timeline timeline-one-side" data-timeline-content="axis" data-timeline-axis-style="dashed">
                        <div class="timeline-block">
                              <span class="timeline-step badge-info">
                                <i class="fa fa-check-circle"></i>
                              </span>
                            <div class="timeline-content">
                                <div class="d-flex justify-content-between pt-1">
                                    <div>
                                        <span class="text-muted text-sm font-weight-bold">Lunch</span>
                                    </div>
                                    <div class="text-right">
                                        <small class="text-muted"><i class="fas fa-clock mr-1"></i>2 hrs ago</small>
                                    </div>
                                </div>
                                <h6 class="text-sm mt-1 mb-0">120 KCAL</h6>
                            </div>
                        </div>
                        <div class="timeline-block">
                  <span class="timeline-step badge-info">
                    <i class="fa fa-check-circle"></i>
                  </span>
                            <div class="timeline-content">
                                <div class="d-flex justify-content-between pt-1">
                                    <div>
                                        <span class="text-muted text-sm font-weight-bold">BREAKFAST</span>
                                    </div>
                                    <div class="text-right">
                                        <small class="text-muted"><i class="fas fa-clock mr-1"></i>3 hrs ago</small>
                                    </div>
                                </div>
                                <h6 class="text-sm mt-1 mb-0">70KCAL</h6>
                            </div>
                        </div>
                        <div class="timeline-block">
                  <span class="timeline-step badge-info">
                    <i class="fa fa-check-circle"></i>
                  </span>
                            <div class="timeline-content">
                                <div class="d-flex justify-content-between pt-1">
                                    <div>
                                        <span class="text-muted text-sm font-weight-bold">CUSTOM TITLE</span>
                                    </div>
                                    <div class="text-right">
                                        <small class="text-muted"><i class="fas fa-clock mr-1"></i>5 hrs ago</small>
                                    </div>
                                </div>
                                <h6 class="text-sm mt-1 mb-0">80KCAL</h6>
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