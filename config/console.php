<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Route middleware
	|--------------------------------------------------------------------------
	|
	| Add middleware to protect your "console".
	|
	*/

	'middleware' => ['web', 'console_protect'],

    /*
    |--------------------------------------------------------------------------
    | Console security
    |--------------------------------------------------------------------------
    |
    | Username and password to access your console.
    |
    */

    'credentials' => [
        'username' => env('CONSOLE_USER', ''),
        'password' => env('CONSOLE_PASS', '')
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom asset url
    |--------------------------------------------------------------------------
    |
    | Custom asset url for alternate path or domain.
    |
    */

    'asset_url' => Config('app.url').'/ru-room/public/vendor/console'
);
