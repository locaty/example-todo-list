<?php

namespace App\Web;

use App\Core\AbstractHttpApplication;
use Locaty\Component\Template;

class Application extends AbstractHttpApplication {

    /**
     * @return array
     */
    protected function _routes(): array {
        /** @noinspection PhpIncludeInspection */
        return require_once $this->_path->getWebRoutesPath();
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
        $this->_logger->notifyException($e);
        echo $this->_getTemplateEngine()->render('error_handlers/error_500');
    }

    /**
     * @return Template\Engine\Basic
     */
    protected function _getTemplateEngine(): Template\Engine\Basic {
        return new Template\Engine\Twig($this->_path->getTemplatesDir());
    }
}
