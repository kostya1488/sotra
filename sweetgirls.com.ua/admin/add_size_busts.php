<!doctype html>
<html lang="ru">
<head>
    <meta charset="windows-1251">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
if (!isset($_POST['send'])) {
    ?>
    <form action="add_size_busts.php" method="post">
        <p><input name="name" type="text" placeholder="Обём груди в цыфрах"></p>
        <p><input name="send" type="submit" value="Добавить"></p>
    </form>
    <?php
} elseif (isset($_POST['send']) && !empty($_POST['name'])) {
    require_once('param.php');

    $query = "INSERT INTO size_busts (name) VALUE ('" . $_POST['name'] . "')";
    @mysqli_query($dbs, $query) or die ("Error Query");
    echo "Ви добавили новую запись: " . $_POST['name'] . ".  <a href='add_size_busts.php'>Добавить еще</a>";
} else {
    echo "Ошибка. <a href='add_size_busts.php'>Назад</a>";
}
?>
</body>
</html>