<?php

$data = file_get_contents('https://randomuser.me/api/?format=csv');
file_put_contents('Excels/user2.csv', $data);