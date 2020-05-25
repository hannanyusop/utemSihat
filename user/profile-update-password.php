<?php require('include/head.php'); ?>

<?php

$title = 'PROFILE SETTING';
$links = [
    'title' => 'url'
];

    if (isset($_POST['reset_password'])) {

        $old = $_POST["old-password"];

        $new = $_POST["new-password"];

        if (strlen($new) < 5) {
            echo "<script>alert('Please enter at least 5 character!!');window.location='profile-update-password.php'</script>";
        }

        if (password_verify($old, $user['password'])) {

            if ($new == $old) {
                echo "<script>alert('Please enter different password!');window.location='profile-update-password.php'</script>";
            }

            $password = password_hash($new, PASSWORD_BCRYPT);

            if (!$db->query("UPDATE users SET password='$password' WHERE id=$user_id")) {
                echo "Error: Updating password." . $db->error;
                exit();
            } else {
                echo "<script>alert('Password has been reset!');window.location='profile-update-password.php'</script>";
            }
        } else {
            echo "<script>alert('Old password do not match!');window.location='profile-update-password.php'</script>";
        }
    }
?>
<!DOCTYPE html>
<html>

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
                    <h3 class="mb-0">Update Password</h3>
                </div>
                <!-- Card body -->
                <div class="card-body">
                    <form method="post">
                        <div class="form-group row">
                            <label for="old-password" class="col-md-2 col-form-label form-control-label">Old Password</label>
                            <div class="col-md-10">
                                <input class="form-control" name="old-password" type="password" id="old-password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="new-password" class="col-md-2 col-form-label form-control-label">New Password</label>
                            <div class="col-md-10">
                                <input class="form-control" name="new-password" type="password" id="new-password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="confirm-password" class="col-md-2 col-form-label form-control-label">Confirm Password</label>
                            <div class="col-md-10">
                                <input class="form-control" name="confirm-password" type="password" id="confirm-password">
                            </div>
                        </div>

                        <input type="submit" value="SUBMIT" class="btn btn-info" name="reset_password">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

<?php require('include/script.php') ?>
</html>