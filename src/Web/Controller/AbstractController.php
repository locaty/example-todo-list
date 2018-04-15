<?php

namespace App\Web\Controller;

use Locaty;
use Locaty\Component;
use Locaty\Controller;
use App\Core\Service;

class AbstractController extends Controller\Template {

    /**
     * @var Service\Path
     */
    private $_path;

    /**
     * @param Service\Path $path
     */
    public function __construct(Service\Path $path) {
        $this->_path = $path;
    }

    /**
     * @return Component\Template\Engine\Basic
     */
    protected function _getTemplateEngine(): Component\Template\Engine\Basic {
        return new Locaty\Component\Template\Engine\Twig($this->_path->getTemplatesDir());
    }
}
