<?php

namespace App\Controller\Main;

use App\Controller\Basic;
use Locaty\Transfer\Response;

class IndexController extends Basic {

    /**
     * @return Response\Html
     */
    public function indexAction(): Response\Html {
        return $this->_createTemplateResponse('app', [
            'title' => 'Todo MVC',
        ]);
    }
}
