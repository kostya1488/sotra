<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

if (!isset($_POST['send'])) {   
    ?>
    <form action="index.php" method="post">
        <table align="center">
            <tr><td>Логин</td></tr>
            <tr><td><input name="login" type="text"></td></tr>
            <tr><td>Пароль</td></tr>
            <tr><td><input name="password" type="password"></td></tr>
            <tr><td><input name="send" type="submit" value="Вход"></td></tr>



    </form>
    <?php
}
else if (isset($_POST['send'])&&!empty($_POST['login'])&&!empty($_POST['password']))
{
    $login = "Admin";
    $password = "puUskm5B";

    if ($login==$_POST['login']&&$password==$_POST['password'])
    {
        header("Location: aut.php?login=".$_POST['login']."&password=".$_POST['password']."");
        exit;
    }



else if ($login!=$_POST['login']&&$password!=$_POST['password']||$login==$_POST['login']&&$password!=$_POST['password']||$login!=$_POST['login']&&$password==$_POST['password'])
{
    echo "Ошибка аторизации!!! <a href='index.php'>Назад</a>";
}

}
else
{
    echo "Ошбика: <a href='index.php'>Назад</a>";
}



?>
</body>
</html>