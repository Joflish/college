<!DOCTYPE html>
<html>
<head>
    <title>Таблица на основе данных из PHP</title>
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

        // echo ("<table>
        // <tr>
        //     <th>$key</th>
        // </tr>
        // <td>$value</td>
        // </table>");
    
        $result = $connection->query('SELECT * FROM `product`');
        while($row = $result->fetch( PDO::FETCH_ASSOC )){
            foreach ($row as $key => $value) {
                echo "<th>".$key."<th>";
                echo "<td>".$value."</td>";
            }
        }
        
        ?>
        
</body>
</html>


