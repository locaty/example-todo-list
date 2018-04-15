<?php

namespace App\Api\Controller;

use Locaty\Component\Template;
use Locaty\Controller;
use Locaty\Transfer\Response;

class TaskController extends Controller\Basic {

    /**
     * @return Response\Json
     */
    public function listAction(): Response\Json {
        return $this->_createApiResponse(['data' => []]);
    }

    /**
     * @param array $data
     * @return Response\Json
     */
    protected function _createApiResponse(array $data = []): Response\Json {
        $defaultResponse = [
            'status' => 'success',
            'data' => null,
        ];
        return new Response\Json(array_merge($defaultResponse, $data));
    }
}
