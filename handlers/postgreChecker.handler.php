<?php

require_once __DIR__ . '/../utils/envSetter.util.php';

$host = $typeConfig['pgHost'];
$port = $typeConfig['pgPort'];
$dbname = $typeConfig['pgDB'];
$user = $typeConfig['pgUser'];
$password = $typeConfig['pgPassword'];

$conn_string = "host=$host port=$port dbname=$dbname user=$user password=$password";

$dbconn = pg_connect($conn_string);

if (!$dbconn) {
    echo "❌ Connection Failed: ", pg_last_error() . "  <br>";
    exit();
} else {
    echo "✔️ PostgreSQL Connection  <br>";
    pg_close($dbconn);
}
