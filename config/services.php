<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => Skol\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'google' => [
        'client_id' => '996595997623-kdc1k0tf2hvtffq5g7b9vq9e09vdtcji.apps.googleusercontent.com',
        'client_secret' => 'TIhkjeqCTF_9UJd0dlvCTxqd',
        'redirect' => 'http://localhost:8000/login/google/callback',
    ],
 
    'twitter' => [
        'client_id' => 'XYZfAjh0LPf3WfTyBoBD3CQII',
        'client_secret' => 'oJ55pGXWFkGPi7EQKJ6jRqCYB01EPTnU0Hj1P0U03cJTbeiQLz',
        'redirect' => 'http://localhost:8000/login/twitter/callback',
    ],

    'facebook' => [
        'client_id' => '367911846976286',
        'client_secret' => 'f54827eaddb750caf3cf39081748b1af',
        'redirect' => 'http://localhost:8000/login/facebook/callback',
    ],
];
