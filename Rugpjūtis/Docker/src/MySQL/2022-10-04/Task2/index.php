<?php

require_once __DIR__ . '/connect.php';

if (isset($_GET['people'])) {

    $query = 'SELECT * FROM `users` WHERE `birthdate` > "2004-10-03 00:00:00" ORDER BY `id` DESC LIMIT 13';

    $stmt = $dbh->prepare($query);

    $stmt->execute();

    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    var_dump($users);
}
