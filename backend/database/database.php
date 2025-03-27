<?php
$host = 'localhost';
$dbname = 'dictionary';
$username = 'root'; // Altere conforme necessário
$password = 'NovaSenhaAqui'; // Altere conforme necessário

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Não foi possível conectar ao banco de dados: " . $e->getMessage());
}
