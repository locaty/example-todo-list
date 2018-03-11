<?php

namespace App\Controller;

use Locaty\Component\Template;
use Locaty\Controller;
use Locaty\Transfer\Response;

abstract class Basic extends Controller\Basic {

    /**
     * @return Template\Engine\Basic
     */
    protected function _getTemplateEngine(): Template\Engine\Basic {
        return new Template\Engine\Twig(DIR_TEMPLATES);
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
