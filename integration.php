<?php

require("./vendor/autoload.php");

use Behance\EndPoints\Project\ProjectQuery;
use Behance\EndPoints\Project\Parameters\Sort;
use Behance\EndPoints\Project\Parameters\Time;
use Behance\BehanceClient;

/* --- build endpoint --- */
$endpoint = new ProjectQuery('test');
$endpoint
    -> sort(Sort::FEATURED_DATE())
    -> time(Time::MONTH());

$client = new BehanceClient(
    'your api key',
    $endpoint
);

$response = $client->request();

var_dump($response);