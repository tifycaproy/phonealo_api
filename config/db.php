<?php
global $db;
global $a2b;

if (strpos(base_path, 'localhost') > 0) {
    $db_hostname = "localhost";
    $db_database = "call53clients";
    $db_username = "root";
    $db_password = "uamundo78020710681phonealo.2018";
} else {
    $db_hostname = "localhost";
    $db_database = "call53clients";
    $db_username = "uappphonealo";
    $db_password = "App78020710681.phonealo2018"; 
    // $db_username = "uc53clie";
    // $db_password = "Agabama18";
}
$db = new MeekroDB($db_hostname, $db_username, $db_password, $db_database);

if (strpos(base_path, 'localhost') > 0) {
    $acu_hostname = "localhost";
    $acu_database = "amundocuba";
    $acu_username = "root";
    $acu_password = "uamundo78020710681phonealo.2018";
} else {
    $acu_hostname = "localhost";
    $acu_database = "amundocuba";
    $acu_username = "phonealoamundo";
    $acu_password = "uamundo78020710681phonealo.2018";
}
$acu = new MeekroDB($acu_hostname, $acu_username, $acu_password, $acu_database);


//mysql_query("SET CHARSET 'utf8'");
$db->query("SET CHARSET 'latin1'");
$acu->query("SET CHARSET 'latin1'");

