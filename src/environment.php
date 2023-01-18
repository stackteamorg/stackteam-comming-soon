<?php 

require_once realpath(__DIR__ . '/../vendor/autoload.php');

if (!file_exists(__DIR__ . '/../')) {
    throw new Exception(".env file is not exist");
}

// Looing for .env at the root directory
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();


function _env($key) {
    return $_ENV[$key];
}

function env($key) {
    echo $_ENV[$key];
}

?>