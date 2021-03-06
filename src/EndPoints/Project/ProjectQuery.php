<?php

/**
 * @TODO REMOVE THIS NOTE LATER
 * Was going to make EndPoint an ArrayObject, but realized that user could override checks.
 * A totally viable option is to change the endpoint array to instance variables, but I chose not to so that I could be lazy and more
 * uniform with the Project Query __toString
 */

namespace Behance\EndPoints\Project;

use Behance\EndPoints\Project\SubParameters\Sort;
use Behance\EndPoints\Project\SubParameters\Time;
use Eloquent\Enumeration\AbstractEnumeration;

/**
 * Class ProjectQuery
 * @package Behance\EndPoints\Project
 */
class ProjectQuery extends Project
{
    /**
     * @TODO should there be a query object? What is the format of the query? Will things break if I put in a space? Can I query "BLAH" AND "OTHER THING"
     */

    protected $query;

    /**
     * ProjectQuery constructor
     *
     * @param $search
     *    The search term you wish to query for.
     */
    public function __construct($search)
    {
        $this->$search = array(
            'q' => $search,
            'sort' => null,
            'time' => null,
            'field' => null,
            'country' => null,
            'state' => null,
            'city' => null,
            'page' => null,
            'tags' => null,
            'color_hex' => null,
            'color_range' => null,
            'license' => null
        );
    }

    /**
     * String representation of ProjectQuery class
     *
     * @return string
     */
    public function __toString()
    {
        /**
         * @TODO refactor this to each specific trait when you get more detail about each thing....
         */

        $query =  parent::__toString() .
            '?q=' .
            $this->query['q'];

        foreach ($this->query as $parameter => $value) {

            $query .= "&{$parameter}=";

            if ($value !== null && $parameter !== 'q') {

                if (is_object($value)) {

                    if ($value instanceof AbstractEnumeration) {
                        $query .= $value->value();
                    } else {
                        $query .= $value->__toString();
                    }

                } else {
                    $query .= $value;
                }
            }
        }

        return  $query;
    }

    public function search($search)
    {
        $this->query = $search;

        return $this;
    }

    public function sort(Sort $sort)
    {
        $this->query['sort'] = $sort;

        return $this;
    }

    public function time(Time $time)
    {
        $this->query['time'] = $time;

        return $this;
    }

    public function field()
    {
        //@TODO
    }

    public function country()
    {
        //@TODO
    }

    public function state()
    {
        //@TODO
    }

    public function city()
    {

    }

    public function page()
    {

    }

    public function tags()
    {

    }

    public function color_hex()
    {

    }

    public function color_range()
    {

    }

    public function license()
    {

    }
}