<?php
$id=$_GET['id'];
$result = mysqli_query($GLOBALS['link'], "SELECT * FROM Master WHERE id=$id") or die("Ошибка " . mysqli_error($link)); 
if($result){ 
  $row = mysqli_fetch_assoc($result);  
  } 
?>
  <br /><br />
  <form method="POST" action='/master/api.php?action=update&id=<?=$row['id']?>'>
    <input name="name" type="text" size=50 value="<?=$row['name']?>"/><br />
    <input name="age" type="text" size=50 value="<?=$row['age']?>"/><br />
    <input name="email" type="text" size=50 value="<?=$row['email']?>"/><br />
    <input name="city" type="text" size=50 value="<?=$row['city']?>"/><br />
    <input name="address" type="text" size=50 value="<?=$row['address']?>"/><br />
    <input name="worktype" type="text" size=50 value="<?=$row['worktype']?>"/><br />
    <input name="athome" type="text" size=50 value="<?=$row['athome']?>"/><br />
    <input name="examplelink" type="text" size=50 value="<?=$row['examplelink']?>"/>
    <input name="updateform" type="submit" value="Сохранить"/>
   </form>
  <style>
  	td {
  		border: 3px solid blue; 
  	}
  </style>
