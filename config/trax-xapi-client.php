<?php

return [

    'lrs' => array(
        'endpoint' => env('XAPI_LRS_ENDPOINT'),
        'key' => env('XAPI_LRS_KEY', 'testsuite'),
        'secret' => env('XAPI_LRS_SECRET', 'password'),
    ),
    
    'xapi' => array(
        'lang' => 'en',
        'version' => '1.0.3',
    ),
    
];
