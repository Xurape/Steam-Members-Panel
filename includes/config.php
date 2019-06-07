<?php

include '../langs/lang.php';

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


$licença = '';
$membros = $member;
$gruposteam = ''; /* COLOCA AQUI O LINK DO GRUPO DA STEAM */
$logodacomunidade = ''; /* COLOCA AQUI O LINK DO LOGÓTIPO DA TUA COMUNIDADE (PNG) */
$comunidade = $groupname;

?>