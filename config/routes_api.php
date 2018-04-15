<?php

use App\Api\Controller;

return [
    'task_list' => ['GET', '/api/task/list', Controller\TaskController::action('list')],
];
