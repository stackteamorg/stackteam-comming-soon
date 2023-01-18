<?php 

require_once realpath(__DIR__ . '/../vendor/autoload.php');

if (!file_exists(__DIR__ . '/../')) {
    throw new Exception(".env file is not exist");
}

//print_r($_SERVER);die();
$platforms = require_once ('platforms.php');
$platform = isset($platforms[$_SERVER['HTTP_HOST']]) ? isset($platforms[$_SERVER['HTTP_HOST']]) : null;

if (is_null($platform)) {
    throw new Exception("platform not found");
}

// Looing for .env at the root directory
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../envs/' . $platform);
$dotenv->load();


function _env($key) {
    return $_ENV[$key];
}

function env($key) {
    echo $_ENV[$key];
}

?>
