USE gamestore_bdd;

CREATE TABLE `store` (
  `id_store` int(11) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `city` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `genre` (
  `id_genre` int(11) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `pegi` (
  `id_pegi` int(11) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `label` varchar(3) NOT NULL UNIQUE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `plateforme` (
  `id_plateforme` int(11) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `about`(
   `id_about` int(11) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
   `developpeur` varchar(50) NOT NULL,
   `editeur` varchar(50) NOT NULL,
   `date_de_sortie` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `app_user` (
  `id_user` int(11) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL UNIQUE,
  `adresse` varchar(255) NOT NULL,
  `zip_code` char(5) NOT NULL,
  `city` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(14) NOT NULL,
  `fk_id_store` int(11) UNSIGNED NOT NULL,
  FOREIGN KEY(fk_id_store) REFERENCES store(id_store) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `user_order` (
  `id_order` int(11) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `order_date` datetime NOT NULL,
  `order_status` varchar(6) NOT NULL,
  `id_store` int(11) UNSIGNED NOT NULL,
  `id_user` int(11) UNSIGNED NOT NULL,
  FOREIGN KEY(id_store) REFERENCES store(id_store) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY(id_user) REFERENCES app_user(id_user) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `games` (
  `id_jeu` int(11) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `id_pegi` int(11) UNSIGNED NOT NULL,
  `id_about` int(11) UNSIGNED NOT NULL,
  FOREIGN KEY(id_about) REFERENCES about(id_about) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY(id_pegi) REFERENCES pegi(id_pegi) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `image` (
  `id_image` int(11) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `id_jeu` int(11) UNSIGNED NULL,
  FOREIGN KEY(id_jeu) REFERENCES games(id_jeu) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `style` (
  `id_jeu` int(11) UNSIGNED NOT NULL,
  `id_genre` int(11) UNSIGNED NOT NULL,
  FOREIGN KEY(id_genre) REFERENCES genre(id_genre) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY(id_jeu) REFERENCES games(id_jeu) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `contenu` (
  `id_order` int(11) UNSIGNED NOT NULL,
  `id_jeu` int(11) UNSIGNED NOT NULL,
  PRIMARY KEY (id_order, id_jeu),
  `quantity` int(11) UNSIGNED NOT NULL,
  `price_total` decimal(10,2) UNSIGNED NOT NULL,
  FOREIGN KEY(id_jeu) REFERENCES games(id_jeu) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY(id_order) REFERENCES user_order(id_order) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE `specifications` (
  `id_store` int(11) UNSIGNED NOT NULL,
  `id_jeu` int(11) UNSIGNED NOT NULL,
  `id_plateforme` int(11) UNSIGNED NOT NULL,
  PRIMARY KEY (id_store, id_jeu, id_plateforme),
  `price` decimal(10,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `discounted` BOOLEAN NOT NULL,
  `promo` decimal(2,2) DEFAULT NULL,
  FOREIGN KEY(id_jeu) REFERENCES games(id_jeu) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY(id_plateforme) REFERENCES plateforme(id_plateforme) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY(id_store) REFERENCES store(id_store) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE INDEX idx_store ON specifications (id_store, id_jeu);
CREATE INDEX idx_plateforme ON specifications (id_plateforme, id_jeu);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;