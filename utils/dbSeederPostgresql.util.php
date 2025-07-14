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

// Apply schema for each table
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

// --- SEED USERS ---
define('DUMMIES_PATH', realpath(__DIR__ . '/../staticData/dummies'));
$users = require DUMMIES_PATH . '/users.staticData.php';

echo "Seeding users…\n";
$stmt = $pdo->prepare("
    INSERT INTO users (username, role, first_name, last_name, password)
    VALUES (:username, :role, :fn, :ln, :pw)
");

foreach ($users as $u) {
    $stmt->execute([
        ':username' => $u['username'],
        ':role' => $u['role'],
        ':fn' => $u['first_name'],
        ':ln' => $u['last_name'],
        ':pw' => password_hash($u['password'], PASSWORD_DEFAULT),
    ]);
}

// --- SEED PROJECTS ---
$projects = require DUMMIES_PATH . '/projects.staticData.php';
echo "Seeding projects…\n";
$stmt = $pdo->prepare("
    INSERT INTO projects (id, name)
    VALUES (:id, :name)
");
foreach ($projects as $p) {
    $stmt->execute([
        ':id' => $p['id'],
        ':name' => $p['name'],
    ]);
}

// --- SEED PROJECT_USERS ---
$projectUsers = require DUMMIES_PATH . '/project_users.staticData.php';
echo "Seeding project_users…\n";
$stmt = $pdo->prepare("
    INSERT INTO project_users (project_id, user_id)
    VALUES (:project_id, :user_id)
");
foreach ($projectUsers as $pu) {
    $stmt->execute([
        ':project_id' => $pu['project_id'],
        ':user_id' => $pu['user_id'],
    ]);
}

// --- SEED TASKS ---
$tasks = require DUMMIES_PATH . '/tasks.staticData.php';
echo "Seeding tasks…\n";
$stmt = $pdo->prepare("
    INSERT INTO tasks (id, project_id, assigned_user_id, title, description, status, due_date)
    VALUES (:id, :project_id, :assigned_user_id, :title, :description, :status, :due_date)
");
foreach ($tasks as $t) {
    $stmt->execute([
        ':id' => $t['id'],
        ':project_id' => $t['project_id'],
        ':assigned_user_id' => $t['assigned_user_id'],
        ':title' => $t['title'],
        ':description' => $t['description'],
        ':status' => $t['status'],
        ':due_date' => $t['due_date'],
    ]);
}

echo "✅ PostgreSQL seeding complete!\n";