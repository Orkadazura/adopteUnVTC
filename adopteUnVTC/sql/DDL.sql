DROP DATABASE IF EXISTS adopteUnVTC;

CREATE DATABASE IF NOT EXISTS adopteUnVTC CHARACTER SET UTF8 COLLATE utf8_general_ci;

USE adopteUnVTC;

DROP TABLE IF EXISTS contact;
DROP TABLE IF EXISTS reservation;

CREATE TABLE contact( 
    contact_id INT PRIMARY KEY  AUTO_INCREMENT ,
    contact_nom VARCHAR(50) NOT NULL,
    contact_email VARCHAR(50) NOT NULL,
    contact_telephone VARCHAR(50) NOT NULL, 
    contact_objetDemande TEXT NOT NULL,
    contact_messages TEXT NOT NULL,
)ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_general_ci;

CREATE TABLE reservation( 
    resa_id INT PRIMARY KEY AUTO_INCREMENT,
    resa_passager INT NOT NULL, 
    resa_direction TEXT NOT NULL, 
    resa_dateEtHeure DATETIME NOT NULL,
) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_general_ci; 