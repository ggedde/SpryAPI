<?php

// Salt for Security.  Change this to be Unique for each one of your API's.
// You should use a long and Strong key.
$config->salt = 'asdfghjklkjhgfdsasdfghjklpoiuytrewqazxcvbnm';

// Database
$config->db = [
	'database_type' => 'mysql',
	'database_name' => '',
	'server' => 'localhost',
	'username' => '',
	'password' => '',
	'charset' => 'utf8',
	'port' => 3306,
	'prefix' => 'api_x_' // Should change this to be someting Uniue
];

// Routes
$config->routes = [
	'/auth/get' => 'AUTH::get',
	'/account/get' => 'ACCOUNT::get',

	// '/example/get' => 'EXAMPLE::get',
	// '/example/get_all' => 'EXAMPLE::get_all',
	// '/example/insert' => 'EXAMPLE::insert',
	// '/example/update' => 'EXAMPLE::update',
	// '/example/delete' => 'EXAMPLE::delete'
];


$config->response_codes = [

	/* General */
	4000 => ['en' => 'No Results Found'],
	5100 => ['en' => 'Error: Field did not Validate.'],
	5101 => ['en' => 'Error: No Parameters Found.'],
	5102 => ['en' => 'Error: Request Not Found.'],
	5103 => ['en' => 'Error: Controller Not Found.'],
	5104 => ['en' => 'Error: Returned Data is not in JSON format.'],

	/* Auth */
	2200 => ['en' => 'Authentication Passed Successfully'],
	5200 => ['en' => 'Error: Invalid Username and Password'],
	5201 => ['en' => 'Error: Account is Not Valid'],

	2201 => ['en' => 'Successfully'],

	2202 => ['en' => 'Successfully Created Request Token'],
	5202 => ['en' => 'Error: Creating Request Token'],

	2203 => ['en' => 'Successfully Granted Access'],
	5203 => ['en' => 'Error: Creating Access Token'],

	/* Example */
	// 2300 => ['en' => 'Successfully Retrieved Example'],
	// 4300 => ['en' => 'No Example with that ID Found'],
	// 5300 => ['en' => 'Error: Retrieving Example'],

	// 2301 => ['en' => 'Successfully Retrieved Examples'],
	// 4301 => ['en' => 'No Results Found'],
	// 5301 => ['en' => 'Error: Retrieving Examples'],

	// 2302 => ['en' => 'Successfully Created Example'],
	// 5302 => ['en' => 'Error: Creating Example'],

	// 2303 => ['en' => 'Successfully Updated Example'],
	// 4303 => ['en' => 'No Example with that ID Found'],
	// 5303 => ['en' => 'Error: Updating Example'],

	// 2304 => ['en' => 'Successfully Deleted Example'],
	// 5304 => ['en' => 'Error: Deleting Example'],

	/* Accounts */
	2400 => ['en' => 'Successfully Retrieved Account'],
	5400 => ['en' => 'Error: Retrieving Account'],

];

// $config->pre_auth_filter = 'YOUR_CONTROLLER::pre_auth_filter';
// $config->post_auth_filter = 'YOUR_CONTROLLER::post_auth_filter';


