<?php
    include_once(file_path.'lib/secureAPI.php');

    $account_id = "3300498749";
    $usuario = new \CompayPhone\usuario();
    $usuario->loadById($account_id);

    $balance = $usuario->getBalance();
?>