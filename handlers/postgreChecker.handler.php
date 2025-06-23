<?php

require_once __DIR__ . '/../utils/envSetter.util.php';

$host     = env('POSTGRES_HOST', 'host.docker.internal');
$port     = env('POSTGRES_PORT', '5112');
$dbname   = env('POSTGRES_DB', 'post_db');
$user     = env('POSTGRES_USER', 'user');
$password = env('POSTGRES_PASSWORD', 'password');

$conn_string = "host=$host port=$port dbname=$dbname user=$username password=$password";

$dbconn = pg_connect($conn_string);

if (!$dbconn) {
    echo "❌ Connection Failed: ", pg_last_error() . "  <br>";
    exit();
} else {
    echo "✔️ PostgreSQL Connection  <br>";
    pg_close($dbconn);
}
