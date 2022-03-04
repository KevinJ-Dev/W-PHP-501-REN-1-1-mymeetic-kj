# Meetic

Bonjour ! 😀


    SUJET

Le but du projet est de créer un site de rencontres à la manière d’un Meetic. Nous vous proposons de
l’orienter vers la rencontre de personne dans un bahut qui partageraient des points communs par exemple.
Il est obligatoire de programmer en PHP orienté objet.
Il est fortement conseillé lors d’un envoi de données d’effectuer une requête ajax en JQuery afin de vérifier
et envoyer les données, puis traiter la réponse.
Il est obligatoire de gérer tous les cas d’erreurs possibles (injections SQL, doublons en DB, etc. . . )



    INSCRIPTION / CONNEXION

• nom
• prénom
• date de naissance (vérification de l’âge, inscription réservé +18)
• genre (homme, femme, autre. . . )
• ville
• e-mail (unique, utilisé pour la connexion)
• mot de passe (hashé, utilisé pour la connexion)
• loisir (au moins un)




    MON COMPTE

• Un récapitulatif des informations du compte:
• nom
• prénom
• date de naissance (vérification de l’âge, inscription réservé +18)
• genre (homme, femme, autre. . . )
• e-mail
• loisir(s)
• Un gestionnaire de compte (modification du mot de passe, e-mail, . . . ).
• Une fonctionnalité permettant de supprimer définitivement le compte





    RECHERCHE

Nous allons maintenant nous focaliser sur l’aspect rencontres du site. Il est attendu une page de recherche
dans laquelle on peut spécifier des filtres par:
• Genre (Homme/Femme/Autre)
• Localisation (ville)
• Loisir (Proposer plusieurs tags possibles(Dance, Skateboard, Manga, Licorne, Cuisiner / Autre à préciser dans ce cas)
• Tranche d’âge (18/25, 25/35, 35/45, 45+)
Il doit être possible de spécifier plusieurs villes (Paris, Lyon, Marseille) et de combiner tous les filtres. Par
exemple: rechercher un homme entre 25 et 35 ans, habitant à Paris ou Lyon qui aime lire des mangas et
cuisiner.
Le résultat de la recherche se présentera sous la forme d’un carrousel. Chaque élément de celui-ci devra
contenir les informations d’une personne.
Ce carrousel sera développé en JQuery.

# Maquette Figma


![alt text](http://image.noelshack.com/fichiers/2022/03/5/1642778258-index-2.png)

![alt text](http://image.noelshack.com/fichiers/2022/03/5/1642778258-inscription-2.png)

![alt text](http://image.noelshack.com/fichiers/2022/03/5/1642778258-connection-2.png)