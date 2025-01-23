# Gestion des utilisateurs avec Routeur et MVC

## Objectif

Le but de cet exercice est de créer une simple application de gestion des utilisateurs en PHP et MySQL, en appliquant le modèle **Model-View-Controller (MVC)** et en introduisant un **routeur** pour gérer les différentes requêtes HTTP (comme l'ajout et l'affichage des utilisateurs).

Vous allez :

- Créer un **Modèle** pour interagir avec la base de données.
- Créer un **Contrôleur** pour gérer la logique de l'application.
- Utiliser un **Routeur** pour gérer les URL et rediriger les requêtes vers les actions appropriées dans le contrôleur.

### **Base de données**

Une base de données MySQL est utilisée pour stocker les utilisateurs. Créez une base de données appelée `user_management` et une table `users` avec les colonnes suivantes :

- `id` (INT, AUTO_INCREMENT, PRIMARY KEY)
- `name` (VARCHAR)
- `email` (VARCHAR)
