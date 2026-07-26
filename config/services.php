<?php
// /config/services.php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env(
            'MAILGUN_ENDPOINT',
            'api.mailgun.net'
        ),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env(
            'AWS_DEFAULT_REGION',
            'us-east-1'
        ),
    ],

    'kommo' => [
        'enabled' => env(
            'KOMMO_ENABLED',
            false
        ),

        'subdomain' => env(
            'KOMMO_SUBDOMAIN'
        ),

        'token' => env(
            'KOMMO_TOKEN'
        ),

        'pipeline_id' => env(
            'KOMMO_PIPELINE_ID'
        ),

        'status_id' => env(
            'KOMMO_STATUS_ID'
        ),

        'responsible_user_id' => env(
            'KOMMO_RESPONSIBLE_USER_ID'
        ),

        'fields' => [
            'travel_date' => env(
                'KOMMO_FIELD_TRAVEL_DATE_ID'
            ),

            'passengers' => env(
                'KOMMO_FIELD_PASSENGERS_ID'
            ),

            'destinations' => env(
                'KOMMO_FIELD_DESTINATIONS_ID'
            ),

            'duration' => env(
                'KOMMO_FIELD_DURATION_ID'
            ),

            'hotel_category' => env(
                'KOMMO_FIELD_HOTEL_CATEGORY_ID'
            ),

            'country' => env(
                'KOMMO_FIELD_COUNTRY_ID'
            ),

            'country_code' => env(
                'KOMMO_FIELD_COUNTRY_CODE_ID'
            ),

            'comment' => env(
                'KOMMO_FIELD_COMMENT_ID'
            ),

            'device' => env(
                'KOMMO_FIELD_DEVICE_ID'
            ),

            'browser' => env(
                'KOMMO_FIELD_BROWSER_ID'
            ),

            'origin' => env(
                'KOMMO_FIELD_ORIGIN_ID'
            ),

            'product' => env(
                'KOMMO_FIELD_PRODUCT_ID'
            ),
        ],
    ],

];
