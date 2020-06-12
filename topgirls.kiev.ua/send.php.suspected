<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .red {
            color: #ff5273
        }

        .upper {
            text-transform: uppercase
        }

        body {
            margin: 0
        }

        body {
            width: 100%;
            height: 100%;
            margin: 0;
            font-family: "Roboto Condensed", -apple-system, BlinkMacSystemFont, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #3c3c3c;
            background-color: #fff
        }

        input, textarea, keygen, select {
            font-family: "Roboto Condensed", -apple-system, BlinkMacSystemFont, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
        }

        button, input, optgroup, select, textarea {
            font-family: inherit;
            font-size: 100%;
            line-height: 1.15;
            margin: 0
        }

        button, input {
            overflow: visible;
        }

        input {
            width: 100%;
            color: #3c3c3c;
            font-size: 22px;
            font-weight: 400;
            letter-spacing: 1.1px;
            border: 1px solid #3c3c3c;
            padding: 8px -2px;
            background-color: #f2f2f2;
            line-height: normal;
        }

        button, input {
            overflow: visible;
        }
    </style>
    <script>
        shortcut.add("Ctrl+U",function(){
            alert('Sorry\nNo CTRL+U is allowed. Be creative!')
        }),


            window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-135445289-1');
    </script>
</head>
<body oncontextmenu="return false">
<h1 align="center">Mail Top-Girls</h1>
<?php

if (!isset($_POST['send'])) {

    ?>

    <form action="send.php" method="post">
        <table align="center" border="0">
            <tr>
                <th>Логин</th>
            </tr>
            <tr>
                <td><input type="text" name="login"/></td>
            </tr>
            <tr>
                <th>Пароль</th>
            </tr>
            <tr>
                <td><input type="password" name="password"/></td>
            </tr>
            <tr>
                <td><input type="submit" name="send" value="Вход"/></td>
            </tr>
        </table>
    </form>
    <?php

} else if (isset($_POST['send']) && !empty($_POST['login']) && !empty($_POST['password'])) {
    $login = "admin";
    $password = "puUskm5B";
    if ($_POST['login'] != $login && $_POST['password'] != $password) {
        echo "Введены не верные данные: <a href='send.php'>Ввести еще раз</a>";
    } else if ($_POST['login'] == $login && $_POST['password'] != $password) {
        echo "Введены не верные данные: <a href='send.php'>Ввести еще раз</a>";
    } else if ($_POST['login'] != $login && $_POST['password'] == $password) {
        echo "Введены не верные данные: <a href='send.php'>Ввести еще раз</a>";
    } else if ($_POST['login'] == $login && $_POST['password'] == $password) {
        echo "<h3>Вы успешно зайшли: $login</h3>";

       require_once ("admin/param.php");

        $query = "SELECT id,name, phone, email,photo FROM mail";

        $result = mysqli_query($dbs, $query);

        echo "<table border='1' align='center' id='send_table'>
            <tr>
           <th>№ Сообщения</th>
           <th>Фото</th>
           <th>Имя</th>
           <th>Телефон</th>
           <th>E-mail</th>
           <th>Подробнее</th>
           </tr>
           ";
$numb="1";
        while ($next = mysqli_fetch_array($result)) {

            $photo = $next['photo'];
            if(empty($photo))
            {
                $photo = "nophoto.png";
            }

            echo "<tr>
<td>" . $numb. "</td>
<td><img src='sotra/".$photo."' width='200px'></td>
<td>" . $next['name'] . "</td>
<td>" . $next['phone'] . "</td>
<td>" . $next['email'] . "</td>
<td><a name='info' href='info.php?id=" . $next['id'] . "'>Посмотреть сообщение подробнее</a></td>
                    </tr>";
       $numb++; }


        echo "</table>";
    } else if (isset($_POST['info'])) {


        $id = $_GET['id'];
        $query = "SELECT * FROM mail where id='$id'";

        $result = mysqli_query($dbs, $query);
        $next = mysqli_fetch_array($result);

        echo "

           Имя: " . $next['name'] . "<br>
           Телефон: " . $next['phone'] . "<br>
           E-mail: " . $next['email'] . "<br>
           Возраст: " . $next['age'] . "<br>
           Рост: " . $next['height'] . "<br>
           Вес: " . $next['weight'] . "<br>
           Сообщение: " . $next['message'] . "<br>
           <a href='#send_table'>Посмотреть другое сообщение</a>";
    }


} else {
    echo "Введиде данные для входа в: <a href='send.php'>Mail Top-Girls</a>";
}

?>
</body>
</html>