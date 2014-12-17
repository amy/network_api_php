<?php

namespace Behance\EndPoints\Project;

/**
 * Class ProjectInformation
 *
 * @package Behance\EndPoints\Project
 * @author  Amy Chen <ac1084@scarletmail.rutgers.edu>
 */
class ProjectInformation extends Project
{
    /**
     * ProjectInformation constructor
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
     * String representation of ProjectInformation class
     *
     * @return string
     */
    public function __toString()
    {
        return  parent::__toString() .
            '/' .
            $this->endpoint['project_id'];
    }
}