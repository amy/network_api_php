<?php

require("./vendor/autoload.php");

use Behance\EndPoints\Project\ProjectQuery;
use Behance\EndPoints\Project\SubParameters\Sort;
use Behance\EndPoints\Project\SubParameters\Time;
use Behance\BehanceClient;

/* --- build endpoint --- */
$endpoint = new ProjectQuery('test');
$endpoint
    -> sort(Sort::FEATURED_DATE())
    -> time(Time::MONTH());

$client = new BehanceClient(
    'j5KMZxpfIDMRiNiWu0jxLgPYiO9EnGmn',
    $endpoint
);

$response = $client->execute();

var_dump($response);