<?php

namespace App\Controller\Api;

use App\Controller\Basic;
use App\Service;
use Locaty\Transfer\Response;

class TaskController extends Basic {

    /**
     * @var Service\Logger
     */
    private $_logger;

    /**
     * @var Service\Repository\Main
     */
    private $_main;

    public function __construct(Service\Logger $logger, Service\Repository\Main $main) {
        $this->_logger = $logger;
        $this->_main = $main;
    }

    /**
     * @return Response\Json
     */
    public function listAction(): Response\Json {
        $this->_logger->log('task', 'list request');
        return $this->_createApiResponse(['data' => []]);
//        return $this->_createApiResponse(['data' => SL::mainRepository()->loadTasks()]);
    }
}
