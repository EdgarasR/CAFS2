<?php

require_once __DIR__ . '/connect.php';

$query = "SELECT * FROM `users`";

$stmt = $dbh->prepare($query);

$stmt->execute();

$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

$groups = [
    'Males' => [],
    'Females' => [],
    'Other' => []
];
foreach ($users as $user) {
    if ($user['gender'] == 'Male') {
        array_push($groups['Males'], $user);
        continue;
    }
    if ($user['gender'] == 'Female') {
        array_push($groups['Females'], $user);
        continue;
    }
    array_push($groups['Other'], $user);
}

echo "<pre>";
print_r($groups);
echo "</pre>";
