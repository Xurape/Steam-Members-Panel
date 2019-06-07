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

# Functions
- Login System 
- Language System
- VIP Manager Page
- Account Manager Page (SOON)
- Admin Page (SOON)
- Buy VIP w/ Auto Activation (SOON)
- Gift VIP w/ Auto Activation (SOON)
- Discord Integration (SOON)
- MySQL Support
- DeckPanel Support

# Some Screenshots of the panel
## Login Page
![image](https://user-images.githubusercontent.com/41197101/59125477-610fd400-895a-11e9-92ea-490b2511ad28.png)

## Index Page
![image](https://user-images.githubusercontent.com/41197101/59125513-75ec6780-895a-11e9-8810-da396d4d16eb.png)

## Index (VIP Tabs)
![image](https://user-images.githubusercontent.com/41197101/59125548-8dc3eb80-895a-11e9-8def-083d10237908.png)

## Index (Accounts Tabs)
![image](https://user-images.githubusercontent.com/41197101/59125579-a7653300-895a-11e9-9733-0ce4b50c40c5.png)

## My VIP
![image](https://user-images.githubusercontent.com/41197101/59125290-c6af9080-8959-11e9-977c-4f08baf4db89.png)

## Language System
![image](https://user-images.githubusercontent.com/41197101/59125603-b6e47c00-895a-11e9-9c1e-f67847fd1a0e.png)

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
