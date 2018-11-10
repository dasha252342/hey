<?php
if(!empty ($_COOKIE['email'])){
	echo 'Вы авторизованы, как: ' . $_COOKIE['email'] . '!';
	}
else{
	echo 'Привет, Гость!';}?>
<h1>Электронная запись </h1>
<a href='/master/api.php?action=main'>Все мастера</a>
<a href='/master/api.php?action=login'>Вход в лк</a>
<a href='/master/api.php?action=register'>Регистрация</a>

<hr>
<br /> 
