<?php


//Class Router qui analyse l'URL demandée par l'utilisateur 
class Router
{
    public function __construct() {}

    public function handleRequest(array $get): void
    {


        //Redirection vers le contrôleur : Le routeur appelle le contrôleur approprié (PageController dans notre cas) 
        //pour effectuer une action spécifique (afficher la page d'accueil, la page à propos, etc.) grace aux instances
        if (isset($get["route"]) && $get["route"] === "show_user") {
            // $userController = new UserController();
            // $userController->show();



        } elseif (isset($get["route"]) && $get["route"] === "create_user") {
            // $userController = new UserController();
            // $userController->create();

            require "../templates/layout.phtml";
        } elseif (isset($get["route"]) && $get["route"] === "check_create_user") {
            // $userController = new UserController();
            // $userController->checkCreate();
        } elseif (isset($get["route"]) && $get["route"] === "update_user") {
            // $userController = new UserController();
            // $userController->update();
        } elseif (isset($get["route"]) && $get["route"] === "check_update_user") {
            // $userController = new UserController();
            // $userController->checkUpdate();
        } else {

            // $userController = new UserController();
            // $userController->list();


            $route = "list";
            require "templates/layout.phtml";
        }
    }
}



// - `index.php?route=show_user` -> la méthode `show()` du `UserController`
// - `index.php?route=create_user` -> la méthode `create()` du `UserController`
// - `index.php?route=check_create_user` -> la méthode `checkCreate()` du `UserController`
// - `index.php?route=update_user` -> la méthode `update()` du `UserController`
// - `index.php?route=check_update_user` -> la méthode `checkUpdate()` du `UserController`
// - `index.php?route=delete_user` -> la méthode `delete()` du `UserController`
// - Dans tous les autres cas : la méthode `list()` du `UserController`