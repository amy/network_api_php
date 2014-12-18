<?php

namespace Behance\EndPoints\Project;

/**
 * Class ProjectComments
 *
 * @package Behance\EndPoints\Project
 * @author   Amy Chen <ac1084@scarletmail.rutgers.edu>
 */
class ProjectComments extends ProjectID
{
    /**
     * ProjectComments constructor
     *
     * @param $projectID
     */
    public function __construct($projectID)
    {
        parent::__construct($projectID);
    }

    /**
     * String representation of ProjectComments class
     *
     * @return string
     */
    public function __toString()
    {
        return
            parent::__toString() .
            '/' .
            $this->projectID['project_id'] .
            '/comments';
    }
}