<?php

require "autoload.php";
$route = "create_user";
$router = new Router();
$router->handleRequest($_GET);
