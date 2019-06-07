# Steam Members Panel

[EN]:
This web panel helps your CSGO community or other type of community with a amazing variety of functions done for you.

This panel has 2 languages, portuguese and english.

[PT]:
Este painel ajuda a tua comunidade de CSGO ou outro tipo de comunidade com uma variedade incrível de funções feitas para ti.

Este painel contém 2 linguagens, português e inglês.

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

Config.php
```php
<?php

include '../langs/lang.php'; /* LOCALIZAÇÃO DAS TRADUÇÕES (PT & EN) */

/* SCRIPT XML STEAM */
$url = "https://steamcommunity.com/groups/".$gruposteam."/memberslistxml/?xml=1";
$xml = simplexml_load_file($url);
$avatarfull = $xml->groupDetails->avatarFull;
$groupname = $xml->groupDetails->groupName;
$member = $xml->groupDetails->memberCount;
$groupurl = $xml->groupDetails->groupURL;


/* CONFIGURAÇÕES BÁSICAS DO PAINEL */
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = '';


$licença = 'Esta versão é gratuita';
$membros = $member;
$gruposteam = 'https://steamcommunity.com/groups/TugaArmyCM'; /* COLOCA AQUI O LINK DO GRUPO DA STEAM */
$logodacomunidade = 'http://tugaarmy.pt/assets/images/logo.png'; /* COLOCA AQUI O LINK DO LOGÓTIPO DA TUA COMUNIDADE (PNG) */
$comunidade = $groupname;
?>
```

# Other things related to the plugin
- [Demo website](https://tugaarmy.pt/membros/)
- [My Steam](https://steamcommunity.com/id/ShutAP1337)
- My discord: ShutUP#4249
