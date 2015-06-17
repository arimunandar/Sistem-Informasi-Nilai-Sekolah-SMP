<?php 
    session_start();
    if (isset($_SESSION['username'])) {
        header('Location: index.php');
    }else{
        $baseurl = "http://".$_SERVER['SERVER_NAME'].dirname($_SERVER["REQUEST_URI"]."?")."/";
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<!--Head-->
<head>
    <meta charset="utf-8" />
    <title>Login</title>

    <meta name="description" content="login page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="<?php echo $baseurl; ?>dashboard/assets/img/favicon.png" type="image/x-icon">

    <!--Basic Styles-->
    <link href="<?php echo $baseurl; ?>dashboard/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo $baseurl; ?>dashboard/assets/css/font-awesome.min.css" rel="stylesheet" />
</head>
<!--Head Ends-->
<!--Body-->
<body style="padding-top: 150px;">
<div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
        <h2>Please Sign In</h2>
        <form class="form-horizontal" role="form" method="post">
            <div class="form-group">
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="username" placeholder="Enter Username">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10"> 
                    <input type="password" class="form-control" name="password" placeholder="Enter password">
                </div>
            </div>
            <div class="form-group"> 
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary btn-block" name="signin">Sign In</button>
                </div>
            </div>
        </form>
        <?php require_once('core/login_proses.php'); ?>
    </div>
    <div class="col-sm-4"></div>
</div>
    
    <!--Basic Scripts-->
    <script src="<?php echo $baseurl; ?>dashboard/assets/js/jquery-2.0.3.min.js"></script>
    <script src="<?php echo $baseurl; ?>dashboard/assets/js/bootstrap.min.js"></script>
</body>
<!--Body Ends-->
</html>

<?php
    }
?>

