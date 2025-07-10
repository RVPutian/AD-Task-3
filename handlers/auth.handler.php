<?php
require_once UTILS_PATH . '/auth.util.php';
require_once UTILS_PATH . '/envSetter.util.php';

$databases = $typeConfig;
$dsn = "pgsql:host={$databases['pgHost']};port={$databases['pgPort']};dbname={$databases['pgDB']}";
$pdo = new PDO($dsn, $databases['pgUser'], $databases['pgPassword'], [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
]);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['login'])) {
        $success = loginUser($pdo, $_POST['username'], $_POST['password']);
        header('Location: /index.php?login=' . ($success ? 'success' : 'fail'));
        exit;
    }
    if (isset($_POST['logout'])) {
        logoutUser();
        header('Location: /index.php');
        exit;
    }
}