Dans un nouveau projet : laravel_one_to_many
Nom du repo : laravel_one_to_many

DB

Créez un projet avec 2 tables (membres et genres )

Dans la table genres 2 colonne : id et genre

Dans la table membres 5 colonnes , id, nom, age, image, genre

fonctionnalité
Pour remplir la table "genres" faite un crud avec un input text pour rentrer un genre exemple : femme, homme, autre etc..

Pour remplir la table membre faite un crud dans le quel il y a :

Input file pour uploader la photo

un input text pour le nom

un input number pour l'age

un select option avec les choix de la table "Genre"

consigne IMPORTANTE
Attention : Dans le select option ce n'est pas vous manuellement qui faites des options mais ce sont bien les options qui existent dans la table "Genre", ce qui veut dire que si vous rajouter un Genre dans le crud Genre alors il y aura une option supplémentaire dans les options du crud membre.

autre fonctionnalité
-Utiliser les resources
-Faites les validations pour les deux tables
-Si la personne est une femme alors l'image a une bordure Bleue, si la personne est un Homme alors la bordure est Rouge et si c'est aucun de ces deux choix alors la photo est arrondie !
-Ajouter la possibilité de télécharger les images