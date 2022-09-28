<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$mysqli = mysqli_connect('mariadb', 'admin', 'admin', 'cafs');

mysqli_set_charset($mysqli, 'utf8mb4');

printf("Success procedural: %s\n", mysqli_get_host_info($mysqli));
