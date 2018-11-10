<?php

if (!empty($_GET['id'])) {
	$master = new Master;
	$master->id = $_GET['id'];

	$master->delete();
}