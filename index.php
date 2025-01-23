<?php

require "autoload.php";

$router = new Router();
$router->handleRequest($_GET);
