<?php

use App\Controller\Api;

return [
    'task_list' => ['GET', '/api/task/list', Api\TaskController::action('list')],
];
