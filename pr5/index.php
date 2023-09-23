<!DOCTYPE html>
<html>
<head>
    <title>Таблица на основе данных из PHP</title>
    <style>
        .table {
            border-collapse: collapse;
        }
    </style>
</head>
<body>

        <?php
        $host       = "db4.myarena.ru";     // Адрес сервера базы данных
        $dbname     = "u19978_b06";     // Имя базы данных
        $user       = "u19978_b06";     // Имя пользователя
        $password   = "sM4fO5bD0l";     // Пароль
        
        try{
            $connection = new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8', $user, $password);
            echo ("");
        }
        catch(PDOException $ex){
            die('Произошла ошибка');
        }
        $result = $connection->query('SELECT * FROM `product`');
        echo "<table class = 'table' border = '1'>";
        
        $row = $result->fetch( PDO::FETCH_ASSOC );
            echo "<tr>";
            foreach ($row as $key => $value) {
                echo "<th>".$key."</th>";
            };
            echo "</tr>";
       {
        do {
            echo "<tr>";
            foreach ($row as $key => $value) {
                echo "<td>".$value."</td>";
            }
            echo "</tr>";
        } while($row = $result->fetch( PDO::FETCH_ASSOC )); 
        }
        echo "</table>";
        ?>
        
</body>
</html>


