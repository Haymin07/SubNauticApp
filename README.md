# SubNauticApp

Bonjour !
Merci d'avoir retenu ma candidature, voici une explication de mon code.

# Les requêtes

La liste de toutes les Bases Nautiques
GET http://webmmi.iut-tlse3.fr/~ltm2780a/Laravel2/lumentest/public/bases

Une Base Nautique
GET http://webmmi.iut-tlse3.fr/~ltm2780a/Laravel2/lumentest/public/bases/?
Remplacer le "?" par l'id de la base nautique recherchée

Ajout d'une Base Nautique
POST http://webmmi.iut-tlse3.fr/~ltm2780a/Laravel2/lumentest/public/bases

Suppression d'une Base Nautique
DELETE http://webmmi.iut-tlse3.fr/~ltm2780a/Laravel2/lumentest/public/bases

Modification d'une Base Nautique
PUT http://webmmi.iut-tlse3.fr/~ltm2780a/Laravel2/lumentest/public/bases/?
Remplacer le "?" par l'id de la base nautique à supprimer

# Le Framework

Vous pourrez retrouver le code de l'API dans le fichier routes/web.php
Les fichiers de configurations sont : 
 - .env qui permet de faire l'accès à la base de donnée
 - public/.htaccess qui permet de faire le lien avec le serveur

Comme c'est la première fois que je devais utiliser le framework PHP Symfony, malgré les recherches effectuées et les diverses tentatives réalisées, je n'ai pas réussi à l'installer. Mon professeur m'a donc aidé à utiliser un autre framework, Laravel.
Je n'ai également pas réussi à utiliser l'ORM Doctrine. J'ai donc seulement créé une entité.
