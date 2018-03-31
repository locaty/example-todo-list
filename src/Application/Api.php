<?php

namespace App\Application;

use App\SL;
use DI;
use Locaty;
use Locaty\Component\Router;
use Locaty\Transfer;

class Api extends Locaty\Application\BasicHttp {

    /**
     * @var DI\Container
     */
    private $_container;

    public function init(): void {
        $this->_container = new DI\Container();
    }

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

    /**
     * @param Router\Match $match
     * @return Transfer\Response\Basic
     */
    protected function _getResponse(Router\Match $match): ?Transfer\Response\Basic {
        $action = $match->action();
        $controllerClass = $action[0];
        $controller = $this->_container->get($controllerClass);
        $controllerAction = $action[1];
        $request = $this->_createRequest($match->params());
        return $controller->$controllerAction($request);
    }
}
