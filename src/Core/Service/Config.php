<?php

namespace App\Core\Service;

use Locaty;

class Config extends Locaty\Component\Config\Facade {

    /**
     * @var Path
     */
    private $_path;

    /**
     * @param Path $path
     */
    public function __construct(Path $path) {
        $this->_path = $path;
    }

    public function loadRequiredFiles(): void {
        /** @noinspection PhpIncludeInspection */
        $this->_mergeData(require $this->_path->getDefaultMainConfigPath());
        if (file_exists($this->_path->getMainConfigPath())) {
            /** @noinspection PhpIncludeInspection */
            $this->_mergeData(require $this->_path->getMainConfigPath());
        }
    }

    /**
     * @return string
     */
    public function getRollbarToken(): string {
        return $this->_config['rollbar']['token'];
    }

    /**
     * @return string
     */
    public function getRollbarEnvironment(): string {
        return $this->_config['rollbar']['environment'];
    }
}
