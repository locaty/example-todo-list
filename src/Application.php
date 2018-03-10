<?php

namespace App;

use Locaty;
use Locaty\Component\Template;

class Application extends Locaty\Application\BasicHttp {

    /**
     * @return array
     */
    protected function _routes(): array {
        return require_once DIR_PROJECT . '/config/routes.php';
    }

    /**
     * @param \Throwable $e
     */
    protected function _handleNotFound(\Throwable $e): void {
        echo $this->_getTemplateEngine()->render('error_handlers/error_404');
    }

    /**
     * @param \Throwable $e
     */
    protected function _handleError(\Throwable $e): void {
        SL::logger()->notifyException($e);
        echo $this->_getTemplateEngine()->render('error_handlers/error_500');
    }

    /**
     * @return Template\Engine\Basic
     */
    protected function _getTemplateEngine(): Template\Engine\Basic {
        return new Template\Engine\Twig(DIR_TEMPLATES);
    }
}
