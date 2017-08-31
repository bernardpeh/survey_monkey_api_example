<?php

// init survey monkey and campaign monitor client
require('./config.php');

// Populate these survey_ids from get_survey_id.php
$survey_ids = ["121716651", "121670771"];

$data = [
	"name" => "Survey Completed Webhook",
	"event_type" => "response_completed",
	"object_type" => "survey",
	"object_ids" => $survey_ids,
	"subscription_url" => $survey_completed_url
];

// refer to https://github.com/SurveyMonkey/public_api_docs/blob/master/includes/_webhooks.md if you have problems

$web_hook = $sm_client->createWebhook($data)->getData();
print_r($web_hook);
