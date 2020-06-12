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

        require_once ("param.php");
if(empty($hash)){ $hash = md5(md5(rand(00000000000000,999999999999999)));}


        if ($_GET['login']=='Admin'&&$_GET['password']=='puUskm5B')
        {








            $query  = "SELECT id,name,phone,email,photo FROM mail";

            $rez = mysqli_query($dbs,$query) or die ("Error Select Query");

            echo "<table border='1'><tr><th>№ Сообщения</th><th>Фото</th><th>Имя</th><th>Телефон</th><th>E-mail</th><th>Действия</th></tr>";
            $numb = "1";
            while ($next = mysqli_fetch_array($rez))
            {
                $photo = $next['photo'];
                if(empty($photo))
                {
                    $photo = "nophoto.png";
                }
                echo " <tr>         
<td>".$numb."</td>
<td><img src='/sotra/".$photo."' width='150px'></td>
<td>".$next['name']."</td>
<td>".$next['phone']."</td>
<td>".$next['email']."</td>
<td><form action=''>
<input value='Подробнее' name='info' type='submit' >
<input value='".$next['id']."' name='id' type='hidden' >
<input value='Удалить' name='del' type='submit' >
<input value='".$next['name']."' name='name' type='hidden' >
<input value='Выход' name='exit' type='submit' >
<input type='hidden' value='".$hash."' name='hash' >
<input type='hidden' value='".$hash."' name='hash_proverca' >
</form></td>
</tr>";
                $numb++;
            }


        }
        else if ($_GET['exit']=="Выход")
        {
            header("Location: index.php");
        }
        else if ($_GET['info']&&$_GET['hash']&&$_POST['hash']==$_POST['hash_proverca'])
        {


            $queryP = "SELECT * FROM mail where id=".$_GET['id'];
            $rezP = mysqli_query($dbs,$queryP)or die ("Не удалось вывести таблицу 'Подробнее'");
            $nextP = mysqli_fetch_array($rezP);

            $photo = $nextP['photo'];
            if (empty($photo))
            {
                $photo= 'nophoto.png';
            }

            echo "<h1>Анкета соискателя Маil Top-Girls </h1>";
            echo "<table>
<tr><th>Имя: </th><td>".$nextP['name']."</td></tr>
<tr><th>Возраст: </th><td>".$nextP['age']."</td></tr>
<tr><th>Рост: </th><td>".$nextP['height']."</td></tr>
<tr><th>Вес: </th><td>".$nextP['weight']."</td></tr>
<tr><th>Телефон: </th><td>".$nextP['phone']."</td></tr>
<tr><th>E-mail: </th><td>".$nextP['email']."</td></tr>
<tr><th>О себе: </th><td class='tests' style=' width: 550px;'>".$nextP['message']."</td></tr>
<tr><th>Фото: </th><td><img src='/sotra/".$photo."' width='550px'></td></tr>
<tr><th><a href='aut.php?login=Admin&password=puUskm5B'><button>Назад</button></a></th></tr>
</table>";

        }

        else if ($_GET['del']=="Удалить")
        {

            echo "<form action=''>
Вы дейстительно хотите удалить эту анкету:".$_GET['name']."<br>
<input type='radio' value='yes' checked name='del' >Да
<input type='radio' value='no'  name='del' >Нет
<input type='hidden' value='".$_GET['id']."'  name='id' >
<input type='submit' value='Удалить анкету'  name='sub' >
</form>";


        }
        else if ($_GET['del']=="yes")
        {
            $query = "delete from mail WHERE id=".$_GET['id'];
            mysqli_query($dbs,$query) or die ("Error Query");
            echo "Удаление анкеты успешно";
        }
        else if ($_GET['del']=="no")
        {
            echo "Удаление отменено или не возможно: <a href='aut.php?login=Admin&password=puUskm5B'><button>Назад</button></a>";
        }

        else if ($_GET['login']!='Admin'&&$_GET['password']!='puUskm5B'||$_GET['login']=='Admin'&&$_GET['password']!='puUskm5B'||$_GET['login']=='Admin'&&$_GET['password']!='puUskm5B')
        {
            echo "Ошибка аторизации!!! <a href='index.php'>Назад</a>";

        }
else
{
    echo "Поптка взлома <a href='index.php'>Войти</a>";
}



?>
</body>
</html>