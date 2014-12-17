<?php

namespace Behance\EndPoints\Project;

/**
 * Class ProjectComments
 *
 * @package Behance\EndPoints\Project
 * @author   Amy Chen <ac1084@scarletmail.rutgers.edu>
 */
class ProjectComments extends Project
{
    /**
     * ProjectComments constructor
     *
     * @param $projectID
     */
    public function __construct($projectID)
    {
        $this->endpoint = array(
            'project_id' => $projectID
        );
    }

    /**
     * String representation of ProjectComments class
     *
     * @return string
     */
    public function __toString()
    {
        return parent::__toString() .
            '/' .
            $this->endpoint['project_id'] .
            '/comments';
    }
}