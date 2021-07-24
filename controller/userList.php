<?php 
//mostrar os usuários/read
    require '../database/config.php';
    require '../view/showUser.php';


    $sql=$pdo->prepare("SELECT * FROM users");
    $sql->execute();
    $list=$sql->fetchAll();

    listUsers($list);
?>