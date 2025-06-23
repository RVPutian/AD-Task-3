<?php
require_once __DIR__ . '/../utils/envSetter.util.php';

$host = env('MONGO_HOST', 'host.docker.internal');
$port = env('MONGO_PORT', '27111');
$db   = env('MONGO_DB', 'mong_db');
try {
    $mongo = new MongoDB\Driver\Manager("mongodb://host.docker.internal:27111");
    $command = new MongoDB\Driver\Command(["ping" => 1]);
    $mongo->executeCommand("admin", $command);

    echo "✅ Connected to MongoDB successfully.  <br>";
} catch (MongoDB\Driver\Exception\Exception $e) {
    echo "❌ MongoDB connection failed: " . $e->getMessage() . "  <br>";
}
