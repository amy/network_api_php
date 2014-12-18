<?php

namespace Behance\EndPoints\WorkInProgress;

abstract class RevisionWipsId extends WipsId
{
    protected $revisionID;

    public function __construct(
        $id,
        $revisionID
    ) {
        $this->revisionID = $revisionID;

        parent::__construct($id);
    }

    public function __toString()
    {
        return parent::__toString() . '/' . $this->revisionID;
    }
}