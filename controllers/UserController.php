<?php


// Le contrôleur reçoit la demande du routeur et exécute la logique associée à chaque page.

class UserController
{
    public function show(): void
    {

        $route = "show_user";
        require "templates/layout.phtml";
    }

    public function create(): void
    {


        $route = "create_user";
        require "templates/layout.phtml";
    }
    public function checkCreate(): void {}


    public function update(): void
    {

        $route = "update_user";
        require "templates/layout.phtml";
    }


    public function checkUpdate(): void {}


    public function list(): void
    {

        $route = "list";
        require "templates/layout.phtml";
    }
}




// - `index.php?route=show_user` -> la méthode `show()` du `UserController`
// - `index.php?route=create_user` -> la méthode `create()` du `UserController`
// - `index.php?route=check_create_user` -> la méthode `checkCreate()` du `UserController`
// - `index.php?route=update_user` -> la méthode `update()` du `UserController`
// - `index.php?route=check_update_user` -> la méthode `checkUpdate()` du `UserController`
// - `index.php?route=delete_user` -> la méthode `delete()` du `UserController`
// - Dans tous les autres cas : la méthode `list()` du `UserController`