<?php



//la class UserManagers récupère les éléments de PDO de AbstractManager
class UserManager extends AbstractManager
{





    //méthode qui récupère tous les users de la BDD
    public function findAll(): array
    {
        $query = $this->db->prepare('SELECT * FROM users');
        $query->execute();

        $result = $query->fetchAll(PDO::FETCH_ASSOC);


        $users = [];

        //parcout résult et instance chaque item de result comme un user
        foreach ($result as $item) {

            //récupère les champs fetcch de la BDD pour les instancier
            $user = new User($item["email"], $item["first_name"], $item["last_name"]);
            $user->setId($item["id"]);

            //push dans le tableau $users
            $users[] = $user;
        }

        return $users;
    }


    public function findOne(int $id): ?User
    {
        $query = $this->db->prepare('SELECT * FROM users WHERE id = :id');
        $parameters = ['id' => $id];
        $query->execute($parameters);
        $result = $query->fetch();

        if ($result) {
            $user = new User($result["email"], $result["first_name"], $result["last_name"]);
            $user->setId($result['id']);
            return $user;
        }

        return null;
    }


    public function create(User $user): void
    {
        $query = $this->db->prepare('INSERT INTO users (email, first_name, last_name) VALUES (:email, :first_name, :last_name)');


        //les paramètres récupèrent les infos grace aux méthodes héritées de la class User
        $parameters = [

            'email' => $user->getEmail(),
            'first_name' => $user->getFirstName(),
            'last_name' => $user->getLastName(),

        ];

        $query->execute($parameters);
        $user->setId($this->db->lastInsertId());
    }




    public function update(User $user)
    {

        $query = $this->db->prepare('UPDATE users SET email = :email, first_name = :first_name, last_name = :last_name WHERE id = :id');

        $parameters = [

            'email' => $user->getEmail(),
            'first_name' => $user->getFirstName(),
            'last_name' => $user->getLastName(),
            'id' => $user->getId(),
        ];

        $query->execute($parameters);
    }


    public function delete(User $user): void
    {
        $query = $this->db->prepare('DELETE FROM users WHERE id = :id');
        $parameters = ['id' => $user->getId()];
        $query->execute($parameters);
    }
}
