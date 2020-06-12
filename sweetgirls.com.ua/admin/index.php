<!doctype html>
<html lang="ru">
<head>
    <meta charset="windows-1251">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script>
        document.onkeydown = function(e) {
            if (e.ctrlKey &&
                (e.keyCode === 67 ||
                    e.keyCode === 86 ||
                    e.keyCode === 85 ||
                    e.keyCode === 117)) {
                return false;
            } else {
                return true;
            }
        };
        $(document).keypress("u",function(e) {
            if(e.ctrlKey)
            {
                return false;
            }
            else
            {
                return true;
            }
        });
    </script>
</head>
<body>
<?php
echo "Доступ запрещен!";
echo "<script>setTimeout(function () {
   window.location.href= 'https://sweetgirls.com.ua'; // the redirect goes here
},100); // 5 seconds</script>";
?>
</body>
</html>

