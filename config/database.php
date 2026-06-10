<?php

try {

    $pdo = new PDO(
        "mysql:host=localhost;dbname=pharma_fefo;charset=utf8",
        "root",
        ""
    );

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $pdo;

} catch (PDOException $e) {

    die("Erreur de connexion : " . $e->getMessage());

}