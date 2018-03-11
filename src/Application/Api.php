<?php

namespace App\Application;

use App\SL;
use Locaty;

class Api extends Locaty\Application\BasicHttp {

    /**
     * @return array
     */
    protected function _routes(): array {
        return require_once DIR_CONFIG . '/routes_api.php';
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
        SL::logger()->notifyException($e);
        echo json_encode(['status' => 'error', 'error' => 'unknown_error']);
    }
}
