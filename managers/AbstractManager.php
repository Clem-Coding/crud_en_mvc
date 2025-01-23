<?php

// // Charger l'autoloader de Composer
// require_once __DIR__ . '/../vendor/autoload.php';


// // Chargement des variables d'environnement
// $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
// $dotenv->load();

// class AbstractManager
// {
//     protected PDO $db;

//     public function __construct()
//     {
//         try {
//             // Récup les variables d'environnement
//             $host = $_ENV['DB_HOST'];
//             $port = $_ENV['DB_PORT'];
//             $user = $_ENV['DB_USERNAME'];
//             $password = $_ENV['DB_PASSWORD'];
//             $dbname = $_ENV['DB_NAME'];

//             // essaie de connecter à la base de donnée
//             $connexionString = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";
//             $this->db = new PDO(
//                 $connexionString,
//                 $user,
//                 $password
//             );
//         } catch (PDOException $e) {
//             // Si une erreur de connexion survient, afficher un message détaillé
//             echo "Erreur de connexion : " . $e->getMessage();
//         }
//     }
// }
