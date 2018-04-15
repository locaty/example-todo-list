<?php

namespace App\Api;

use App\Core\AbstractHttpApplication;

class Application extends AbstractHttpApplication {

    /**
     * @return array
     */
    protected function _routes(): array {
        /** @noinspection PhpIncludeInspection */
        return require_once $this->_path->getApiRoutesPath();
    }

    /**
     * @param \Throwable $e
     */
    protected function _handleNotFound(\Throwable $e): void {
        echo json_encode(['status' => 'error', 'error' => 'invalid_request']);
    }

    /**
     * @param \Throwable $e
     */
    protected function _handleError(\Throwable $e): void {
        $this->_logger->notifyException($e);
        echo json_encode(['status' => 'error', 'error' => 'unknown_error']);
    }
}
