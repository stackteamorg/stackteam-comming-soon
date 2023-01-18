<?php 

require_once realpath(__DIR__ . '/../vendor/autoload.php');

if (!file_exists(__DIR__ . '/../.env')) {
    throw new Exception(".env file is not exist");
}

//print_r($_SERVER);die();
$platforms = require_once ('platforms.php');
$platform = isset($platforms[$_SERVER['HTTP_HOST']]) ? $platforms[$_SERVER['HTTP_HOST']] : null;

//print_r($platforms);die($_SERVER['HTTP_HOST']);
//die($platform);

if (is_null($platform)) {
    throw new Exception("platform not found");
}

$data = (object)require_once(__DIR__ . '/../platforms/' . $platform . '.php');


// Looing for .env at the root directory
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

foreach($data as $k => $v) {
    $_ENV[$k] = $v;
}

function _env($key) {
    return $_ENV[$key];
}

function env($key) {
    echo $_ENV[$key];
}

?>
