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

    $login = $_POST['login'];
    $password = $_POST['password'];
    $secondPassword = $_POST['secondPassword'];
    $mail = $_POST['mail'];


    if(empty($login)) exit('Поле "логин" не заполнено');
    if(empty($password)) {
        exit('Поле "пароль" не заполнено');
    };
    if(empty($secondPassword)) exit('Поле "повторный пароль" не заполнено');
    
    if (strlen ($password) < 8 ) exit ("В поле 'пароль' введено мало символов");
    if (strlen ($password) > 15 ) exit ("В поле 'пароль' введено много символов");

    if ($password !== $secondPassword) {
        exit ('Пароли не совпадают');
    };
    if(empty($mail)) exit('Поле "почта" не заполнено');

    
    $host       = "db4.myarena.ru";
    $dbname     = "u19978_b06";
    $user       = "u19978_b06";
    $password   = "sM4fO5bD0l";
    
    try{
        $connection = new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8', $user, $password);
        echo ("");
    }
    catch(PDOException $ex){
        die('Произошла ошибка');
    };

    // $result = $connection->query('SELECT * FROM `User`');
    $select = $connection->prepare( "SELECT COUNT(`id`) as cnt FROM `User` where `login` = ?;" ); 
    $res = $select->execute( [$_POST['login'] ] ); 
    $row = $select->fetch(); 
    
    if (!$res) {
        exit ( 'Ошибка регистрации' );
    } 
    
    if ( $res && isset($row['cnt']) && $row[0] > 0 ) {
        exit ( 'Ошибка регистрации... Пользователь уже существует' );
    } 

    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
    $data = [ $login, $passwordHash, $mail ];
    $insert = $connection->prepare( "INSERT INTO `User` (`login`, `password`, `mail`) VALUES (?,?,?);");
    $res = $insert->execute( $data );

    if ($res) {
        echo ('Поздравляю с успешной регистрацией');
    }
    
    else {
        exit ( 'Ошибка регистрации ...' );
    }
?>

    <a href="index.php"><button type = "submit">Назад</button></a>
</body>
</html>
