<?php

if (!file_exists(__DIR__.'/vendor/autoload.php')) {
   throw new Exception("No vendor found, please run composer install --no-dev");
}
require_once __DIR__.'/vendor/autoload.php';
if (!file_exists(__DIR__.'/config.inc.php')) {
   throw new Exception("config.inc.php file not found, please create if and copy config.inc.example content.");
}
require_once __DIR__.'/config.inc.php';

$base_uri = trim(GLPI_URL, '/');

// define api client
$api_client = new GuzzleHttp\Client(['base_uri' => "$base_uri/apirest.php/"]);

// connect to api
$response = $api_client->get("initSession/", ['auth' => [API_USER, API_PASSWORD]]);
if ($response->getStatusCode() != 200
    || !$session_token = json_decode( (string) $response->getBody(), true)['session_token']) {
   throw new Exception("Cannot connect to api, check your config.inc.php file");
}
