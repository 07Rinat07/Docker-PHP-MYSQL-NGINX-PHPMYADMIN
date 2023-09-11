<?php

$pdo = new PDO("mysql:host=mysql;dbname=app;", 'user','secret');
$statement = $pdo->query("select * from uesrs");
$users = $statement->fetchAll(2);

foreach($users as $user) {
    echo $user['username'] . "<br>";
}