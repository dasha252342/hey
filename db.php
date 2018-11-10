как использовать функцию в функции ??и что изєтого может получиться на примере
в чем разница между использованием функции и ее обьявлением 

<?php
/**
-вывести базу всех мастеров-done
-сделать добавление нового -done
-сделать изменение записи-yep
-сделать удаление
*/

header('Content-Type: text/html; charset=utf-8');

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1); 

require_once  '../connection.php';
require_once  'Master.php';

require $_GET['action'] . '.php';

mysqli_close($GLOBALS['link']);
/* 																			

																			 connection 
*/
<?php
$host = 'localhost'; // адрес сервера 
$database = 'bookingpro'; // имя базы данных
$user = 'root'; // имя пользователя
$password = ''; // пароль
 
$GLOBALS['link'] = mysqli_connect('localhost', 'root', '', 'bookingpro') or die("Ошибка " . mysqli_error($link));// выполняем операции с базой данных
/*  																	Master
																		!!!!!!!!!!!!!!!!!!!!!!!!!!!
*/
<?php

class Master
{
    public $id;
    public $email;
    public $name;
    public $age;
    public $city_id;
    public $address;
    public $worktype;
    public $athome;
    public $examplelink;

    public function __construct()
    {
        
    }

    public function getCountOfApartments()
    {
        return $this->floors * $this->apartmentOnFlor;
    }

    public function save()
    {
        if (is_null($this->id)) {

            $link = $GLOBALS['link'];
            $query = "INSERT INTO Master (name, email, age, address, worktype, athome, examplelink) 
                VALUES ('{$this->name}', '{$this->email}', '{$this->age}', '{$this->address}', '{$this->worktype}', '{$this->athome}', '{$this->examplelink}' )";
            $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
            if ($result == true){
                echo "Информация занесена в базу данных";
            }else{ 
                echo "Информация не занесена в базу данных";
            }
        }   
        else{
            $link = $GLOBALS['link'];
            $query = ("UPDATE Master SET name = '{$this->name}',email = '{$this->email}', age = {$this->age}, address = '{$this->address}',
             worktype = '{$this->worktype}', athome = '{$this->athome}', examplelink = '{$this->email}' WHERE id = {$this->id}");
            $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
            if ($result == true){
                header("Location: /master/api.php?action=profile&id={$this->id}");
            }else{ 
                echo "Информация не обновлена";
            }   

        }
    }
}

 
/* 																			

																			 update

*/
if (isset($_POST['updateform'])) {
	$master = new Master;
	$master->name = $_POST['name'];
	$master->id = $_GET['id'];
	$master->age = $_POST['age'];
	$master->address = $_POST['address'];
	$master->worktype = $_POST['worktype'];
	$master->athome = $_POST['athome'];
	$master->examplelink = $_POST['examplelink'];
	$master->save();
}