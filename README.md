# Steam Members Panel

[EN]:
This web panel helps your CSGO community or other type of community with a amazing variety of functions done for you.

This panel has 2 languages, portuguese and english.

[PT]:
Este painel ajuda a tua comunidade de CSGO ou outro tipo de comunidade com uma variedade incrível de funções feitas para ti.

Este painel contém 2 linguagens, português e inglês.

Check all changelogs [here](https://github.com/ShutAP1337/Steam-Members-Panel/blob/master/CHANGELOG.md)

# Requirements:
- [PHP](https://php.net/) (Version 5.6.0 or newer)
- [MySQL](https://www.mysql.com/)
- [phpMyAdmin](https://www.phpmyadmin.net/) (To manage the database & upload the .SQL)

# Functions
- Login System 
- Language System
- VIP Manager Page
- Staff List Page
- Staff Applications
- Account Manager Page (SOON)
- Admin Page (SOON)
- Buy VIP w/ Auto Activation (SOON)
- Gift VIP w/ Auto Activation (SOON)
- Discord Integration (SOON)
- MySQL Support
- [DeckPanel](https://deckhost.pt/cart.php?a=confproduct&i=0) Support

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
config.php
```php
<?php

include '../langs/lang.php';

/* SCRIPT XML STEAM */
$groupurl = "https://steamcommunity.com/groups/COMMUNITY NAME HERE";

/* CONFIGURAÇÕES BÁSICAS DO PAINEL */
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = '';
$gruposteam = ''; /* COLOCA AQUI O LINK DO GRUPO DA STEAM */
$logodacomunidade = ''; /* COLOCA AQUI O LINK DO LOGÓTIPO DA TUA COMUNIDADE (PNG) */
$websitedebans = ''; /* COLOCA AQUI O LINK DO WEBSITE DE BANIMENTOS */
$discord = ''; /* LINK DO SERVIDOR DE DISCORD */
$apikeysteam = ''; /* API KEY, QUE PODE SER PEGADA AQUI: https://steamcommunity.com/dev/apikey */
$linkdowebsite = ''; /* LINK DO WEBSITE ONDE ESTÁ INSTALADO O PAINEL */

/* CONFIGURAÇÕES EXTRA */
$licença = '';
$linguagempredefinida = 'PT'; /* OPÇÕES: EN ou PT (Default: PT)
?>
```

# Other things related to the plugin
- [Demo website](https://tugaarmy.pt/membros/)
- [My Steam](https://steamcommunity.com/id/ShutAP1337)
- My discord: ShutUP#4249
