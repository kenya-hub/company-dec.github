<?php

include '../classes/User.php';

$user = new User ;

$user->storeUser($_POST);

?>