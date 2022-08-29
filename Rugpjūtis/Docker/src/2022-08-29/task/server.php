<?php

if (!empty($_POST)) {
    file_put_contents('./data/user.php', print_r($_POST['results'], true));
} else {
    echo 'Fail';
}