<?php

declare(strict_types=1);

// 1) Composer autoload
require_once 'vendor/autoload.php';

// 2) Composer bootstrap
require_once 'bootstrap.php';

// 3) envSetter
require_once UTILS_PATH . '/envSetter.util.php';

// Use $typeConfig as $databases for clarity
$databases = $typeConfig;

$host = $databases['pgHost'];
$port = $databases['pgPort'];
$username = $databases['pgUser'];
$password = $databases['pgPassword'];
$dbname = $databases['pgDB'];

// ——— Connect to PostgreSQL ———
$dsn = "pgsql:host={$host};port={$port};dbname={$dbname}";
$pdo = new PDO($dsn, $username, $password, [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
]);

echo "Dropping old tables…\n";
foreach ([
    'project_users',
    'tasks',
    'projects',
    'users'
] as $table) {
    // Use IF EXISTS so it won’t error if the table is already gone
    $pdo->exec("DROP TABLE IF EXISTS {$table} CASCADE;");
}

// Now re-create all tables from your model files
$models = [
    'users.model.sql',
    'projects.model.sql',
    'project_users.model.sql',
    'tasks.model.sql'
];

foreach ($models as $model) {
    $path = "database/{$model}";
    echo "Applying schema from {$path}…\n";
    $sql = file_get_contents($path);

    if ($sql === false) {
        throw new RuntimeException("Could not read {$path}");
    } else {
        echo "Creation Success from {$path}\n";
    }

    $pdo->exec($sql);
}

echo "✅ PostgreSQL migration complete!\n";