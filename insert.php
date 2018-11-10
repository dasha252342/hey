<?php

if (isset($_POST['insert'])) {
	$master = new Master;
	$master->name = $_POST['name'];
	$master->email = $_POST['email'];
	$master->age = $_POST['age'];
	$master->address = $_POST['address'];
	$master->worktype = $_POST['worktype'];
	$master->athome = $_POST['athome'];
	$master->examplelink = $_POST['examplelink'];
	$master->save( );
}