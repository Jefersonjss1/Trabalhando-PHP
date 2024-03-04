<?php

$dbHost = 'Localhost';
$dbUserName = 'root';
$dbPassword = '';
$dbName = 'dbSiteClientes';

$con = new mysqli($dbHost, $dbUserName, $dbPassword, $dbName);

if($con -> connect_errno) {
    echo "Erro";
    exit();
}
?>
