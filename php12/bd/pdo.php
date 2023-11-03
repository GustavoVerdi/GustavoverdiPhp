<?php
    $host = 'localhost';
    $dbname = 'gustavoverdi';
    $user = 'root';
    $password = '0505';

    try {
        $pdo = new PDO("pgsql:host=$host;dbname=$dbname", $user, $senha);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
?>