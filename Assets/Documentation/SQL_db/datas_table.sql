INSERT INTO `app_user` 
(`id_user`, `last_name`, `first_name`, `mail`, `adresse`, `zip_code`, `city`, `password`, `role`, `fk_id_store`) 
VALUES
(5, 'Garcia', 'José', 'patron@test.com', '12 rue du bout', '43321', 'Laville', '', 'admin', 2),
(6, 'Percheron', 'Arnaud', 'ap.percheron@gmail.com', '42 de chez moi', '59000', 'Lille', '$2y$10$MuK1086C/bj87HxqEou5aOuGLA5H1r8OEkioEA3JCiLfwFxQ/J.ha', 'user', 1);


INSERT INTO `contenu` (`id_order`, `id_jeu`, `quantity`, `price_total`) VALUES
(1, 2, 1, 59.99),
(1, 3, 2, 39.98),
(2, 4, 1, 64.99),
(3, 1, 1, 49.99),
(3, 5, 3, 29.97);


INSERT INTO `games` (`id_jeu`, `name`, `description`, `id_pegi`, `id_about`) VALUES
(1, 'Super Mario Odyssey', 'Rejoignez Mario dans une vaste aventure en 3D à travers le globe et servez vous de ses incroyables nouvelles capacités pour récolter des lunes afin d''alimenter 
votre vaisseau, l''Odyssée, et de venir à la rescousse de la Princesse Peach qui a une nouvelle fois été kidnappée par Bowser !', 7, 1),
(2, 'The Witcher 3: Wild Hunt', 'Les Royaumes du Nord sont en perdition, affaiblis par les batailles contre Nilfgaard, bien plus puissant. Outre le manque de rois, une nouvelle menace bien plus 
dangereuse est apparue : la Chasse Sauvage, composée de terrifiants spectres chevauchant des destriers squelettiques, semant le chaos et enlevant de jeunes enfants sur leur passage. Personne 
ne sait comment les vaincre, ni quel est leur but. Toutefois, ils semblent en vouloir particulièrement à Geralt de Riv, et pour l''atteindre, ils sont prêts à jouer sur les sentiments du Loup 
Blanc en s''en prenant à ses proches. \n\nGeralt s''est remis de son amnésie, et il part à la recherche des gens qu''il aime pour les protéger et ce, quel qu''en soit le prix.', 18, 2),
(3, 'Minecraft', 'Un jeu vidéo où tu peux construire tout ce que tu imagines dans un monde infini composé de blocs. Tu peux explorer, créer, survivre et jouer avec tes amis. C''est un peu comme 
avoir un monde de Lego virtuel, mais en beaucoup plus grand et avec beaucoup plus de possibilités !\n\nEn bref, c''est un jeu où tu es libre de :\n\nExplorer: Des forêts aux déserts, en passant 
par les mines.\nConstruire: Des maisons aux châteaux, en passant des machines.\nCréer: Des œuvres d''art, des jeux, des histoires...\nSurvivre: En te nourrissant, en te protégeant des monstres 
et en fabriquant des outils.\nC''est un jeu qui te permet de laisser libre cours à ton imagination !', 7, 3),
(4, 'Elden Ring', 'L''Ordre d''or a été anéanti.\n\nLevez-vous, Sans-éclat, et puisse la grâce guider vos pas. Brandissez la puissance du Cercle d''Elden. Devenez Seigneur de l''Entre-terre.
\nDans l''Entre-terre où règne la reine Marika l''Éternelle, le Cercle d''Elden, source vitale de l''Arbre-Monde, fut brisé.\nLes descendants de Marika, tous des demi-dieux, revendiquèrent les 
éclats du Cercle d''Elden, également appelés runes majeures.\nAinsi débuta l''Éclatement, une guerre émanant de la folie provoquée par leur puissance fraîchement acquise. Une guerre qui sonna 
le renoncement de la Volonté suprême. Ainsi viendra l''heure des Sans-éclat, eux à qui se refusa jadis la grâce dorée, et qui furent exilés de l''Entre-terre.\nVous qui avez péri et qui 
pourtant vivez, cheminez vers l''Entre-terre, par-delà la Mer de brume, pour vous tenir devant le Cercle d''Elden.\nEt ainsi en devenir Seigneur.', 16, 4),
(5, 'Pokémon Écarlate/Violet', 'Dans Pokémon Écarlate et Violet, tu incarnes un élève de l''Académie Raisin ou Orange, et tu as pour mission d''explorer la région de Paldea. Tu peux choisir 
parmi trois quêtes principales :\n\nLes arènes: Affronte les huit champions d''arène pour devenir le meilleur dresseur.\nLes Pokémon Dominants: Combat cinq Pokémon géants pour récupérer des 
épices spéciales.\nLa Team Star: Déjoue les plans de cette organisation malfaisante.\nEn explorant Paldea, tu découvriras de nouveaux Pokémon, noueras des amitiés et apprendras l''histoire 
de la région. Tu auras également l''occasion de voyager dans le passé ou le futur grâce à une machine mystérieuse.\n\nÀ la fin de ton aventure, tu pourras explorer librement la Zone Zéro et 
devenir le maître Pokémon ultime !', 7, 5),
(6, 'Call of Duty: Modern Warfare II', 'Call of Duty: Modern Warfare II est un jeu de tir intense qui te plonge au cœur d''un conflit mondial.
Le retour de la Task Force 141 ! Call of Duty: Modern Warfare II reprend les codes qui ont fait le succès de la série, avec un scénario haletant et un gameplay toujours aussi intense.
Avec un mode solo captivant et un multijoueur addictif, ce jeu est un incontournable pour les fans de FPS.', 18, 6),
(7, 'Among Us', 'Among Us est un jeu multijoueur où des astronautes doivent accomplir des tâches pour réparer un vaisseau spatial. Cependant, parmi eux se cachent des imposteurs, prêts à 
tout pour saboter le vaisseau et éliminer l''équipage. Les joueurs doivent collaborer pour découvrir l''identité des imposteurs lors de réunions d''urgence, tout en accomplissant leurs 
tâches et en évitant de se faire tuer. Un mélange de stratégie, de tromperie et de déduction vous attend !', 3, 7),
(8, 'Cyberpunk 2077', 'Cyberpunk 2077 est un RPG d''action-aventure en monde ouvert se déroulant dans la mégalopole de Night City.\nIncarnez un cyber-mercenaire qui combat pour sa survie. 
Profitez d''améliorations next-gen et de contenu additionnel gratuit, personnalisez et améliorez votre personnage et votre style de jeu, gagnez des contrats et faites-vous une réputation. 
Vos relations et vos choix auront un impact sur l''histoire et le monde qui vous entoure. C''est ici que se forgent les légendes.\n\nQuelle sera la vôtre ?', 18, 8),
(9, 'The Legend of Zelda: Breath of the Wild', 'The Legend of Zelda : Breath of the Wild est un jeu d''action/aventure. Link se réveille d''un sommeil de 100 ans dans un royaume d''Hyrule 
dévasté. Il lui faudra percer les mystères du passé et vaincre Ganon, le fléau. L''aventure prend place dans un gigantesque monde ouvert et accorde ainsi une part importante à l''exploration. 
Le titre a été pensé pour que le joueur puisse aller où il veut dès le début, s''éloignant de la linéarité habituelle de la série.', 12, 9),
(10, 'Stardew Valley', 'Stardew Valley est un RPG de vie à la campagne en mode infini ! Vous avez hérité de l''ancienne ferme de votre grand-père dans Stardew Valley. Armé d''outils et d''un 
peu d''argent, vous vous lancez dans votre nouvelle vie. Arriverez-vous à vivre de la terre et à transformer ces champs débordants de végétation en un lieu florissant ? Ce ne sera pas facile. 
Depuis que Joja Corporation s''est installé en ville, les anciens modes de vie tendent à disparaître. Le centre de la communauté, autrefois le cœur vibrant de l''activité n''est plus que 
l''ombre de lui-même. Mais la vallée semble pleine de promesses. Avec un peu de dévouement, vous aurez l''occasion de restaurer sa grandeur passée à Stardew Valley.', 3, 10),
(11, 'Hades', 'Hades est un rogue-like et dungeon crawler. Dans la peau du prince des Enfers, vous manierez les pouvoirs et les armes mythiques de l''Olympe pour vous libérer des griffes du 
dieu des morts en personne, développant vos forces et dévoilant de nouveaux secrets à chaque nouvelle tentative d''évasion.', 16, 11),
(12, 'Hollow Knight', 'Hollow Knight est un jeu d''aventure et d''exploration qui vous plonge dans un vaste royaume en ruine. Dans ce jeu, résolument 2D, explorez des cavernes lugubres, 
affrontez de terribles créatures et devenez ami avec d''étranges insectes. Forgez votre propre chemin et explorez ce royaume peuplé de héros et d''insectes.', 12, 12),
(13, 'Red Dead Redemption 2', 'Red Dead Redemption 2 se déroule en 1899 et est une préquelle à Red Dead Redemption.\n\n« Amérique, 1899. L''ère de l''Ouest sauvage touche à sa fin alors que 
les autorités ont décidé de traquer les dernières bandes de hors-la-loi qui sévissent encore. Ceux qui ne se rendent pas ou résistent sont tués.\n\nSuite à un braquage qui a mal tourné dans 
la ville de Blackwater, Arthur Morgan et le reste des hors-la-loi de la bande de Dutch van der Linde doivent prendre la fuite vers l''est. Les agents fédéraux et les meilleurs chasseurs de 
primes du pays se mettent à leurs trousses et la bande commet méfaits sur méfaits dans les vastes terres sauvages de l''Amérique dans un seul et unique but : survivre. Alors que des querelles 
internes menacent de faire voler la bande en éclats, Arthur est tiraillé entre ses propres idéaux et sa loyauté envers la bande qui l''a élevé.\n\nPar les créateurs de Grand Theft Auto V 
et Red Dead Redemption, Red Dead Redemption 2 raconte une histoire épique au cœur de l''Amérique à l''aube de l''ère moderne. »', 18, 13),
(14, 'Celeste', 'Aidez Madeline à survivre à ses démons intérieurs au mont Celeste, dans ce jeu de plateformes ultra relevé, réalisé par les créateurs du classique TowerFall. Relevez des 
centaines de défis faits à la main, découvrez tous les secrets et dévoilez le mystère de la montagne.', 7, 14),
(15, 'Dead Cells', 'Dead Cells est un jeu d''action/plateforme rogue-lite intégrant des éléments de Metroidvania. Explorez un château tentaculaire en perpétuelle évolution… Pas de points de 
contrôle. Tuer, mourir, apprendre, recommencer.\nDead Cells vous met dans la peau d''une expérience scientifique ratée. Immortel mais estropié, votre dernier recours est de prendre contrôle 
de corps afin de vous déplacer, d''explorer... et de combattre.\nBien que vous soyez immortel, les corps que vous possédez ne le sont pas. À chaque fois que votre hôte est détruit, vous serez 
renvoyé au donjon, et il vous faudra posséder un nouveau corps pour tout recommencer...', 16, 15);


INSERT INTO `genre` (`name`) VALUES
('Action'),
('RPG'),
('Aventure'),
('Simulation'),
('Sport'),
('Stratégie'),
('Horreur'),
('Indé'),
('Plateforme'),
('Combat'),
('Monde ouvert'),
('Tir à la première personne'),
('Tir à la troisième personne'),
('Rogue-lite'),
('Metroidvania'),
('Jeu de rôle'),
('Multijoueur'),
('Solo'),
('Multijoueur en ligne'),
('Action-aventure'),
('Beat them all'),
('Rhythm game'),
('Puzzle game'),
('Tactical RPG'),
('Hack and slash'),
('MOBA '),
('JRPG'),
('MMO'),
('ARPG'),
('Battle royale'),
('Hero shooter'),
('Tactical shooter'),
('Simulation de vie'),
('Simulation de vol'),
('Simulation de course'),
('VR'),
('AR'),
('Point-and-click'),
('Shoot them up'),
('Adventure game'),
('Indie'),
('Casual'),
('Survie');

INSERT INTO `about` (`id_about`, `developpeur`, `editeur`, `date_de_sortie`) VALUES
(1, 'Nintendo', 'Nintendo', '2017-10-27'),
(2, 'CD Projekt', 'CD Projekt RED', '2015-05-19'),
(3, '4J Studios', 'Mojang', '2011-11-18'),
(4, 'FromSoftware, Inc', 'Bandai Namco Games', '2022-02-25'),
(5, 'Game Freak', 'Nintendo The Pokémon Company', '2022-11-18'),
(6, 'Infinity Ward', 'Activision', '2022-10-28'),
(7, 'Innersloth', 'Innersloth', '2020-12-15'),
(8, 'CD Projekt RED', 'CD Projekt', '2022-02-15'),
(9, 'Nintendo EPD', 'Nintendo', '2017-03-03'),
(10, 'ConcernedApe', 'Chucklefish Games', '2016-02-26'),
(11, 'Supergiant Games', 'Supergiant Games', '2020-09-17'),
(12, 'Team Cherry', 'Team Cherry', '2017-02-24'),
(13, 'Rockstar Studios', 'Rockstar Studios', '2018-11-26'),
(14, 'Extremely OK Games', 'Extremely OK Games', '2020-07-28'),
(15, 'Motion Twin', 'Motion Twin', '2017-05-10');

INSERT INTO `pegi` (`id_pegi`, `label`) VALUES
(3, '3'),
(7, '7'),
(12, '12'),
(16, '16'),
(18, '18');

INSERT INTO `plateforme` (`name`) VALUES
('PlayStation 5'),
('Xbox Series X|S'),
('Nintendo Switch'),
('PlayStation 4'),
('Xbox One'),
('Nintendo Switch Lite'),
('PlayStation 3'),
('Xbox 360'),
('Wii U'),
('Nintendo 3DS'),
('PlayStation 2'),
('Xbox'),
('GameCube'),
('Nintendo 64'),
('PlayStation'),
('Sega Saturn'),
('Nintendo 64DD'),
('Super Nintendo Entertainment System'),
('Mega Drive'),
('Super Famicom'),
('Game Boy Advance SP'),
('Game Boy Color'),
('Game Boy'),
('Nintendo DS Lite'),
('Nintendo 3DS XL'),
('PlayStation Vita'),
('Sega Game Gear'),
('Neo Geo Pocket'),
('PC'),
('Stadia'),
('GeForce Now');

INSERT INTO `specifications` (`id_store`, `id_jeu`, `id_plateforme`, `price`, `quantity`, `discounted`, `promo`) VALUES
-- Super Mario Odissey
(1, 1, 3, 49.99, 20, 1, 0.99), (2, 1, 3, 49.99, 13, 1, 0.99), (3, 1, 3, 49.99, 23, 1, 0.99), (4, 1, 3, 49.99, 18, 1, 0.99), (5, 1, 3, 49.99, 16, 1, 0.99),

-- The Witcher 3
(1, 2, 1, 59.99, 10, 0, 0.00), (2, 2, 1, 59.99, 15, 0, 0.00), (3, 2, 1, 59.99, 21, 0, 0.00), (4, 2, 1, 59.99, 8, 0, 0.00), (5, 2, 1, 59.99, 11, 0, 0.00),
(1, 2, 2, 49.99, 1, 0, 0.00), (2, 2, 2, 49.99, 11, 0, 0.00), (3, 2, 2, 49.99, 21, 0, 0.00), (4, 2, 2, 49.99, 10, 0, 0.00), (5, 2, 2, 49.99, 11, 0, 0.00),
(1, 2, 3, 37.99, 11, 0, 0.00), (2, 2, 3, 37.99, 14, 0, 0.00), (3, 2, 3, 37.99, 12, 0, 0.00), (4, 2, 3, 37.99, 6, 0, 0.00), (5, 2, 3, 37.99, 4, 0, 0.00),
(1, 2, 4, 34.99, 21, 0, 0.00), (2, 2, 4, 34.99, 4, 0, 0.00), (3, 2, 4, 34.99, 13, 0, 0.00), (4, 2, 4, 34.99, 7, 0, 0.00), (5, 2, 4, 34.99, 9, 0, 0.00),
(1, 2, 5, 42.99, 12, 0, 0.00), (2, 2, 5, 42.99, 13, 0, 0.00), (3, 2, 5, 42.99, 11, 0, 0.00), (4, 2, 5, 42.99, 16, 0, 0.00), (5, 2, 5, 42.99, 14, 0, 0.00),
(1, 2, 30, 29.99, 9, 0, 0.00), (2, 2, 30, 29.99, 14, 0, 0.00), (3, 2, 30, 29.99, 0, 0, 0.00), (4, 2, 30, 29.99, 7, 0, 0.00), (5, 2, 30, 29.99, 12, 0, 0.00),

-- MineCraft
(1, 3, 1, 19.99, 15, 1, 0.99), (2, 3, 1, 19.99, 5, 1, 0.99), (3, 3, 1, 19.99, 12, 1, 0.99), (4, 3, 1, 19.99, 3, 1, 0.99), (5, 3, 1, 19.99, 5, 1, 0.99),
(1, 3, 2, 19.99, 14, 1, 0.99), (2, 3, 2, 19.99, 6, 1, 0.99), (3, 3, 2, 19.99, 13, 1, 0.99), (4, 3, 2, 19.99, 4, 1, 0.99), (5, 3, 2, 19.99, 4, 1, 0.99),
(1, 3, 3, 19.99, 13, 1, 0.99), (2, 3, 3, 19.99, 7, 1, 0.99), (3, 3, 3, 19.99, 14, 1, 0.99), (4, 3, 3, 19.99, 5, 1, 0.99), (5, 3, 3, 19.99, 3, 1, 0.99),
(1, 3, 4, 19.99, 12, 1, 0.99), (2, 3, 4, 19.99, 8, 1, 0.99), (3, 3, 4, 19.99, 15, 1, 0.99), (4, 3, 4, 19.99, 6, 1, 0.99), (5, 3, 4, 19.99, 2, 1, 0.99),
(1, 3, 5, 19.99, 11, 1, 0.99), (2, 3, 5, 19.99, 9, 1, 0.99), (3, 3, 5, 19.99, 16, 1, 0.99), (4, 3, 5, 19.99, 7, 1, 0.99), (5, 3, 5, 19.99, 1, 1, 0.99),
(1, 3, 30, 29.99, 10, 1, 0.99), (2, 3, 30, 29.99, 10, 1, 0.99), (3, 3, 30, 29.99, 17, 1, 0.99), (4, 3, 30, 29.99, 8, 1, 0.99), (5, 3, 30, 29.99, 0, 1, 0.99),

-- Elden Ring
(1, 4, 1, 64.99, 8, 0, 0.00), (2, 4, 1, 64.99, 18, 0, 0.00), (3, 4, 1, 64.99, 12, 0, 0.00), (4, 4, 1, 64.99, 6, 0, 0.00), (5, 4, 1, 64.99, 17, 0, 0.00),
(1, 4, 2, 64.99, 5, 0, 0.00), (2, 4, 2, 64.99, 15, 0, 0.00), (3, 4, 2, 64.99, 15, 0, 0.00), (4, 4, 2, 64.99, 5, 0, 0.00), (5, 4, 2, 64.99, 15, 0, 0.00),
(1, 4, 4, 64.99, 6, 0, 0.00), (2, 4, 4, 64.99, 16, 0, 0.00), (3, 4, 4, 64.99, 16, 0, 0.00), (4, 4, 4, 64.99, 6, 0, 0.00), (5, 4, 4, 64.99, 16, 0, 0.00),
(1, 4, 5, 64.99, 7, 0, 0.00), (2, 4, 5, 64.99, 17, 0, 0.00), (3, 4, 5, 64.99, 17, 0, 0.00), (4, 4, 5, 64.99, 7, 0, 0.00), (5, 4, 5, 64.99, 17, 0, 0.00),
(1, 4, 30, 59.99, 8, 0, 0.00), (2, 4, 30, 59.99, 18, 0, 0.00), (3, 4, 30, 59.99, 12, 0, 0.00), (4, 4, 30, 59.99, 6, 0, 0.00), (5, 4, 30, 59.99, 17, 0, 0.00),

-- Pokémon Écarlate/Violet
(1, 5, 3, 119.99, 15, 0, 0.00), (2, 5, 3, 119.99, 12, 0, 0.00), (3, 5, 3, 119.99, 6, 0, 0.00), (4, 5, 3, 119.99, 4, 0, 0.00), (5, 5, 3, 119.99, 0, 0, 0.00),

-- Call of Duty: Modern Warfare II
(1, 6, 1, 69.99, 9, 1, 0.99), (2, 6, 1, 69.99, 21, 1, 0.99), (3, 6, 1, 69.99, 2, 1, 0.99), (4, 6, 1, 69.99, 1, 1, 0.99), (5, 6, 1, 69.99, 12, 1, 0.99),
(1, 6, 2, 69.99, 9, 1, 0.99), (2, 6, 2, 69.99, 2, 1, 0.99), (3, 6, 2, 69.99, 8, 1, 0.99), (4, 6, 2, 69.99, 4, 1, 0.99), (5, 6, 2, 69.99, 1, 1, 0.99),
(1, 6, 4, 69.99, 9, 0, 0.99), (2, 6, 4, 69.99, 12, 1, 0.99), (3, 6, 4, 69.99, 4, 1, 0.99), (4, 6, 4, 69.99, 2, 1, 0.99), (5, 6, 4, 69.99, 2, 1, 0.99),
(1, 6, 5, 69.99, 9, 1, 0.99), (2, 6, 5, 69.99, 1, 1, 0.99), (3, 6, 5, 69.99, 5, 1, 0.99), (4, 6, 5, 69.99, 3, 1, 0.99), (5, 6, 5, 69.99, 5, 1, 0.99),
(1, 6, 30, 69.99, 9, 1, 0.99), (2, 6, 30, 69.99, 3, 1, 0.99), (3, 6, 30, 69.99, 6, 1, 0.99), (4, 6, 30, 69.99, 7, 1, 0.99), (5, 6, 30, 69.99, 9, 1, 0.99),

-- Among Us
(1, 7, 1, 4.99, 5, 0, 0.00), (2, 7, 1, 4.99, 0, 0, 0.00), (3, 7, 1, 4.99, 4, 0, 0.00), (4, 7, 1, 4.99, 3, 0, 0.00), (5, 7, 1, 4.99, 2, 0, 0.00),
(1, 7, 2, 4.99, 2, 0, 0.00), (2, 7, 2, 4.99, 1, 0, 0.00), (3, 7, 2, 4.99, 3, 0, 0.00), (4, 7, 2, 4.99, 2, 0, 0.00), (5, 7, 2, 4.99, 1, 0, 0.00),
(1, 7, 3, 4.99, 3, 0, 0.00), (2, 7, 3, 4.99, 2, 0, 0.00), (3, 7, 3, 4.99, 2, 0, 0.00), (4, 7, 3, 4.99, 1, 0, 0.00), (5, 7, 3, 4.99, 0, 0, 0.00),
(1, 7, 4, 4.99, 4, 0, 0.00), (2, 7, 4, 4.99, 3, 0, 0.00), (3, 7, 4, 4.99, 1, 0, 0.00), (4, 7, 4, 4.99, 0, 0, 0.00), (5, 7, 4, 4.99, 5, 0, 0.00),
(1, 7, 5, 4.99, 1, 0, 0.00), (2, 7, 5, 4.99, 4, 0, 0.00), (3, 7, 5, 4.99, 0, 0, 0.00), (4, 7, 5, 4.99, 4, 0, 0.00), (5, 7, 5, 4.99, 4, 0, 0.00),
(1, 7, 30, 4.99, 0, 0, 0.00), (2, 7, 30, 4.99, 5, 0, 0.00), (3, 7, 30, 4.99, 5, 0, 0.00), (4, 7, 30, 4.99, 5, 0, 0.00), (5, 7, 30, 4.99, 3, 0, 0.00),

-- Cyberpunk 2077
(1, 8, 1, 49.99, 15, 0, 0.00), (2, 8, 1, 49.99, 0, 0, 0.00), (3, 8, 1, 49.99, 7, 0, 0.00), (4, 8, 1, 49.99, 11, 0, 0.00), (5, 8, 1, 49.99, 3, 0, 0.00),
(1, 8, 2, 69.99, 16, 0, 0.00), (2, 8, 2, 69.99, 11, 0, 0.00), (3, 8, 2, 69.99, 4, 0, 0.00), (4, 8, 2, 69.99, 1, 0, 0.00), (5, 8, 2, 69.99, 6, 0, 0.00),
(1, 8, 30, 59.99, 12, 0, 0.00), (2, 8, 30, 59.99, 14, 0, 0.00), (3, 8, 30, 59.99, 8, 0, 0.00), (4, 8, 30, 59.99, 5, 0, 0.00), (5, 8, 30, 59.99, 0, 0, 0.00),

-- The Legend of Zelda: Breath of the Wild
(1, 9, 3, 54.99, 15, 0, 0.00), (2, 9, 3, 54.99, 0, 0, 0.00), (3, 9, 3, 54.99, 12, 0, 0.00), (4, 9, 3, 54.99, 8, 0, 0.00), (5, 9, 3, 54.99, 17, 0, 0.00),
(1, 9, 9, 39.99, 3, 0, 0.00), (2, 9, 9, 39.99, 8, 0, 0.00), (3, 9, 9, 39.99, 11, 0, 0.00), (4, 9, 9, 39.99, 15, 0, 0.00), (5, 9, 9, 39.99, 0, 0, 0.00),

-- Stardew Valley
(1, 10, 3, 13.99, 15, 0, 0.00), (2, 10, 3, 13.99, 12, 0, 0.00), (3, 10, 3, 13.99, 1, 0, 0.00), (4, 10, 3, 13.99, 2, 0, 0.00), (5, 10, 3, 13.99, 6, 0, 0.00),
(1, 10, 4, 13.99, 11, 0, 0.00), (2, 10, 4, 13.99, 10, 0, 0.00), (3, 10, 4, 13.99, 0, 0, 0.00), (4, 10, 4, 13.99, 4, 0, 0.00), (5, 10, 4, 13.99, 8, 0, 0.00),
(1, 10, 5, 13.99, 7, 0, 0.00), (2, 10, 5, 13.99, 15, 0, 0.00), (3, 10, 5, 13.99, 12, 0, 0.00), (4, 10, 5, 13.99, 1, 0, 0.00), (5, 10, 5, 13.99, 5, 0, 0.00),
(1, 10, 30, 13.99, 5, 0, 0.00), (2, 10, 30, 13.99, 6, 0, 0.00), (3, 10, 30, 13.99, 7, 0, 0.00), (4, 10, 30, 13.99, 8, 0, 0.00), (5, 10, 30, 13.99, 2, 0, 0.00),

-- Hades
(1, 11, 1, 24.99, 15, 0, 0.00), (2, 11, 1, 24.99, 9, 0, 0.00), (3, 11, 1, 24.99, 12, 0, 0.00), (4, 11, 1, 24.99, 14, 0, 0.00), (5, 11, 1, 24.99, 1, 0, 0.00),
(1, 11, 2, 29.99, 8, 0, 0.00), (2, 11, 2, 29.99, 15, 0, 0.00), (3, 11, 2, 29.99, 12, 0, 0.00), (4, 11, 2, 29.99, 15, 0, 0.00), (5, 11, 2, 29.99, 18, 0, 0.00),
(1, 11, 3, 39.99, 1, 0, 0.00), (2, 11, 3, 39.99, 5, 0, 0.00), (3, 11, 3, 39.99, 2, 0, 0.00), (4, 11, 3, 39.99, 3, 0, 0.00), (5, 11, 3, 39.99, 4, 0, 0.00),
(1, 11, 4, 23.50, 4, 0, 0.00), (2, 11, 4, 23.50, 6, 0, 0.00), (3, 11, 4, 23.50, 7, 0, 0.00), (4, 11, 4, 23.50, 8, 0, 0.00), (5, 11, 4, 23.50, 0, 0, 0.00),
(1, 11, 5, 22.50, 0, 0, 0.00), (2, 11, 5, 22.50, 4, 0, 0.00), (3, 11, 5, 22.50, 12, 0, 0.00), (4, 11, 5, 22.50, 11, 0, 0.00), (5, 11, 5, 22.50, 1, 0, 0.00),
(1, 11, 30, 24.50, 2, 0, 0.00), (2, 11, 30, 24.50, 9, 0, 0.00), (3, 11, 30, 24.50, 3, 0, 0.00), (4, 11, 30, 24.50, 14, 0, 0.00), (5, 11, 30, 24.50, 16, 0, 0.00),

-- Hollow Knight
(1, 12, 3, 13.99, 8, 0, 0.00), (2, 12, 3, 13.99, 15, 0, 0.00), (3, 12, 3, 13.99, 7, 0, 0.00), (4, 12, 3, 13.99, 6, 0, 0.00), (5, 12, 3, 13.99, 5, 0, 0.00),
(1, 12, 4, 9.99, 4, 0, 0.00), (2, 12, 4, 9.99, 3, 0, 0.00), (3, 12, 4, 9.99, 2, 0, 0.00), (4, 12, 4, 9.99, 1, 0, 0.00), (5, 12, 4, 9.99, 0, 0, 0.00),
(1, 12, 5, 7.99, 9, 0, 0.00), (2, 12, 5, 7.99, 10, 0, 0.00), (3, 12, 5, 7.99, 11, 0, 0.00), (4, 12, 5, 7.99, 12, 0, 0.00), (5, 12, 5, 7.99, 13, 0, 0.00),
(1, 12, 30, 8.99, 14, 0, 0.00), (2, 12, 30, 8.99, 15, 0, 0.00), (3, 12, 30, 8.99, 16, 0, 0.00), (4, 12, 30, 8.99, 1, 0, 0.00), (5, 12, 30, 8.99, 5, 0, 0.00),

-- Red Dead Redemption 2
(1, 13, 1, 59.99, 3, 0, 0.00), (2, 13, 1, 59.99, 8, 0, 0.00), (3, 13, 1, 59.99, 11, 0, 0.00), (4, 13, 1, 59.99, 5, 0, 0.00), (5, 13, 1, 59.99, 8, 0, 0.00),
(1, 13, 2, 59.99, 4, 0, 0.00), (2, 13, 2, 59.99, 14, 0, 0.00), (3, 13, 2, 59.99, 11, 0, 0.00), (4, 13, 2, 59.99, 1, 0, 0.00), (5, 13, 2, 59.99, 4, 0, 0.00),
(1, 13, 4, 59.99, 4, 0, 0.00), (2, 13, 4, 59.99, 12, 0, 0.00), (3, 13, 4, 59.99, 9, 0, 0.00), (4, 13, 4, 59.99, 0, 0, 0.00), (5, 13, 4, 59.99, 0, 0, 0.00),
(1, 13, 5, 59.99, 3, 0, 0.00), (2, 13, 5, 59.99, 6, 0, 0.00), (3, 13, 5, 59.99, 2, 0, 0.00), (4, 13, 5, 59.99, 3, 0, 0.00), (5, 13, 5, 59.99, 6, 0, 0.00),
(1, 13, 30, 59.99, 12, 0, 0.00), (2, 13, 30, 59.99, 4, 0, 0.00), (3, 13, 30, 59.99, 8, 0, 0.00), (4, 13, 30, 59.99, 4, 0, 0.00), (5, 13, 30, 59.99, 5, 0, 0.00),

-- Celeste
(1, 14, 3, 12.99, 1, 0, 0.00), (2, 14, 3, 12.99, 3, 0, 0.00), (3, 14, 3, 12.99, 5, 0, 0.00), (4, 14, 3, 12.99, 6, 0, 0.00), (5, 14, 3, 12.99, 2, 0, 0.00),
(1, 14, 4, 13.99, 5, 0, 0.00), (2, 14, 4, 13.99, 7, 0, 0.00), (3, 14, 4, 13.99, 8, 0, 0.00), (4, 14, 4, 13.99, 3, 0, 0.00), (5, 14, 4, 13.99, 3, 0, 0.00),
(1, 14, 5, 8.99, 0, 0, 0.00), (2, 14, 5, 8.99, 2, 0, 0.00), (3, 14, 5, 8.99, 4, 0, 0.00), (4, 14, 5, 8.99, 5, 0, 0.00), (5, 14, 5, 8.99, 2, 0, 0.00),
(1, 14, 30, 15.99, 1, 0, 0.00), (2, 14, 30, 15.99, 0, 0, 0.00), (3, 14, 30, 15.99, 4, 0, 0.00), (4, 14, 30, 15.99, 4, 0, 0.00), (5, 14, 30, 15.99, 5, 0, 0.00),

-- Dead Cells
(1, 15, 1, 24.99, 6, 0, 0.00), (2, 15, 1, 24.99, 5, 0, 0.00), (3, 15, 1, 24.99, 4, 0, 0.00), (4, 15, 1, 24.99, 3, 0, 0.00), (5, 15, 1, 24.99, 8, 0, 0.00),
(1, 15, 2, 24.99, 6, 0, 0.00), (2, 15, 2, 24.99, 2, 0, 0.00), (3, 15, 2, 24.99, 4, 0, 0.00), (4, 15, 2, 24.99, 5, 0, 0.00), (5, 15, 2, 24.99, 7, 0, 0.00),
(1, 15, 3, 24.99, 8, 0, 0.00), (2, 15, 3, 24.99, 2, 0, 0.00), (3, 15, 3, 24.99, 0, 0, 0.00), (4, 15, 3, 24.99, 5, 0, 0.00), (5, 15, 3, 24.99, 5, 0, 0.00),
(1, 15, 4, 24.99, 2, 0, 0.00), (2, 15, 4, 24.99, 3, 0, 0.00), (3, 15, 4, 24.99, 1, 0, 0.00), (4, 15, 4, 24.99, 0, 0, 0.00), (5, 15, 4, 24.99, 4, 0, 0.00),
(1, 15, 5, 24.99, 1, 0, 0.00), (2, 15, 5, 24.99, 3, 0, 0.00), (3, 15, 5, 24.99, 7, 0, 0.00), (4, 15, 5, 24.99, 1, 0, 0.00), (5, 15, 5, 24.99, 5, 0, 0.00),
(1, 15, 30, 24.99, 0, 0, 0.00), (2, 15, 30, 24.99, 4, 0, 0.00), (3, 15, 30, 24.99, 8, 0, 0.00), (4, 15, 30, 24.99, 7, 0, 0.00), (5, 15, 30, 24.99, 2, 0, 0.00);

INSERT INTO `store` (`id_store`, `city`) VALUES
(1, 'Lille'),
(2, 'Nantes'),
(3, 'Bordeaux'),
(4, 'Toulouse'),
(5, 'Paris');

INSERT INTO `style` (`id_jeu`, `id_genre`) VALUES
(1, 20), (1, 3),
(2, 20), (2, 2), (2, 10), (2, 11),
(3, 20), (3, 2),
(4, 20), (4, 2), (4, 10),
(5, 2), (5, 3), (5, 10),
(6, 1), (6, 12), (6, 19),
(7, 46), (7, 19), (7, 24),
(8, 3), (8, 16), (8, 10),
(9, 11), (9, 20), (9, 10), (9, 2),
(10, 16), (10, 3), (10, 1), (10, 36), (10, 4),
(11, 1), (11, 2), (11, 14), (11, 10),
(12, 15), (12, 1), (12, 3),
(13, 20), (13, 11),
(14, 3), (14, 9), (14, 44),
(15, 1), (15, 3), (15, 14), (15, 15), (15, 10), (15, 44);

INSERT INTO `user_order` (`id_order`, `order_date`, `order_status`, `id_store`, `id_user`) VALUES
(1, '2024-09-19 12:34:56', 'en att', 1, 1),
(2, '2024-08-29 18:12:00', 'livré', 2, 2),
(3, '2024-09-10 09:45:30', 'livré', 1, 1),
(4, '2024-09-06 17:20:45', 'en att', 2, 2),
(5, '2024-09-20 11:35:10', 'livré', 2, 2);