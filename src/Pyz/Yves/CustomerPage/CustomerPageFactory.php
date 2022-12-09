<?php
namespace Pyz\Yves\CustomerPage;

use Pyz\Client\Training\TrainingClientInterface;
use Pyz\Yves\CustomerPage\Form\FormFactory;
use Pyz\Yves\CustomerPage\Form\Transformer\AntelopeTransformer;
use SprykerShop\Yves\CustomerPage\CustomerPageFactory as SprykerCustomerPageFactory;

class CustomerPageFactory extends SprykerCustomerPageFactory
{
    /**
     * @return void
     */
    public function createCustomerFormFactory()
    {
        return new FormFactory();
    }
    /**
     * @return AntelopeTransformer
     */
    public function createAntelopeTransformer(): AntelopeTransformer
    {
       return new AntelopeTransformer(
           $this->getTrainingClient()
        );
    }
    /**
     * @return TrainingClientInterface
     */
    public function getTrainingClient(): TrainingClientInterface
    {
        return $this->getProvidedDependency(CustomerPageDependencyProvider::CLIENT_TRAINING);
    }
}

