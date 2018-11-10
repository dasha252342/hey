<?php
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