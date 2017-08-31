<?php
// init survey monkey and campaign monitor client
require('./config.php');

// survey monkey returns json post
$data = json_decode(file_get_contents('php://input'), true);

/**
 * survey monkey results will be something like this

 array(
	[event_datetime] => 2017-08-31T05:16:28.547638+00:00
 	[resources] => Array (
  		[respondent_id] => 6367983669
  		[recipient_id] => 0
        [user_id] => 105211679
 	    [collector_id] => 161397058
 		[survey_id] => 121716651
 	)
 	[name] => Survey Completed Webhook
 	[object_id] => 6367983669
 	[filter_id] => 121716651
 	[event_id] => 10001670290
 	[object_type] => response
  	[filter_type] => survey
  	[event_type] => response_completed
*/

if ($data) {
	// get respond
	$response = $sm_client->getSurveyResponse(121716651, 6367983669, true);

	// you can match the respond ids to the question ids
	$page =  $sm_client->getSurveyPageQuestion(121716651, 48108884, 160648335);

	// print_r($response->getData());
	error_log(print_r($response->getData().$page->getData(),1));
}
