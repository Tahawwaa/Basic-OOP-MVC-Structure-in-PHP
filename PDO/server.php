<?php

$host = "localhost";
$dbname = "";
$username = "";
$password = "";


try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname ,
        $username,$password"
    );

    $pdo->setAttribute(PDO::ATTR_AUTOCOMMIT, PDO::ERRMODE_EXCEPTION);

    echo "OK";
} catch (PDOException $e) {
    die("NO" . $e->getMessage());
}
