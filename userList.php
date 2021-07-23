<?php 
//mostrar os usuários/read
    require 'config.php';

    $sql=$pdo->prepare("SELECT * FROM users");
    $sql->execute();
    $list=$sql->fetchAll();
    foreach ($list as $key=> $value){
        echo $value['email'].' | '.['email'];
        echo('<hr>');
    }
?>