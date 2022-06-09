<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, SparkPost and others. This file provides a sane default
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

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],
    'firebase' => [
        'api_key' => 'AIzaSyCd3GUIFczRCdklyhp5hz_N0TAJoQMO-RU',
        'auth_domain' => 'lemonpeak-34082.firebaseapp.com',
        'database_url' => 'https://lemonpeak-34082-default-rtdb.firebaseio.com/',
        'secret' => 'F1tet4K4DjzwAsU9lWTpjyNvYC5kGq49KcxtRAxd',
        'storage_bucket' => 'lemonpeak-34082.appspot.com',
        'project_id' => 'lemonpeak-34082',
        'messaging_sender_id' => '126906008289'
    ]

];
