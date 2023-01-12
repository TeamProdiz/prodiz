<?php

namespace Pyz\Zed\Facturation\Communication\Controller;

use Spryker\Zed\Kernel\Communication\Controller\AbstractController;

class IndexController extends AbstractController
{
    /**
     * @return array
     */
    public function indexAction()
    {
        return $this->viewResponse([
            'helloWorldText' => 'Hello World!'
        ]);
    }
}