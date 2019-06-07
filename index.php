<?php
require 'includes/steamauth/steamauth.php';
require 'includes/steamauth/SteamConfig.php';
require 'includes/config.php';
require 'langs/lang.php';

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Painel desenvolvido para poderes interagir com os nossos servidores!">
        <meta name="author" content="ShutAP">
        <link rel="shortcut icon" href="<? echo $logodacomunidade ?>">
        <title><? echo $comunidade ?></title>
		    <link rel="stylesheet" href="assets/plugins/morris/morris.css">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">        
        <link href="./assets/docs.css" rel="stylesheet">
        <link href="./css/flag-icon.css" rel="stylesheet">        
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <script src="assets/js/modernizr.min.js"></script>
    </head>
    <body class="fixed-left">
    <?php
      if(!isset($_SESSION['steamid'])) {

        include 'includes/login.php';
        
      } else {
        include ('includes/steamauth/userInfo.php');

        include 'includes/body.php';
      }
      ?>
    </body>
</html>