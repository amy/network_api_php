<?php

/**
 * @TODO REMOVE THIS NOTE LATER
 * Was going to make EndPoint an ArrayObject, but realized that user could override checks,
 * could change the endpoint array to instance variables, but I chose not to so that I could be lazy and more
 * uniform with the Project Query __toString
 */

namespace Behance\EndPoints\Project;

use Behance\EndPoints\Project\Parameters\Sort;
use Behance\EndPoints\Project\Parameters\Time;
use Eloquent\Enumeration\AbstractEnumeration;

class ProjectQuery extends Project
{
    protected $query;

    public function __construct($query)
    {
        $this->query = $query;

        $this->endpoint = array(
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

    public function __toString()
    {
        $query =  parent::__toString() .
            '?q=' .
            $this->query;

        foreach ($this->endpoint as $parameter => $value) {

            $query .= "&{$parameter}=";

            if ($value !== null) {

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

    public function sort(Sort $sort)
    {
        $this->endpoint['sort'] = $sort;

        return $this;
    }

    public function time(Time $time)
    {
        $this->endpoint['time'] = $time;

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