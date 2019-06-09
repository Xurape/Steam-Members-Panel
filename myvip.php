<?php

require 'includes/steamauth/steamauth.php';
require 'includes/steamauth/SteamConfig.php';
require 'includes/config.php';
require 'langs/lang.php';

?>

<!DOCTYPE html>
<html>
<title><? echo $comunidade ?> - My VIP</title>
<?php
	
require 'includes/header.php';

?>
<body class="fixed-left">
<?php
if(!isset($_SESSION['steamid'])) {
	include 'includes/login.php'; 
      } else {
        include ('includes/steamauth/userInfo.php');
        include 'includes/myvip.php';
      }
?>
</body>
</html>
