<!DOCTYPE html>
<html>
<head>
    <title>Логин</title>
</head>
<body>
<h1>Что бы войти на сайт - введите логин/пароль</h1>
<br>
   <form name = "test" action = "authoriz.php" method = "post">
        <label>Логин:</label>
        <input type = "text" name = "login" placeholder = "Введите логин"><br>
        <label>Пароль: </label>
        <input type = "password" name = "password" placeholder = "Введите пароль"><br>
        <button>Login</button>
    </form>
<form name = "test" action = "func\insadd.php" method = "post">
    <button>Add user</button>
</form>
</body>
</html>	