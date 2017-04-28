<!DOCTYPE html>
<html lang="en">
<?php
$root = $_SERVER['DOCUMENT_ROOT'].'/bvg/';
include($root."/config/config.php");
?>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BVG</title>
   <link  rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css">
    <link href="<?php echo base_url(); ?>/assets/css/font-awesome.min.css" rel="stylesheet">
   <link type="text/css" href="<?php echo base_url(); ?>/assets/css/custom.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/css/jqvmap.min.css" rel="stylesheet"/>
    <link href="<?php echo base_url(); ?>/assets/css/sweetalert.css" rel="stylesheet"/>
    <!-- <link href="<?php// echo base_url(); ?>/assets/css/daterangepicker.css" rel="stylesheet"> -->
    <link href="<?php echo base_url(); ?>/assets/css/jquery.dataTables.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/build/css/custom.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/css/autocomplete.css" rel="stylesheet">
     <!--   <link href="<?php //echo base_url(); ?>/assets/css/custom.min.css" rel="stylesheet"> -->
     <link href="<?php echo base_url(); ?>/assets/css/tablescss/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/css/tablescss/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/css/angular-datepicker.min.css" rel="stylesheet">
     


     <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.4.1/moment-timezone-with-data.js"></script>
  
    <link href="<?php echo base_url(); ?>/assets/css/admin-style.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>/assets/js/angular.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/angular-route.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/angular-validation-match.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/autocomplete.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-google-chart/0.1.0/ng-google-chart.js" type="text/javascript"></script>    
    <script src="<?php echo base_url(); ?>/assets/js/angular-datepicker.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/alasql.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/xlsx.core.min.js"></script>
    <script src="<?php echo base_url(); ?>/config/app.js"></script>
    <script src="<?php echo base_url(); ?>/controllers/globalcontrollers.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/ngStorage.min.js"></script>  
    <script src="<?php echo base_url(); ?>/controllers/aqua/aquacontrollers.js"></script>  
    <script src="<?php echo base_url(); ?>/controllers/LoginController.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/sweetalert.min.js"></script>   
   
  </head>
  <body class="nav-md" ng-app="app">
    <div class="container body" ng-controller="Adminbarctrl">
      <div class="main_container">
      <?php include('sidebar.php'); ?>
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="" >
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false" >
                    <img src="<?php echo base_url(); ?>/assets/images/img.jpg" alt="">{{sname}}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="#/myaccount"> My Account</a></li>
                   <!-- <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li> -->
                    <li><a href="javascript:;" ng-click="logout();"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>