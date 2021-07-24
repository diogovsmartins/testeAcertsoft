<?php 
//criar usuários e inserilos no BD
    
    require '../config.php';

    $email=filter_input(INPUT_POST, 'email');
    $password=filter_input(INPUT_POST, 'password');

    $sql=$pdo->prepare("INSERT INTO users (email, password) VALUES (:email, :password)");
    $sql->bindValue(':email', $email);
    $sql->bindValue(':password', $password);
    $sql->execute();
    header("location:../index.php")
?>