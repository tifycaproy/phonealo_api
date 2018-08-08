<?php
    include_once(file_path.'lib/secureAPI.php');
    echo "prueba--------";
    $server = new \CompayPhone\serversip($this->data['usu_srv_cod']);
    $server->load();
    var_dump($server->data['srv_name']);
      
?>

