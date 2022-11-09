<?php

namespace Tofex\IndexerFlat\Helper;

use Tofex\IndexerFlat\Model\Indexer\Category\Flat\State;

/**
 * @author      Andreas Knollmann
 * @copyright   Copyright (c) 2014-2022 Tofex UG (http://www.tofex.de)
 * @license     http://www.opensource.org/licenses/mit-license.php MIT
 */
class Data
{
    /** @var State */
    protected $catalogCategoryFlatState;

    /** @var \Tofex\IndexerFlat\Model\Indexer\Product\Flat\State */
    protected $catalogProductFlatState;

    /**
     * @param State                                               $catalogCategoryFlatState
     * @param \Tofex\IndexerFlat\Model\Indexer\Product\Flat\State $catalogProductFlatState
     */
    public function __construct(
        State $catalogCategoryFlatState,
        \Tofex\IndexerFlat\Model\Indexer\Product\Flat\State $catalogProductFlatState)
    {
        $this->catalogCategoryFlatState = $catalogCategoryFlatState;
        $this->catalogProductFlatState = $catalogProductFlatState;
    }

    /**
     * @param bool $forceDisabled
     */
    public function setForceDisabled(bool $forceDisabled = true)
    {
        $this->catalogCategoryFlatState->setForceDisabled($forceDisabled);
        $this->catalogProductFlatState->setForceDisabled($forceDisabled);
    }

    /**
     * @param bool $forceDisabled
     */
    public function setCategoryForceDisabled(bool $forceDisabled = true)
    {
        $this->catalogCategoryFlatState->setForceDisabled($forceDisabled);
    }

    /**
     * @param bool $forceDisabled
     */
    public function setProductForceDisabled(bool $forceDisabled = true)
    {
        $this->catalogProductFlatState->setForceDisabled($forceDisabled);
    }
}
