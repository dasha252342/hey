<?php
$id=$_COOKIE['id'];
$email=$_COOKIE['email'];

$result = mysqli_query($GLOBALS['link'], "SELECT * FROM Master WHERE id=$id AND email='$email'") or die("Ошибка " . mysqli_error($GLOBALS['link'])); 
if($result){ 
	if ($row = mysqli_fetch_assoc($result)){
		$name = mb_strtolower($row['name'], 'UTF-8');


			echo "Вы авторизованы $name <br />";
	    	echo "

		<div>
			<td>{$row['id']}</td><br />
			<td>{$row['name']}</td><br />
			<td>{$row['email']}</td><br />
			<td>{$row['age']}</td><br />
			<td>{$row['address']}</td><br />
			<td>{$row['worktype']}</td><br />
			<td>{$row['athome']}</td><br />
			<td>{$row['examplelink']}</td><br />
		</div>";
	} else {
		echo "пароль и айди не верны (((";
	}
}

?>
<a href="/master/api.php?action=change&id=<?=$row['id']?>">Изменить данные профиля</a>
<a href="/master/api.php?action=delete&id=<?=$row['id']?>">удалить несчастный профиль</a>