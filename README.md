# Blog Jean Forteroche "Billet simple pour l'Alaska".

Il souhaite publier son roman par épisode en ligne sur son propore site.

Développer une application de blog simple en PHP avec une base de données MySQL.
On doit y retrouver tous les éléments d'un CRUD.

Chaque billet doit permettre l'ajout de commentaires, qui pourront être modérés dans l'interface d'administration au besoin.
Les lecteurs doivent pouvoir "signaler" les commentaires pour que ceux-ci remontent plus facilement dans l'interface d'administration pour être modérés.

L'interface d'administration sera protégée par mot de passe. La rédaction de billets se fera dans une interface WYSIWYG basée sur TinyMCE, pour que Jean n'ait pas besoin de rédiger son histoire en HTML (on comprend qu'il n'ait pas très envie !).


Table chapter : id
                title
                content
                add_at


Table comment : id
                pseudo
                content
                add_at
                chapter_id
                parent_id
                lvl
                report_com

Jean: cool (id1)
  Loic : pas mal (id2)
