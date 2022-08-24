<?php

$profile = '../views/profile.php';
$form = '../views/form.php';
$time = '../timestamps/time.txt';

session_start();

date_default_timezone_set("Europe/Vilnius");

$users = json_decode(file_get_contents('../users/users.json'), TRUE);

if(isset($_POST['user']) && isset($_POST['password'])) {
    foreach($users['users'] as $key => $value) {
        if($value['username'] == $_POST['user'] && $value['password'] == $_POST['password']) {
            $_SESSION['user'] = $value['username'];
            $_SESSION['email'] = $value['email'];
            $_SESSION['location'] = $value['location']['city'] .', '. $value['location']['state'] .', '. $value['location']['country'];
            file_put_contents($time,date('Y-m-d H:i:s').PHP_EOL, FILE_APPEND);
            $line = file_get_contents($time);
            $lines = explode(" ",$line);
            $timestamp = ($lines[count($lines)-2]);
              if(strlen($line)<21) {
                $timestamp = 'First login';
              }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
  <div class="mt-4 container col-4">
    <?php
    if(isset($_SESSION['user'])) {
      require_once $profile;
    } else {
      require_once $form;
    }
    ?>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>