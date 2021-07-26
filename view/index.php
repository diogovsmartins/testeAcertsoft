<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MYCRUD</title>
    <link rel="stylesheet" href="../styles/index.css">
</head>
<body>
    <header id="header">
        <h1>Cadastro de Usuário</h1>
    </header>
    <div id="divForm">
    <form method="POST" action="../controller/create_user.php">
            <label for="">Email:</label>
            <input style="margin-right:40px;" type="text" name="email"> 
            <br>
            <label for="">Password:</label>
            <input type="password" name="password">

            <button id="indexButton">Submit</button>
        </form>
    </div>
    <button id="indexButton"><a href="../controller/userList.php">List Users</a></button>

</body>
</html>