CREATE DATABASE ticketsystem;

CREATE TABLE Tickets (
    ticketID AUTO_INCREMENT PRIMARY KEY,
    header VARCHAR(255),
    subject VARCHAR(255),
    employee VARCHAR(255),
    status VARCHAR(255),
    dept VARCHAR(255),
    office VARCHAR(255),
    priority VARCHAR(255),
    issue VARCHAR(255),
    assigned VARCHAR(255),
    dateCreated DATETIME DEFAULT NOW()

);

Create TABLE Contacts (
    userID AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255),
    password VARCHAR(255),
    email VARCHAR(255),
    fname VARCHAR(255),
    lname VARCHAR(255),
    dateCreated DATETIME DEFAULT NOW()
);

CREATE USER 'admin'@'localhost' IDENTIFIED BY 'Password';
GRANT ALL PRIVILEGES ON ticketsystem.* TO 'admin'@'localhost';
FLUSH PRIVILEGES;