<?php




class UserController
{
    public function show(): void
    {

        if (isset($_GET["id"])) {
            $id = $_GET["id"];
        }

        $userManager = new UserManager();
        $user = $userManager->findOne($id);

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

        if (isset($_GET["id"])) {
            $id = $_GET["id"];
        }

        $userManager = new UserManager();
        $user = $userManager->findOne($id);

        $route = "update_user";
        require "templates/layout.phtml";
    }


    public function checkUpdate(): void
    {
        if (isset($_POST["first_name"]) && isset($_POST["last_name"]) && isset($_POST["email"])) {
            $firstName = $_POST["first_name"];
            $lastName = $_POST["last_name"];
            $email = $_POST["email"];
        }

        if (isset($_GET["id"])) {
            $id = $_GET["id"];
        }


        $user = new User($email, $firstName, $lastName);
        $user->setId($id);
        $userManager = new UserManager();
        $userManager->update($user);

        header("Location: index.php");
        exit();
    }

    public function delete(): void
    {

        if (isset($_GET["id"])) {
            $id = $_GET["id"];
        }

        $user = new User("test@example.com", "Test", "User");
        $user->setId($id);
        $userManager = new UserManager();
        $userManager->delete($user);
        header("Location: index.php");
        exit();
    }


    public function list(): void
    {

        $userManager = new UserManager();
        $users = $userManager->findAll();

        $route = "list";
        require "templates/layout.phtml";
    }
}
