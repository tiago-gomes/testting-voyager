<?php

return [
    "oauth_url" => env('SALESFORCE_AUTHORIZE'),
    "callback_url" => env('SALESFORCE_CALLBACK_URL'),
    "salesforce_key" => env('SALESFORCE_KEY'),
    "salesforce_secret" => env('SALESFORCE_SECRET')
];
