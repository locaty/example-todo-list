<?php

namespace App\Web\Controller;

use App\Core\Service;
use Locaty\Transfer\Response;

class IndexController extends AbstractController {

    /**
     * @var Service\Logger
     */
    private $_logger;

    /**
     * @param Service\Path $path
     * @param Service\Logger $logger
     */
    public function __construct(Service\Path $path, Service\Logger $logger) {
        parent::__construct($path);
        $this->_logger = $logger;
    }

    /**
     * @return Response\Html
     */
    public function indexAction(): Response\Html {
        $this->_logger->log('main', 'test');
        return $this->_createTemplateResponse('app', [
            'title' => 'Todo MVC',
        ]);
    }
}
