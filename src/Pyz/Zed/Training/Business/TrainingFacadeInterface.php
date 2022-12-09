<?php

namespace Pyz\Zed\Training\Business;

use Generated\Shared\Transfer\AntelopeCriteriaTransfer;
use Generated\Shared\Transfer\AntelopeResponseTransfer;
use Generated\Shared\Transfer\AntelopeTransfer;

/** */
interface TrainingFacadeInterface
{
    /**
     * Undocumented function
     *
     * @param AntelopeTransfer $antelopeTransfer
     * @return AntelopeTransfer
     */
    public function createAntelope(AntelopeTransfer $antelopeTransfer): AntelopeTransfer;

    /**
     * Undocumented function
     *
     * @param AntelopeCriteriaTransfer $antelopeCriteria
     * @return AntelopeResponseTransfer
     */
    public function findAntelope(AntelopeCriteriaTransfer $antelopeCriteria): AntelopeResponseTransfer;
}
