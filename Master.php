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
                $this->id = mysqli_insert_id($link);
                header("Location: /master/api.php?action=profile&id={$this->id}");
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
    public function delete(){
        $link = $GLOBALS['link'];
        $query = ("DELETE from Master WHERE id = {$this->id}");
        $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
        if ($result == true){
            header("Location: /master/api.php?action=main");
        }else{ 
            echo "Информация не удалена";
        }

    }
}

 

