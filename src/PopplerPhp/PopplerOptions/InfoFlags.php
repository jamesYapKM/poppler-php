<?php

namespace jamesYapKM\PopplerPhp\PopplerOptions;

use jamesYapKM\PopplerPhp\Constants as C;

/**
 * Trait InfoFlags
 * @package jamesYapKM\PopplerPhp\PopplerOptions
 */
trait InfoFlags
{
    /**
     * @return mixed
     */
    public function setBox()
    {
        return $this->setFlag(C::_BOX);
    }

    /**
     * @return array
     */
    protected function infoFlags()
    {
        return [C::_BOX];
    }
}
