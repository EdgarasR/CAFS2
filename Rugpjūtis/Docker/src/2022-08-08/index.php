<?php

$cities = ['Vilnius', 'Kaunas', 'Klaipėda'];
$langs = ['C++', 'PHP', 'Python'];
$msg = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    if ((!isset($_POST['name']) || $_POST['name'] == '') || (!isset($_POST['lastname']) || $_POST['lastname'] == ''))
    {
        $msg['error'] = true;
        $msg['msg'] = 'Būtina įrašyti vardą ir pavardę';
    } elseif (!isset($_POST['language']) || !count($_POST['language'])) {
        $msg['error'] = true;
        $msg['msg'] = 'Būtina pasirinkti programavimo kalbą.';
    } else 
    {
        $msg['success'] = true;
        $msg['msg'] = 'Registracija sėkminga';
    }
}

require_once 'index.phtml';

if (isset($msg['success'])) 
{
    print_r($_POST);
}