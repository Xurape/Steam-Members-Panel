<?php
include '../langs/lang.php';

/* SCRIPT XML STEAM */
$url = "https://steamcommunity.com/groups/COMUNIDADEAQUI"."/memberslistxml/?xml=1";
$xml = simplexml_load_file($url);
$avatarfull = $xml->groupDetails->avatarFull;
$groupname = $xml->groupDetails->groupName;
$member = $xml->groupDetails->memberCount;
$groupurl = $xml->groupDetails->groupURL;
$membros = $member;
$comunidade = $groupname;

/* CONFIGURAÇÕES BÁSICAS DO PAINEL */
$db_host = 'localhost';
$db_username = '';
$db_password = '';
$db_name = '';

$gruposteam = 'https://steamcommunity.com/groups/COMUNIDADEAQUI'; /* COLOCA AQUI O LINK DO GRUPO DA STEAM */
$logodacomunidade = 'logotipo da comunidade em .png (link)'; /* COLOCA AQUI O LINK DO LOGÓTIPO DA TUA COMUNIDADE (PNG) */
$websitedebans = ''; /* COLOCA AQUI O LINK DO WEBSITE DE BANIMENTOS */
$discord = 'https://discord.gg/'; /* LINK DO SERVIDOR DE DISCORD */
$apikeysteam = ''; /* API KEY, QUE PODE SER PEGADA AQUI: https://steamcommunity.com/dev/apikey */
$linkdowebsite = ''; /* LINK DO WEBSITE ONDE ESTÁ INSTALADO O PAINEL */

/* CONFIGURAÇÕES EXTRA */
$licença = '';
$linguagempredefinida = 'PT'; /* OPÇÕES: en.php ou pt.php (Default: pt.php)



?>