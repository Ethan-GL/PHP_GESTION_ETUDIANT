<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gestion_etudiant";
//$port = 3308;

// Create connection
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connection successful";
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}