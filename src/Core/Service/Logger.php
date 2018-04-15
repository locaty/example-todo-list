<?php

namespace App\Core\Service;

use App\Core\Service;
use Locaty;
use Locaty\Component\Logger\NotificationEngine;

class Logger extends Locaty\Component\Logger\Facade {

    /**
     * @var Config
     */
    private $_config;

    /**
     * @var Path
     */
    private $_path;

    /**
     * @param Config $config
     * @param Path $path
     */
    public function __construct(Service\Config $config, Service\Path $path) {
        $this->_config = $config;
        $this->_path = $path;
    }

    /**
     * @return NotificationEngine\Basic|null
     */
    protected function _getNotificationEngine(): ?NotificationEngine\Basic {
        return new NotificationEngine\Rollbar(
            $this->_config->getRollbarToken(),
            $this->_config->getRollbarEnvironment()
        );
    }

    /**
     * @return string
     */
    protected function _getLogsDir(): string {
        return $this->_path->getLogsDir();
    }
}
