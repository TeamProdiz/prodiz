<?php
namespace Pyz\Zed\Training\Business\Writer;

use Generated\Shared\Transfer\AntelopeTransfer;
use Pyz\Zed\Training\Persistence\TrainingEntityManagerInterface;

class AntelopeWriter
{
    /**
     * @var \Pyz\Zed\Training\Persistence\TrainingEntityManagerInterface
     */
    protected $trainingEntityManager;

    /**
     * Undocumented function
     *
     * @param TrainingEntityManagerInterface $trainingEntityManager
     */
    public function __construct(TrainingEntityManagerInterface $trainingEntityManager)
    {
        $this->trainingEntityManager = $trainingEntityManager;
    }
    /**
     * Undocumented function
     *
     * @param AntelopeTransfer $antelopeTransfer
     * @return AntelopeTransfer
     */
    public function create(AntelopeTransfer $antelopeTransfer): AntelopeTransfer
    {
        return $this->trainingEntityManager->createAntelope($antelopeTransfer);
    }
}
