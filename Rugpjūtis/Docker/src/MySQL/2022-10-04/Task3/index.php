<?php

require_once __DIR__ . '/connect.php';

$query = "SELECT * FROM `users` WHERE `gender` IN ('Male','Female')";

$stmt = $dbh->prepare($query);

$stmt->execute();

$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

var_dump($users);
