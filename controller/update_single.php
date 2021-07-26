<h2>User update page</h2>

<form method="POST">
    <label for="email">Email:</label>
    <input type="text" name="email">
    <label for="password">Password:</label>
    <input type="text" name="password">
    <button name="submit">Submit</button>
</form> 

<?php 
    require '../database/config.php';

    if (isset($_GET['id'])){
        $sql=$pdo->prepare("SELECT * FROM users WHERE id=:id");
        $sql->bindValue(':id',$_GET['id']);
        $sql->execute();
        print_r($sql->fetchAll());
        
    }
    else{
        echo 'Something went wrong!';
        exit;
    }
    $id=[$_GET['id']];
     if(isset ($_POST['submit'])){
        $email=filter_input(INPUT_POST, 'email');
        $password=filter_input(INPUT_POST, 'password');
         echo $email.' '.$password; 
        try{
            $connection=new PDO("mysql:dbname=".$db_name. ";host=".$db_host, $db_user. $db_password);
            $user=[
                "email"=>$_POST['email'],
                "password"=>$_POST['password']
                ];

            $sql="UPDATE users SET email=:email, password=:password WHERE id=:id";
            $statement=$connection->prepare($sql);
            $statement->execute($user);
        }
        catch(PDOException $error){
            echo'Something went wrong';
            
        }

        }

?>