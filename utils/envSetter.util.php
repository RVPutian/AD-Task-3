<?php

require_once __DIR__ . '/../bootstrap.php';
require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(BASE_PATH);
$dotenv->load();

// Distribute the data using array key
$typeConfig = [
    'pgHost' => $_ENV['POSTGRES_HOST'],
    'pgPort' => $_ENV['POSTGRES_PORT'],
    'pgUser' => $_ENV['POSTGRES_USER'],
    'pgPassword' => $_ENV['POSTGRES_PASSWORD'],
    'pgDB' => $_ENV['POSTGRES_DB'],
    'mongoHost' => $_ENV['MONGO_HOST'],
    'mongoPort' => $_ENV['MONGO_PORT'],
    'mongoDB' => $_ENV['MONGO_DB'],
];