<?php

// init survey monkey and campaign monitor client
require('./config.php');

// get this web_hook_id from create_survey_hook.php
$web_hook_id = 3416665;

$web_hook = $sm_client->getWebhook($web_hook_id)->getData();

print_r($web_hook);