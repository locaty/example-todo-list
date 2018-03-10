<?php

namespace App\Controller;

use Locaty\Controller;
use Locaty\Component\Template;

abstract class Basic extends Controller\Basic {

    /**
     * @return Template\Engine\Basic
     */
    protected function _getTemplateEngine(): Template\Engine\Basic {
        return new Template\Engine\Twig(DIR_TEMPLATES);
    }
}
