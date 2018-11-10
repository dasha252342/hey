<?php
$id=$_GET['id'];
$result = mysqli_query($GLOBALS['link'], "SELECT * FROM Master WHERE id=$id") or die("Ошибка " . mysqli_error($link)); 
if($result){ 
	$row = mysqli_fetch_assoc($result);     
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
}

?>
<a href="/master/api.php?action=change&id=<?=$row['id']?>">Изменить данные профиля</a>
<a href="/master/api.php?action=delete&id=<?=$row['id']?>">удалить несчастный профиль</a>