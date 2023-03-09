<?php
/*
Simple process to connect the script with MySQL via MySQLi
Without showing error messages when there are.
Processus simple pour connecter le script à MySQL via MySQLi
Sans afficher les messages d'erreur lorsqu'il y en a.
*/

//Declare login info to MySQL via phpMyAdmin
//Déclarer les infos de connexions à MySQL via phpMyAdmin
$hostname = 'localhost';
$username = 'root';
$password = '';
//1-Connect to the DBMS MySQL
//1-Se connecter au SGBD MySQL
$connection = new mysqli($hostname, $username, $password);
//2-Create the DB customer if it doesn't exist yet
//2-Créer la BD customer si elle n'existe pas encore
$connection->query("CREATE DATABASE IF NOT EXISTS customer;");
//3-Connect to the DB customer
//3-Se connecter à la BD customer
mysqli_select_db($connection, 'customer');
//4-Create the TABLE student if it doesn't exist yet
//4-Créer la TABLE student si elle n'existe pas encore
$connection->query("CREATE TABLE IF NOT EXISTS student(
    id INT PRIMARY KEY AUTO_INCREMENT,
    firstname VARCHAR(35) NOT NULL,
    lastname VARCHAR(35) NOT NULL
    ) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;");
//5-Check that the TABLE student exists
//5-Vérifier si la TABLE student existe
$connection->query("DESC student;");
//6-Insert data into the TABLE student
//6-Insérer des données dans la TABLE student
$connection->query("INSERT INTO student (firstname, lastname)
        VALUES ('Patrick', 'Saint-Louis')");
//7-Select data from the TABLE student
//7-Sélectionner des données dans la TABLE student
$result=$connection->query("SELECT * FROM student");
//8-Display data selected from the TABLE student
//8-Afficher les données sélectionnées de la TABLE student
$count_row = $result->num_rows;
for ($i = 0 ; $i < $count_row ; ++$i){
    $each_row = $result->fetch_array(MYSQLI_ASSOC);
    echo '        ID : ' . $each_row['id'] . '<br>';
    echo 'First Name : ' . $each_row['firstname'] . '<br>';
    echo 'Last Name  : ' . $each_row['lastname'] . '<br>';
}
//9-Disconnect from the DBMS MySQL
//9-Se déconnecter de la SGBD MySQL
$connection->close();
