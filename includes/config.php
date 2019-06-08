<?php

include '../langs/lang.php';

/* SCRIPT XML STEAM */
$url = "https://steamcommunity.com/groups/COMMUNITY NAME HERE"."/memberslistxml/?xml=1";
$xml = simplexml_load_file($url);
$avatarfull = $xml->groupDetails->avatarFull;
$groupname = $xml->groupDetails->groupName;
$member = $xml->groupDetails->memberCount;
$groupurl = $xml->groupDetails->groupURL;
$membros = $member;
$comunidade = $groupname;

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
$linguagempredefinida = 'langs/pt.php'; /* OPÇÕES: en.php ou pt.php (Default: pt.php)

?>