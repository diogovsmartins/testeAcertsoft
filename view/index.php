<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funko Brods</title>
    <link rel="stylesheet" href="style.css">
    <script src="showUser.js"defer></script>
</head>
<body>
        <form method="POST" action="./controller/create_user.php">

            <label for="">Email:</label>
            <input type="text" name="email"> 
            <label for="">Password:</label>
            <input type="password" name="password">
            
            <button>Submit</button>
        </form>
        <a href="../controller/userList.php">List</a>
</body>
</html>