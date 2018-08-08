<?php
global $db;
global $a2b;

if (strpos(base_path, 'localhost') > 0) {
    $db_hostname = "******";
    $db_database = "*************";
    $db_username = "*****";
    $db_password = "************";
} else {
    $db_hostname = "*********";
    $db_database = "*********";
    $db_username = "*********";
    $db_password = "*********";
}
$db = new MeekroDB($db_hostname, $db_username, $db_password, $db_database);

if (strpos(base_path, '*******') > 0) {
    $acu_hostname = "*********";
    $acu_database = "*******";
    $acu_username = "*****";
    $acu_password = "********";
} else {
    $acu_hostname = "*********";
    $acu_database = "*********";
    $acu_username = "******";
    $acu_password = "*********";
}
$acu = new MeekroDB($acu_hostname, $acu_username, $acu_password, $acu_database);


//mysql_query("SET CHARSET 'utf8'");
$db->query("SET CHARSET 'latin1'");
$acu->query("SET CHARSET 'latin1'");

