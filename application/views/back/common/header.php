<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?=$title?> || Admin Panel</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="icon" href="<?= base_url() ?>assets/back/img/favicon.png" >
        <link rel="stylesheet" href="<?= base_url() ?>assets/back/bootstrap/css/bootstrap.min.css" >
        <link rel="stylesheet" href="<?= base_url() ?>assets/back/extra/font-awesome.min.css" >
        <link rel="stylesheet" href="<?= base_url() ?>assets/back/extra/ionicons.min.css" >
        
        <?php //echo $cssincludes ?>
        
        <link rel="stylesheet" href="<?= base_url() ?>assets/back/dist/css/AdminLTE.min.css" >
        <link rel="stylesheet" href="<?= base_url() ?>assets/back/dist/css/skins/_all-skins.min.css" >
        <link rel="stylesheet" href="<?= base_url() ?>assets/back/css/custom.css" >
        <!--[if lt IE 9]>
        <script src="<?= base_url() ?>assets/back/extra/html5shiv.min.js"></script>
        <script src="<?= base_url() ?>assets/back/extra/respond.min.js"></script>
        <![endif]-->
        
        <script>
            var BASE_URL = '<?= base_url() ?>';

            function checkDelete() {
                var chk = confirm("Are You Sure To Delete This !");
                
                if (chk) {
                    return true;
                } else {
                    return false;
                }
            }
        </script>

    </head>
    <body class="sidebar-mini skin-blue fixed">
        <div class="wrapper">
            <!-- header  -->
            <header class="main-header">
                <!-- Logo -->
                <a href="<?= base_url() ?>admin_panel" class="logo">
                    <span class="logo-mini"><b>Admin Panel</b></span>
                    <span class="logo-lg"><b>Admin Panel</b></span>
                </a>
                <!-- header navbar -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- user account -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?= base_url() ?>assets/back/images/profile/<?php echo $this->back_user->info->image ?>" class="user-image" alt="<?php echo $this->back_user->info->image ?>">
                                    <span class="hidden-xs"><?php echo $this->back_user->info->first_name . ' ' . $this->back_user->info->last_name ?> &nbsp; As &nbsp;
                                        <?php
                                        if ($this->back_user->info->level == 0) {
                                            echo '<span class="label label-primary">Manager</span>';
                                        } elseif ($this->back_user->info->level == 1) {
                                            echo '<span class="label label-warning">Admin</span>';
                                        } elseif ($this->back_user->info->level == 2) {
                                            echo '<span class="label label-success">Super Admin</span>';
                                        }
                                        ?>
                                    </span>        
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="<?= base_url() ?>assets/back/images/profile/<?php echo $this->back_user->info->image ?>" class="img-circle" alt="User Image">
                                        <p>
                                            <?php echo $this->back_user->info->first_name . ' ' . $this->back_user->info->last_name ?>
                                            <b><?php echo $this->back_user->info->email ?></b>
                                        </p>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-right">
                                            <a href="<?=site_url("admin_panel/logout/" . $this->security->get_csrf_hash())?>" class="btn btn-default btn-flat">Logout</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>