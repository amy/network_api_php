<?php

namespace Behance\EndPoints\Project;

abstract class ProjectID extends Project
{
    protected $projectID;

    public function __construct($projectID)
    {
        $this->projectID = $projectID;
    }

    public function __toString()
    {
        return parent::__toString() . '/' . $this->projectID;
    }
}