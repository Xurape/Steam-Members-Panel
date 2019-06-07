# Steam Members Panel
This web panel helps your CSGO community or other type of community with a amazing variety of functions done for you.

# Requirements:
- [PHP](https://php.net/) (Version 5.6.0 or newer)
- [MySQL](https://www.mysql.com/)
- [phpMyAdmin](https://www.phpmyadmin.net/) (To manage the database & upload the .SQL)

# Configuration Examples
SteamConfig.php
```php
<?php
$steamauth['apikey'] = "Chave que pode ser pegada aqui: https://steamcommunity.com/dev/apikey"; 
$steamauth['domainname'] = "dominio.com/membros"; 
$steamauth['logoutpage'] = "dominio.com/membros"; 
$steamauth['loginpage'] = "dominio.com/membros"; 

if (empty($steamauth['apikey'])) {die("<div style='display: block; width: 100%; background-color: red; text-align: center;'>SteamAuth:<br>Please supply an API-Key!<br>Find this in steamauth/SteamConfig.php, Find the '<b>\$steamauth['apikey']</b>' Array. </div>");}
if (empty($steamauth['domainname'])) {$steamauth['domainname'] = $_SERVER['SERVER_NAME'];}
if (empty($steamauth['logoutpage'])) {$steamauth['logoutpage'] = $_SERVER['PHP_SELF'];}
if (empty($steamauth['loginpage'])) {$steamauth['loginpage'] = $_SERVER['PHP_SELF'];}
?>
```

# Other things related to the plugin
- [Demo website](https://tugaarmy.pt/membros/)
- [My Steam](https://steamcommunity.com/id/ShutAP1337)
- My discord: ShutUP#4249
