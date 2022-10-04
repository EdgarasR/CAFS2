<?php

require_once __DIR__ . '/connect.php';

if (isset($_GET['admin'])) {

    $query = 'SELECT * FROM `users` WHERE `is_admin` = :admin';

    $stmt = $dbh->prepare($query);
    $stmt->bindValue(':admin', ($_GET['admin'] ?? NULL), PDO::PARAM_INT);

    $stmt->execute();

    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    var_dump($users);
};
