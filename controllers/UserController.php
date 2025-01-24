<?php




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




    public function checkCreate(): void
    {

        if (isset($_POST["first_name"]) && isset($_POST["last_name"]) && isset($_POST["email"])) {
            $firstName = $_POST["first_name"];
            $lastName = $_POST["last_name"];
            $email = $_POST["email"];
        }

        $user = new User($email, $firstName, $lastName);
        $userManager = new UserManager();
        $userManager->create($user);

        header("Location: index.php");
    }


    public function update(): void
    {

        $route = "update_user";
        require "templates/layout.phtml";
    }


    public function checkUpdate(): void {}


    public function list(): void
    {

        $userManager = new UserManager();
        $users = $userManager->findAll();

        $route = "list";
        require "templates/layout.phtml";
    }
}
