<?php


// test des isntances 
require "models/User.php";

$user = new User("dagonetbebeychat@hotmail.com", "Dagonet", "Chatounet");
echo "<pre>";
var_dump($user);
echo "</pre>";


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


//test instance create()
require "managers/UserManager.php";

$userToAdd = new User("leon@gmail.com", "Léon", "Duchamp");
$userManager = new UserManager();
$userManager->create($userToAdd);
echo "<pre>";
var_dump("UTLISATEUR AJOUTE", $userToAdd);
echo "</pre>";



// test findAll()


$getUsers = $userManager->findAll();
echo "<pre>";
var_dump("Tous les users", $getUsers);
echo "</pre>";


//test update

$userToUpdate = new User("petitchattellementmignon@gmail.com", "Gribouille", "blablabla");
$userToUpdate->setId(4);
echo "<pre>";
var_dump("le user à modifier", $userToUpdate);
echo "</pre>";
$updateUsers = $userManager->update($userToUpdate);

//test delete()
$userToDelete = new User("test@example.com", "Test", "User");
$userToDelete->setId(3);

$userManager->delete($userToDelete);


// test findOne
$oneUserToFind = $userManager->findOne(2);

echo "<pre>";
var_dump("le seul user", $oneUserToFind);
echo "</pre>";
