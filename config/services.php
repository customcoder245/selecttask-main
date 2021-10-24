<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
	'facebook' => [
    'client_id' => '858169398144950',
     'client_secret' => 'bc11a5db391e96198e6af8789d87c0fe',
    'redirect' => 'https://www.selecttask.com/auth/facebook/callback',
  ],'google' => [
    'client_id'     =>'1000982972060-v1478cmrb6qnjfagjb8isq51ljjd7i1m.apps.googleusercontent.com',
    'client_secret' => 'AIzaSyD8mWLdLd8qjkR9Uxjd98_E1hPxqOw5h8M',
    'redirect'      => 'https://www.selecttask.com/google/callback',
],

];
