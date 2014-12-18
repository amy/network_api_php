<?php

namespace Behance\EndPoints\WorkInProgress;

use Behance\EndPoints\WorkInProgress\SubParameters\Sort;

class WipsQuery extends Wips
{
    public function __construct($query)
    {
        $this->endPointParameters = array(
            'q' => $query,
            'page' => null,
            'sort' => null,
            'time' => null
        );
    }

    public function __toString()
    {
        //@TODO
    }

    public function query()
    {

    }

    public function page()
    {

    }

    public function sort(Sort $sort)
    {
        $this->endPointParameters['sort'] = $sort;

        return $this;
    }

    public function time()
    {

    }
}