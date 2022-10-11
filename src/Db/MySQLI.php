<?php
/*
$host = 'localhost';
$data = 'users';
$user = 'root';
$pass = 'Lfcfan1995';

// Подключение к MySQL
$connection = new mysqli($host,$user,$pass,$data);
if ($connection->connect_error) die("ERROR CONECTION");
//запрос данных
$quri = "SELECT * FROM client";
$result = $connection->query($quri);// обращаемя к бд выполняе запрос Селект, query — Выполняет запрос к базе данных
if($result->num_rows>0) {
    while ($row = $result->fetch_assoc()){ //mysqli_fetch_assoc — Выбирает следующую строку из набора результатов и помещает её в ассоциативный массив
        echo "<br> id: " . $row["client_id"] . "<br> first_name: " . $row["first_name"]
            . "<br> last_name: " . $row["last_name"] . "<br> @mail: " . $row["email"] ;
    }

}
$connection->close();


?>