<?php
// init survey monkey and campaign monitor client
require('./config.php');

$surveys = $client->getSurveys([]);
print_r($surveys->getData());

