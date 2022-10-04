<?php

require_once __DIR__ . '/connect.php';

$adult = date('Y-m-d', strtotime('-18 years'));

$query = "SELECT * FROM `users` WHERE `birthdate` > '$adult' ORDER BY `id` DESC LIMIT 13";

$stmt = $dbh->prepare($query);

$stmt->execute();

$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

var_dump($users);
