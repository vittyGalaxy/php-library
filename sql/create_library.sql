-- Active: 1768521664416@@127.0.0.1@3306@esercizi
CREATE TABLE Author(
    idAuthor INT AUTO_INCREMENT PRIMARY KEY,
    nameAuthor VARCHAR(100) NOT NULL,
    surnameAuthor VARCHAR(100) NOT NULL
);

CREATE TABLE Book(
    idBook INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(80) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    idAuthor INT,
    FOREIGN KEY (idAuthor) REFERENCES Author(idAuthor)
);