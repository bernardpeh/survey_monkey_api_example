# Objectives

The idea is to create webhooks in survey monkey so that upon every successful submission of the survey, data gets posted to your server and you do magic with it.

## Installation

* Sign up for survey monkey.

* Create sample survey in survey monkey.

* git clone https://github.com/bernardpeh/survey_monkey_api_example

* `composer install`

* Get api_key and api_token survey monkey and update config.php

## Testing

step 1: Get survey ids from get_survey_id.php

step 2: create a new hook by running create_survey_hook.php

step 3: verify that survey hook created by running get_survey_hooks.php

step 4: Do a survey and verify that webhook is working by looking the error log generated by http://your_server_url.xx/sync.php

## References 

* https://developer.surveymonkey.com/api/v3/