# Projet PHP avec MySQL et phpMyAdmin via Docker

Ce projet permet de déployer une application PHP connectée à une base de données MySQL avec un environnement Docker. L'interface phpMyAdmin est également incluse pour gérer facilement la base de données.

## Prérequis

Pour utiliser ce projet, vous devez avoir Docker et Docker Compose installés sur votre machine. Si vous ne les avez pas, vous pouvez les installer en suivant les instructions sur les liens suivants :
- [Installer Docker](https://docs.docker.com/get-docker/)
- [Installer Docker Compose](https://docs.docker.com/compose/install/)

## Installation et utilisation

### Étape 1 : Cloner le dépôt

Commencez par cloner ce dépôt sur votre machine :

```bash
git clone https://github.com/TonNom/Docker-PDO.git
cd Docker-PDO
```

### Étape 2 : Lancer les services avec Docker Compose

Utilisez Docker Compose pour démarrer les services PHP, MySQL et phpMyAdmin. Exécutez la commande suivante dans le répertoire du projet :

```bash
sudo docker-compose up --build -d
```

Cette commande démarre trois conteneurs :

- **PHP** : pour l'application PHP.
- **MySQL** : pour la base de données.
- **phpMyAdmin** : pour gérer la base de données via une interface web.

### Étape 3 : Accéder à l'application

Une fois les conteneurs démarrés, vous pouvez accéder à l'application et à l'interface de gestion des bases de données :

- **Application PHP** : [http://localhost:8090](http://localhost:8090)
- **phpMyAdmin** : [http://localhost:8899](http://localhost:8899)

### Étape 4 : Connexion à phpMyAdmin

Utilisez phpMyAdmin pour gérer la base de données :

- **Nom d'utilisateur MySQL** : `Marc`
- **Mot de passe MySQL** : `12345`

Une base de données nommée **MJ** est déjà créée et prête à être utilisée.

### Arrêter les services

Pour arrêter l'application et les conteneurs Docker, exécutez la commande suivante :

```bash
sudo docker-compose down
```

Cela arrêtera et supprimera les conteneurs, mais les données de la base de données seront conservées.
