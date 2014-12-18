<?php

namespace Behance\EndPoints\Users;

use Behance\EndPoints\Users\SubParameters\Sort;

class UsersQuery extends Users
{
    protected $query;

    public function __construct($search)
    {
        $this->query = array(
            'q' => $search,
            'field' => null,
            'country' => null,
            'state' => null,
            'city' => null,
            'page' => null,
            'sort' => null,
            'tags' => null
        );
    }

    public function __toString()
    {
        $queryString = "?q={$this->query['q']}";

        //@TODO do this later...

        return parent::__toString() . $queryString;
    }

    public function query()
    {

    }

    public function field()
    {

    }

    public function country()
    {

    }

    public function state()
    {

    }

    public function city()
    {

    }

    public function page()
    {

    }

    public function sort(Sort $sort)
    {
        $this->query['sort'] = $sort;

        return $this;
    }

    public function tags()
    {

    }
}