<?php

namespace Behance\EndPoints\Collections;

class CollectionsQuery extends Collections
{
    protected $query;

    public function __construct($search)
    {
        $this->query = array(
            'q' => $search,
            'time' => null,
            'page' => null,
            'sort' => null
        );
    }

    public function __toString()
    {
        // @TODO
    }

    public function search($search)
    {
        $this->query['q'] = $search;

        return $this;
    }

    public function time()
    {

    }

    public function page()
    {

    }

    public function sort()
    {

    }
}