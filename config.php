<?php

// autoload
require('vendor/autoload.php');

$sm_api_key = 'your_api_key';
$sm_api_token = 'your_api_token';
$survey_completed_url = 'http://your_server_url.xx/sync.php';

$sm_client = new Spliced\SurveyMonkey\Client($sm_api_key, $sm_api_token);
