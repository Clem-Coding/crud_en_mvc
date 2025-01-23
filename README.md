# Le but de l’exercice

Dans l’exercice précédent, vous avez appris un des fondamentaux de l’implémentation du MVC : la gestion du routing. Mais comme vous avez pu le constater, cela ne concerne que deux des trois lettres du MVC. Vous avez utilisé des Controllers et des Templates : le V et le C donc. Dans cet exercice, nous allons rajouter le M : les Models et Managers et la gestion de la base de données.

# Les modalités

Sur cet exercice, vous allez devoir progresser étape par étape et m’envoyer un message à chaque fin d’étape pour que je vérifier votre code et vous donne s’il est bon la suite des consignes.

Ne partagez pas les consignes avec quelqu’un qui n’est pas à la même étape que vous. Vous pouvez aider vos camarades qui sont à la même étape que vous ou à une étape précédente, mais chacun et chacune doit être capable de comprendre le code qu’iel me présente.

Cet exercice doit me permettre de jauger individuellement pour chacun et chacune d’entre-vous les différents blocages à la fois techniques, de déduction, organisation des fichiers (etc, etc) avant de lancer le projet de groupe.

Merci de jouer le jeu 😊

# Vos repository

Pour ce projet, merci de rendre vos repository publics, et de faire à minima un add/commit/push à la fin de chaque étape.

# CRUD en MVC

Les contenus du cours [BRE03 Web Dev Course](https://kornog-dev.github.io/BRE03/) © 2024 par [Mari Doucet](https://github.com/kornog-dev) sont sous licence [CC BY-NC-SA 4.0](https://creativecommons.org/licenses/by-nc-sa/4.0/?ref=chooser-v1)

## Étape 1 : Mise en place du Routeur

Vous allez utiliser ce que vous avez appris dans l'exercice précédent pour mettre en place un routeur. Voici la liste des routes et des méthodes correspondantes :

- `index.php?route=show_user` -> la méthode `show()` du `UserController`
- `index.php?route=create_user` -> la méthode `create()` du `UserController`
- `index.php?route=check_create_user` -> la méthode `checkCreate()` du `UserController`
- `index.php?route=update_user` -> la méthode `update()` du `UserController`
- `index.php?route=check_update_user` -> la méthode `checkUpdate()` du `UserController`
- `index.php?route=delete_user` -> la méthode `delete()` du `UserController`
- Dans tous les autres cas : la méthode `list()` du `UserController`

Pour le moment, vous n'avez pas de controller, du coup dans les accolades de vos conditions, notez simplement en commentaire le nom de controller et de la méthode qui devra être appelée.

En observant la liste des templates que vous avez dû créer à l'étape 0 et en la comparant avec la liste des méthodes du `UserController` mentionnées ci-dessus, déduisez quelle méthode devra afficher quel template.

```js
// La méthode list() devra afficher le template "list.phtml"
// La méthode create() devra afficher le template "create.phtml"
// La méthode show() devra afficher le template "show.phtml"
// La méthode update() devra afficher le template "update.phtml"
```

Préremplissez vos templates avec le strict minimum, la structure de base d'une page pour le layout avec le require du template contenu dans la variable `$route` et un titre décrivant le nom de la page pour les autres. Inspirez-vous des consignes de l'exercice sur le Routeur.

> 💡 N'oubliez pas de require le fichier `config/Router.php` dans votre fichier `config/autoload.php`

Il y a plus de templates que de méthodes, que pouvez-vous en déduire ? Répondez-moi dans un message sur Discord.

```js
//Les méthodes checkCreate() et checkUpdate() ne servent pas afficher les template mais contiennent la logique nécessaire à vérifier
//les données envoyées par le formulaire que ce soit pour la création d'un user ou un udpate d'un user.

//La méthode dekete() servira de logique pour supprimer un user.
```

Réduire
etape-1.md
2 Ko
