<?php

namespace App\Core;

use App\Core\Service;
use Locaty\Application;
use Locaty\Component\Router;

abstract class AbstractHttpApplication extends Application\AbstractHttpApplication {

    /**
     * @var Service\Config
     */
    protected $_config;

    /**
     * @var Service\Logger
     */
    protected $_logger;

    /**
     * @var Service\Path
     */
    protected $_path;

    /**
     * @param Router\Facade $router
     * @param Service\Config $config
     * @param Service\Logger $logger
     * @param Service\Path $path
     */
    public function __construct(
        Router\Facade $router,
        Service\Config $config,
        Service\Logger $logger,
        Service\Path $path
    ) {
        parent::__construct($router);
        $this->_logger = $logger;
        $this->_path = $path;
        $config->loadRequiredFiles();
    }
}
