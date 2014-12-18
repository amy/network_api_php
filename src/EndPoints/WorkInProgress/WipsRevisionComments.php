<?php
/**
 * Created by PhpStorm.
 * User: amy
 * Date: 12/18/14
 * Time: 4:03 AM
 */

namespace Behance\EndPoints\WorkInProgress;

class WipsRevisionComments extends RevisionWipsId
{
    public function __toString()
    {
        return parent::__toString() . '/comments';
    }
}