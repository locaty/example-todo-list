<?php

namespace App\Core\Service;

use Locaty\Service\AbstractService;

class Path extends AbstractService {

    /**
     * @return string
     */
    public function getMainConfigPath(): string {
        return DIR_PROJECT . '/config/main.php';
    }

    /**
     * @return string
     */
    public function getDefaultMainConfigPath(): string {
        return DIR_PROJECT . '/config/default.main.php';
    }

    /**
     * @return string
     */
    public function getWebRoutesPath(): string {
        return DIR_PROJECT . '/config/routes_web.php';
    }

    /**
     * @return string
     */
    public function getApiRoutesPath(): string {
        return DIR_PROJECT . '/config/routes_api.php';
    }

    /**
     * @return string
     */
    public function getLogsDir(): string {
        return DIR_PROJECT . '/logs';
    }

    /**
     * @return string
     */
    public function getTemplatesDir(): string {
        return DIR_PROJECT . '/templates';
    }
}
