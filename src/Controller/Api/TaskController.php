<?php

namespace App\Controller\Api;

use App\Controller\Basic;
use Locaty\Transfer\Response;

class TaskController extends Basic {

    /**
     * @return Response\Json
     */
    public function listAction(): Response\Json {
        return $this->_createApiResponse(['data' => []]);
    }
}
