<?php

namespace Behance\EndPoints\Project;

class ProjectComments extends Project
{
    public function __construct($projectID)
    {
        $this->endpoint = array(
            'project_id' => $projectID
        );
    }

    public function __toString()
    {
        return parent::__toString() .
            '/' .
            $this->endpoint['project_id'] .
            '/comments';
    }
}