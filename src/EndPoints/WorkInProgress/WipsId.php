<?php

namespace Behance\EndPoints\WorkInProgress;

abstract class WipsId extends Wips
{
    protected $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function __toString()
    {
        return parent::__toString() . '/' .$this->id;
    }
}