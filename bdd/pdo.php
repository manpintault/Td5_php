<?php

try {
    $pdo = new \PDO(
        'mysql:host=localhost;dbname=sondage',
        'root', ''
    );
    $pdo->exec('SET CHARSET UTF8');
    
} catch (\PDOException $e) {
    //header('Content-type: text/plain');
    echo "Impossible de se connecter a la base de donnees\n";
    die($e->getMessage());
}
