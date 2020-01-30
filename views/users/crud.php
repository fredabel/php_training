<?php

require dirname(__FILE__).'/../../controller/UsersController.php';
	$user_class = new UsersController;
	$users = $user_class->store();

	header("Location: list.php");
	exit;

?>