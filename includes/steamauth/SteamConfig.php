<?php
include '../config.php';

$steamauth['apikey'] = $apikeysteam; /* API KEY, QUE PODE SER PEGADA AQUI: https://steamcommunity.com/dev/apikey */
$steamauth['domainname'] = $linkdowebsite; // The main URL of your website displayed in the login page
$steamauth['logoutpage'] = $linkdowebsite; // Page to redirect to after a successfull logout (from the directory the SteamAuth-folder is located in) - NO slash at the beginning!
$steamauth['loginpage'] = $linkdowebsite; // Page to redirect to after a successfull login (from the directory the SteamAuth-folder is located in) - NO slash at the beginning!

if (empty($steamauth['apikey'])) {die("<style>
    body {
        background-color: #202020;
    }
    </style>
    <div style='margin: 5 15; padding-top: 150px;'> 
    <div style='display: block; height: 110px; font-family: 'Segoe UI',Arial,sans-serif; text-color: #fff; width: 100%; background-color: #252525; border-radius: 5px; border: 2px solid red; text-align: center;'>
    <a style='color: #ffffff; padding-top: 15px;'><br>SteamAuth:<br>Please supply an API-Key!<br>Find this in steamauth/SteamConfig.php, Find the '\$steamauth['apikey']' Array. </a>
    </div>
    </div>");}
if (empty($steamauth['domainname'])) {$steamauth['domainname'] = $_SERVER['SERVER_NAME'];}
if (empty($steamauth['logoutpage'])) {$steamauth['logoutpage'] = $_SERVER['PHP_SELF'];}
if (empty($steamauth['loginpage'])) {$steamauth['loginpage'] = $_SERVER['PHP_SELF'];}
?>
