<?php

namespace Behance\EndPoints\Collections;

class CollectionsProjects extends CollectionsId
{
    public function __toString()
    {
        return parent::__toString() . '/projects';
    }
}