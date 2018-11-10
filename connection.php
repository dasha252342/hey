<?php
$host = 'localhost'; // адрес сервера 
$database = 'bookingpro'; // имя базы данных
$user = 'root'; // имя пользователя
$password = ''; // пароль
 
$GLOBALS['link'] = mysqli_connect('localhost', 'root', '', 'bookingpro') or die("Ошибка " . mysqli_error($link));// выполняем операции с базой данных
