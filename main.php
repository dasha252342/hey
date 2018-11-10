<a href='/master/api.php?action=register'>Регистрация</a>
<a href='/master/api.php?action=login'>Войти</a>
<?php
$result = mysqli_query($GLOBALS['link'], 'SELECT * FROM Master') or die("Ошибка " . mysqli_error($link)); 
if($result)
	{ 
		while ($row = mysqli_fetch_assoc($result))
	    {
	   
		   echo "

				<a href='/master/api.php?action=profile&id={$row['id']}'><div>
					<td>{$row['id']}</td>
					<td>{$row['name']}</td>
					<td>{$row['email']}</td>
					<td>{$row['age']}</td>
					<td>{$row['address']}</td>
					<td>{$row['worktype']}</td>
					<td>{$row['athome']}</td>
					<td>{$row['examplelink']}</td>
				</div></a>";

		}
		
	}
