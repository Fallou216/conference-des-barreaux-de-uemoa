-- Création de la base de données
CREATE DATABASE `conference-des-barreaux-de-uemoa`;

-- Sélection de la base de données
USE `conference-des-barreaux-de-uemoa`;

-- Création de la table 'contacts'
CREATE TABLE `contacts` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `phone` VARCHAR(20),
  `subject` VARCHAR(150),
  `message` TEXT NOT NULL,
  `submitted_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE abonnements (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(191) UNIQUE NOT NULL,
    date_abonnement TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


