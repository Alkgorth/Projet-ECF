INSERT INTO `app_user` 
(`last_name`, `first_name`, `mail`, `street`, `number_street`, `zip_code`, `city`, `password`, `role`, `fk_id_store`) 
VALUES
('Percheron', 'Arnaud', 'mailtest@test.com', 'rue du lac', 10, '01234', 'Maville', 'MonMotDePasse', 'Utilisateur', 1),
('Garcia', 'José', 'patron@test.com', 'rue du bout', 12, '43321', 'Laville', 'UnMotDePasse', 'Administrateur', 2);


INSERT INTO `contenu` (`id_order`, `id_jeu`, `quantity`, `price_total`) VALUES
(1, 2, 1, 59.99),
(1, 3, 2, 39.98),
(2, 4, 1, 64.99),
(3, 1, 1, 49.99),
(3, 5, 3, 29.97);


INSERT INTO `games` (`id_jeu`, `name`, `description`, `id_pegi`) VALUES
(1, 'Super Mario Odyssey', 'Une aventure plateforme en monde ouvert avec Mario.', 7),
(2, 'The Witcher 3: Wild Hunt', 'Un RPG fantastique avec des choix importants.', 18),
(3, 'Minecraft', 'Un jeu de construction en monde ouvert sans fin.', 7),
(4, 'Elden Ring', 'Un jeu d\'action-RPG difficile dans un monde ouvert.', 16),
(5, 'Pokémon Écarlate/Violet', 'Un jeu de rôle où vous capturez des Pokémon.', 7),
(6, 'Call of Duty: Modern Warfare II', 'Un jeu de tir à la première personne très réaliste.', 18),
(7, 'Among Us', 'Un jeu multijoueur où vous devez trouver l\'imposteur.', 3);


INSERT INTO `genre` (`id_genre`, `name`) VALUES
(1, 'Action'),
(2, 'RPG'),
(3, 'Aventure'),
(4, 'Simulation'),
(5, 'Sport'),
(6, 'Stratégie'),
(7, 'Horreur'),
(8, 'Indé'),
(9, 'Plateforme'),
(10, 'Combat');


INSERT INTO `pegi` (`id_pegi`, `label`) VALUES
(3, '3'),
(7, '7'),
(12, '12'),
(16, '16'),
(18, '18');


INSERT INTO `plateforme` (`id_plateforme`, `name`) VALUES
(1, 'PlayStation 5'),
(2, 'Xbox Series X|S'),
(3, 'Nintendo Switch'),
(4, 'PlayStation 4'),
(5, 'Xbox One'),
(6, 'Nintendo Switch Lite'),
(7, 'PlayStation 3'),
(8, 'Xbox 360'),
(9, 'Wii U'),
(10, 'Nintendo 3DS');


INSERT INTO `specifications` (`id_store`, `id_jeu`, `id_plateforme`, `price`, `quantity`, `discounted`, `promo`) VALUES
(1, 1, 3, 49.99, 20, 1, 0.99),
(1, 2, 1, 59.99, 10, 0, 0.00),
(1, 3, 2, 39.98, 5, 1, 0.99),
(2, 4, 1, 64.99, 8, 0, 0.00),
(2, 5, 2, 29.97, 15, 0, 0.00),
(2, 6, 4, 39.99, 28, 1, 0.99);


INSERT INTO `store` (`id_store`, `city`) VALUES
(1, 'Lille'),
(2, 'Paris');


INSERT INTO `style` (`id_jeu`, `id_genre`) VALUES
(1, 9),
(2, 6),
(3, 9),
(4, 2),
(5, 1),
(5, 2),
(6, 1),
(7, 6);


INSERT INTO `user_order` (`id_order`, `order_date`, `order_status`, `id_store`, `id_user`) VALUES
(1, '2024-09-19 12:34:56', 'en att', 1, 1),
(2, '2024-08-29 18:12:00', 'livré', 2, 2),
(3, '2024-09-10 09:45:30', 'livré', 1, 1),
(4, '2024-09-06 17:20:45', 'en att', 2, 2),
(5, '2024-09-20 11:35:10', 'livré', 2, 2);
