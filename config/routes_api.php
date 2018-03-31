<?php

use App\Controller\Api;

return [
    'task_list' => ['GET', '/app_api.php/api/task/list', Api\TaskController::action('list')],
];
