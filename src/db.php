<?php
$host 		= 'localhost';
$dbname 	= 'virtualn_carlemany';
$user 		= 'virtualn_terradas';
$password 	= '8Sn5^g0m99d80#ovD3';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error en la conexión: " . $e->getMessage());
}
?>
