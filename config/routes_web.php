<?php

use App\Web\Controller;

return [
    'index' => ['GET', '/', Controller\IndexController::action('index')],
];
