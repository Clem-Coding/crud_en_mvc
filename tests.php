<?php


// test des isntances 
require "models/User.php";

$user = new User("dagonetbebeychat@hotmail.com", "Dagonet", "Chatounet");
var_dump($user);


//test de la connexion à la bdd

require_once "managers/AbstractManager.php";

class TestManager extends AbstractManager
{
    public function __construct()
    {
        parent::__construct();
        echo "TestManager instancié avec succès.";
    }
}


$testManager = new TestManager();
