<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if( $_SERVER['REQUEST_METHOD'] !== 'POST' ) {
        exit("Что-то идет не правильно");
    };

    if(empty($_POST['name'])) exit('Поле "имя" не заполнено');
    if (preg_match("/\d+/", $_POST['name'])) exit ('Поле "имя" введено не корректно');
    if((int)$_POST['age'] < 1) exit('Поле "возраст" введено некорректное значение');
    if(empty($_POST['age'])) exit ("Поле 'возраст' не заполнено");
        echo 'Здравствуйте, '.htmlspecialchars($_POST['name']).'. <br>';
        echo 'Вам '.(int)$_POST['age'].' лет.'.'<br>';
?>

    <a href="index.php"><button type = "submit">Назад</button></a>
</body>
</html>
