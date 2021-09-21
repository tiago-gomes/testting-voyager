<?php

return [
    "oauth_url" => env('SALESFORCE_AUTHORIZE'),
    "callback_url" => env('SALESFORCE_CALLBACK_URL'),
    "salesforce_key" => env('SALESFORCE_KEY'),
    "salesforce_secret" => env('SALESFORCE_SECRET'),
    "salesforce_instance_url" => env('SALESFORCE_INSTANCE_URL'),
    "salesforce_access_token" => env('SALESFORCE_ACCESS_TOKEN'),
    "salesforce_refresh_token" => env('SALESFORCE_REFRESH_TOKEN')
];
