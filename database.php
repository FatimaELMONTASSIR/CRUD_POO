<?php
//include the connection file
include("connection.php");
//create an instance of Connection class
$connection= new Connection();
//call the createDatabase methods to create database "chap4Db"
$connection->createDatabase('chap4Db');
$query = "
CREATE TABLE Clients (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50) UNIQUE,
password VARCHAR(80),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)
";
//call the selectDatabase method to select the chap4Db
$connection->selectDatabase('chap4Db');
//call the createTable method to create table with the $query
$connection->createTable('$query');
?>