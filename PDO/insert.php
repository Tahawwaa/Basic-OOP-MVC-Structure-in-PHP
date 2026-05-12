<?php

include "server.php";

$name = "Taha";
$number = "09123456789";

$sql = "INSERT INTO users (name,number) VALUES (:name, :number)";
$stmt = $pdo->prepare($sql);


$stmt->execute([
    ":name" => $name,
    ":number" => $number
]);

echo "You are registered";
