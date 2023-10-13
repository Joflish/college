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

    if(empty($login)) exit('Поле "логин" не заполнено');
    if(empty($password)) {
        exit('Поле "пароль" не заполнено');
    };
    
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


    $stmt = $connection->prepare("SELECT * FROM `User` WHERE `login` = :login");
    $stmt->execute(['login' => $login]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$stmt->rowCount()) {
        echo ("Пользователь с такими данными еще не зарегестирован");
    }
    else {
        if (password_verify($password, $user['password'])) {
            if (password_needs_rehash($user['password'], PASSWORD_DEFAULT)) {
                $newHash = password_hash($password, PASSWORD_DEFAULT);
                $stmt = $connection->prepare('UPDATE `User` SET `password` = :password WHERE `login` = :login');
                $stmt->execute([
                    'login' => $login,
                    'password' => $newHash,
                ]);
            } 
            
        }    
        echo ( "Пользователь с такими данными зарегистрирован" );
    };
?>

    <a href="index.php"><button type = "submit">Назад</button></a>
</body>
</html>
