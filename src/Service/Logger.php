<?php

namespace App\Service;

use App\Config;
use Locaty;
use Locaty\Component\Logger\NotificationEngine;

class Logger extends Locaty\Component\Logger\Facade {

    /**
     * @return NotificationEngine\Basic|null
     */
    protected function _getNotificationEngine(): ?NotificationEngine\Basic {
        return new NotificationEngine\Rollbar(Config::getRollbarToken(), Config::getRollbarEnvironment());
    }

    /**
     * @return string
     */
    protected function _getLogDir(): string {
        return DIR_LOGS;
    }
}
