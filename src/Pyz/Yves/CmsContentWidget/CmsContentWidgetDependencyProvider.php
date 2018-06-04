<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Yves\CmsContentWidget;

use Spryker\Yves\CmsContentWidget\CmsContentWidgetDependencyProvider as SprykerCmsContentWidgetDependencyProvider;
use SprykerShop\Shared\CmsContentWidgetProductConnector\ContentWidgetConfigurationProvider\CmsProductContentWidgetConfigurationProvider;
use SprykerShop\Shared\CmsContentWidgetProductConnector\ContentWidgetConfigurationProvider\CmsProductGroupContentWidgetConfigurationProvider;
use SprykerShop\Shared\CmsContentWidgetProductSetConnector\ContentWidgetConfigurationProvider\CmsProductSetContentWidgetConfigurationProvider;
use SprykerShop\Shared\FileWidget\ContentWidgetConfigurationProvider\FileWidgetConfigurationProvider;
use SprykerShop\Yves\CmsContentWidgetProductConnector\Plugin\CmsProductContentWidgetPlugin;
use SprykerShop\Yves\CmsContentWidgetProductSetConnector\Plugin\CmsProductSetContentWidgetPlugin;
use SprykerShop\Yves\FileWidget\Plugin\FileWidgetPlugin;

class CmsContentWidgetDependencyProvider extends SprykerCmsContentWidgetDependencyProvider
{
    /**
     * {@inheritdoc}
     *
     * @return \Spryker\Yves\CmsContentWidget\Dependency\CmsContentWidgetPluginInterface[]CmsFileWidget/Theme/default/_file/cms-file-content-widget.twig
     */
    public function getCmsContentWidgetPlugins()
    {
        return [
            CmsProductContentWidgetConfigurationProvider::FUNCTION_NAME => new CmsProductContentWidgetPlugin(
                new CmsProductContentWidgetConfigurationProvider()
            ),
            CmsProductGroupContentWidgetConfigurationProvider::FUNCTION_NAME => new CmsProductContentWidgetPlugin(
                new CmsProductGroupContentWidgetConfigurationProvider()
            ),
            CmsProductSetContentWidgetConfigurationProvider::FUNCTION_NAME => new CmsProductSetContentWidgetPlugin(
                new CmsProductSetContentWidgetConfigurationProvider()
            ),
            FileWidgetConfigurationProvider::FUNCTION_NAME => new FileWidgetPlugin(
                new FileWidgetConfigurationProvider()
            ),
        ];
    }
}
