<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$mysqli = new mysqli('mariadb', 'admin', 'admin', 'cafs');

$mysqli->set_charset('utf8mb4');

printf("Success OOP: %s\n", $mysqli->host_info);
