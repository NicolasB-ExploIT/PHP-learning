# PHP-Learning : My PHP/Symfony Learning thing

## C'est quoi ?

Je suis professeur et je donne des cours sur le framework Symfony. Et j'ai été surpris de voir que je ne trouvais pas ce que je voulais comme cadre pour permettre à mes élèves de développer sereinement pour apprendre Symfony.

Ce petit git contient donc un cadre docker pour permettre du dev, sans prétention. C'est pour mon usage personnel mais si vous voulez vous en servir, libre à vous !

## Quelques liens :

- http://localhost/ pour accéder au site

- https://localhost/ pour accéder au site en HTTPS

- http://localhost:81/ pour accéder à PHP My admin

## Quelques commandes

### Pour lancer les containers :

```bash
    docker-compose up -d
```

### Voir les logs :
```bash
    docker-compose logs php   #logs PHP
    docker-compose logs db    #logs Maria DB 
    docker-compose logs nginx #logs nginx
```

### Stopper les containers :

```bash
    docker-compose down
    docker-compose down -v #Si vous voulez supprimer la base de donnée
```

## FAQ

### Il avait plus simple à faire à tel endroit, et plus performant ...

C'est fort possible, j'ai fait ça vite fait ! Faites une PR et on verra si on peut améliorer ça.

### Il n'y a pas de mailer ?

Non, vu que mon cours ne couvre pas ce point. Mais pareil : faites une PR !

### Pourquoi il n'y a pas le maker-bundle, le security-bundle, ... ?

Le but ici est d'apprendre à mes élèves à installer des dépendances avec composer. Je l'ai fait pour la base de données, mais c'est tout.

### Pourquoi le user Phpmyadmin est en readonly ?

Le but pour mes élèves, c'est d'utiliser doctrine, pas de faire à la main sur PHPMyAdmin :)

