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

        </div>
    </div>
</body>

<?php require('include/script.php') ?>
</html>