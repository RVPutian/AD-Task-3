<?php
define('BASE_PATH', realpath(__DIR__));
define('COMPONENTS_PATH', realpath(BASE_PATH . "/components"));
define('TEMPLATES_PATH', realpath(BASE_PATH . "/components/templates"));
define('HANDLERS_PATH', realpath(BASE_PATH . "/handlers"));
define('LAYOUTS_PATH', realpath(BASE_PATH . "/layouts"));
define('PAGES_PATH', realpath(BASE_PATH . "/pages"));
define('STATICDATAS_PATH', realpath(BASE_PATH . "/staticDatas"));
define('DUMMIES_PATH', realpath(BASE_PATH . "/staticDatas/dummies"));
define('UTILS_PATH', realpath(BASE_PATH . "/utils"));
define('ERRORS_PATH', realpath(BASE_PATH . "/errors"));

chdir(BASE_PATH);

require 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(BASE_PATH);
$dotenv->load();