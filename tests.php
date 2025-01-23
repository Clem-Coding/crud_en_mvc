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


//test instance addUser()
require "managers/UserManager.php";

// $userToAdd = new User("dagonetbebeychat@hotmail.com", "Dagonet", "Chatounet");
$userManager = new UserManager();
// $userManager->create($userToAdd);


// test findAll()


$getUsers = $userManager->findAll();
var_dump("Tous les users", $getUsers);


//test update

$userToUpdate = new User("petitchattellementmignon@gmail.com", "Gribouille", "blablabla");
$userToUpdate->setId(4);
var_dump("le user à modifier", $userToUpdate);
$updateUsers = $userManager->update($userToUpdate);

//test delete()
$userToDelete = new User("test@example.com", "Test", "User");
$userToDelete->setId(3);

$userManager->delete($userToDelete);


// test findOne
$oneUserToFind = $userManager->findOne(2);
var_dump("le seul user", $oneUserToFind);
