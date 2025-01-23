<?php






// //la class UserManagers récupère les éléments de PDO de AbstractManager
// class UserManager extends AbstractManager
// {


//     //méthode qui ajouter un user en prenant en paramètres la class User
//     public function addUser(User $user): void
//     {
//         $query = $this->db->prepare('INSERT INTO users (name, email) VALUES (:name, :email)');


//         //les paramètres récupèrent les infos grace aux méthodes hérités de la class User
//         $parameters = [
//             'name' => $user->getName(),
//             'email' => $user->getEmail()
//         ];

//         $query->execute($parameters);
//     }



//     //méthode qui récupère tous les users de la BDD
//     public function getAllUsers(): array
//     {
//         $query = $this->db->prepare('SELECT * FROM users');
//         $query->execute();

//         $result = $query->fetchAll(PDO::FETCH_ASSOC);


//         $users = [];

//         //parcout résult et instance chaque item de result comme un user
//         foreach ($result as $item) {

//             //récupère les champs fetcch de la BDD pour les instancier
//             $user = new User($item["name"], $item["email"]);
//             $user->setId($item["id"]);

//             //push dans le tableau $users
//             $users[] = $user;
//         }

//         return $users;
//     }
// }


// $newUser = new UserManager();
