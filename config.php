<?php 

$db_name='db_acertsoft';
$db_host='localhost:3307';
$db_user='root';
$db_password='';

$pdo= new PDO("mysql:dbname=".$db_name. ";host=".$db_host, $db_user. $db_password);

?>