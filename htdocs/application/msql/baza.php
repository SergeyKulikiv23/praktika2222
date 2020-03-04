<?php
//Данные для подключения
$host = "localhost";
$user = "root";
$password = "";
$db = "prektika2";

// Подключение к базе данных
$conn = new mysqli($host, $user, $password, $db);

if ($conn->connect_error){
    die("connecrion failed: " .$conn->connect_error);
}
echo "Connection successfully";
//?