<?php

namespace Behance\EndPoints\Collections;

abstract class CollectionsId extends Collections
{
    protected $collectionId;

    public function __construct($collectionId)
    {
        $this->collectionId = $collectionId;
    }

    public function __toString()
    {
        return parent::__toString() . '/' . $this->collectionId;
    }
}