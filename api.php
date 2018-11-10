<?php

/* $cookiename = "user";
bool setcookie ( string $name = 'cookiename' [, string $value = "$name" [, int $expire = 0 [, string $path = "" [, string $domain = "" [, bool $secure = FALSE [, bool $httponly = FALSE ]]]]]] );
*/
// 86400 = 1 день в секундах
/**
-вывести базу всех мастеров-done
-сделать добавление нового -done
-сделать изменение записи-done
-сделать удаление
*/

header('Content-Type: text/html; charset=utf-8');

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require_once  'connection.php';

if (!empty($_POST['login'])) { //логин, потому что айди и мэйл передаются через форму в логин.пхп
	$id = $_POST['id'];
	$email = $_POST['email'];
	$result = mysqli_query($GLOBALS['link'], "SELECT * FROM Master WHERE id=$id AND email='$email'") or die("Ошибка " . mysqli_error($GLOBALS['link'])); 
	
	if ($row = mysqli_fetch_array($result)) {
		setcookie('id', $id, 0);  //todo нужно сделать проверку ифом айди и имейл внутри этого ифа
		setcookie('email', $email, 0); 
		header("Location: /master/api.php?action=log_profile");
	} else {
		echo 'Ві не авторизовані<hr>';
	}
}

require_once  'header.php';
require_once  'Master.php';


require $_GET['action'] . '.php'; //для подключения файлов

mysqli_close($GLOBALS['link']);

function sum($a, $b) {
	return $a + $b;
}

$c = sum(1, 10);
echo $c;
sum(11, 11);
sum(5, 12);
sum(2, 10);
echo '<br />';
function minus($c, $d){
	return $c - $d;
}

function expression($a, $b, $c, $d){
	return sum($a, $b) + minus($c, $d);

}

echo expression(5,5,5,5);
require_once  'footer.php';