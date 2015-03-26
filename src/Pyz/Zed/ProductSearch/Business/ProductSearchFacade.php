<?php

namespace Pyz\Zed\ProductSearch\Business;

use ProjectA\Zed\ProductCategorySearch\Business\External\ProductCategorySearchToProductSearchInterface;
use ProjectA\Zed\ProductSearch\Business\ProductSearchFacade as CoreProductSearchFacade;
use Psr\Log\LoggerInterface;

class ProductSearchFacade extends CoreProductSearchFacade implements ProductCategorySearchToProductSearchInterface
{

    /**
     * @var ProductSearchDependencyContainer
     */
    protected $dependencyContainer;

    /**
     * @param $data
     * @param $locale
     * @return string
     */
    public function buildProductKey($data, $locale)
    {
        return $this->dependencyContainer
            ->getKeyBuilder()
            ->generateKey($data, $locale);
    }

    /**
     * @param LoggerInterface $messenger
     */
    public function installDemoData(LoggerInterface $messenger = null)
    {
        $this->dependencyContainer->getDemoDataInstaller($messenger)->install();
    }

}
