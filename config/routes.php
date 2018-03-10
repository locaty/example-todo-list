<?php

use App\Controller;

return [
    'index' => ['GET', '/', Controller\IndexController::action('index')],
];
