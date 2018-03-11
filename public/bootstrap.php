<?php

require __DIR__ . '/../vendor/autoload.php';

define('DIR_PROJECT', dirname(__DIR__));
define('DIR_TEMPLATES', DIR_PROJECT . '/templates');
define('DIR_LOGS', DIR_PROJECT . '/logs');
define('DIR_CONFIG', DIR_PROJECT . '/config');

App\Config::init(require DIR_CONFIG .  '/default.main.php');
if (file_exists(DIR_CONFIG . '/main.php')) {
    App\Config::init(require DIR_CONFIG . '/main.php');
}
