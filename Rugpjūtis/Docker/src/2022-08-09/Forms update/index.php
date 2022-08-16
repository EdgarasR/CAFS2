<?php
// error_reporting(E_ERROR | E_PARSE);
require_once 'variables.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    if(isset($_FILES['photo'])) {
        $file = $_FILES['photo'];

        if($file['error'] == 0) {
            $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
            $ext = strtolower($ext);

            if(!in_array($ext, ALLOWED_EXTENSIONS)) {
                echo 'File ext not allowed';

                exit;
            }

            $path = UPLOAD_DIR;

            do {
                $name = 'photo';

                $path = sprintf('%s/%s.%s', $path, $name, $ext);
            } while (file_exists($path));

            move_uploaded_file($file['tmp_name'], $path);
        }
    require_once 'profile.php';
    }
}else {
    require_once 'index.phtml';
}