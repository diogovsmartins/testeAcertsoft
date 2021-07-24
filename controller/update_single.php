<form action="POST">
    <label for="email">Email:</label>
    <input type="text" name="email">
    <label for="password">Password:</label>
    <input type="text" name="password">
    <button>Submit</button>
</form>

<?php 
    require '../database/config.php';

    if (isset($_GET['id'])){
        echo $_GET['id'];
        $sql=$pdo->prepare("SELECT * FROM users WHERE id=:id");
        $sql->bindValue(':id', $_GET['id']);
        $sql->execute();
        print_r($sql->fetchAll());
        
    }
    else{
        echo 'Error';
        exit;

    }

?>