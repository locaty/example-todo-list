<?php

use App\Controller\Main;

return [
    'index' => ['GET', '/', Main\IndexController::action('index')],
];
