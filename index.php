<?php
require_once UTILS_PATH . '/auth.util.php'; // session_start() runs first!
require_once 'components/componentGroup/header.php';
require_once 'components/componentGroup/login.php';
require_once 'components/componentGroup/error.php';

showError("This is a custom error message!");