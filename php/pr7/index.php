<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="action.php" method="post">
        <p>Ваш логин: <input type="text" required name="login" placeholder = "Логин"></p>
        <p>Ваш пароль (минимум 8 символов): <input type="password" required name="password" min="1" placeholder = "Пароль"></p>
        <p>Повторите пароль: <input type="password" required name="secondPassword" min="1" placeholder = "Пароль"></p>
        <p>Почта: <input type="email" required name="mail" min="1" placeholder = "Почта"></p>
        <a href="action.html"><p><input type="submit"></p></a>
    </form>

</body>
</html>