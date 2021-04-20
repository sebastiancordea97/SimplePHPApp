<?php


require('config.php');
require('classes/bootstrap.php');
require('classes/Controller.php');
require('controllers/home.php');
require('controllers/users.php');
require('controllers/comments.php');

$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();

if($controller)
{
    $controller->executeAction();
}