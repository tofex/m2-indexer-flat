<?php

namespace Tofex\IndexerFlat\Model\Indexer\Category\Flat;

/**
 * @author      Andreas Knollmann
 * @copyright   Copyright (c) 2014-2022 Tofex UG (http://www.tofex.de)
 * @license     http://www.opensource.org/licenses/mit-license.php MIT
 */
class State
    extends \Magento\Catalog\Model\Indexer\Category\Flat\State
{
    /** @var bool */
    private $forceDisabled = false;

    /**
     * Check if Flat Index is enabled
     *
     * @return bool
     */
    public function isFlatEnabled(): bool
    {
        return ! $this->forceDisabled && parent::isFlatEnabled();
    }

    /**
     * @param bool $forceDisabled
     */
    public function setForceDisabled(bool $forceDisabled = true)
    {
        $this->forceDisabled = $forceDisabled;
    }
}
