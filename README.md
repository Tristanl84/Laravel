# Laravel
Lorsque la vm est lancée, en accédant au site je peux: 
    - Créer un compte Utilisateur ou Administrateur par le biais d'un middleware
    - Accéder à une page administrateur (quand connecté en administrateur) qui permet d'accéder a tous les utilisateurs ainsi qu'a leurs informations (compétences) 
    - Accéder à une page membre (quand connecté en tant que membre) qui permet d'accéder aux informations (compétences) de l'utisateur connecté.

Toutes les modifications faites font une mise a jour de la base de donnée.
Je n'ai pas réussi a faire en sorte que l'administrateur puisse modifier chaque personne présentes dans la base de donnée.