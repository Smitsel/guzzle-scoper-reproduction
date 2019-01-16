<?php

namespace _PhpScoper5c3efd0df2edb;

/*
 * Make sure to disable the display of errors in production code!
 */

use _PhpScoper5c3efd0df2edb\GuzzleHttp\Client;

\ini_set('display_errors', 1);
\ini_set('display_startup_errors', 1);
\error_reporting(\E_ALL);


require_once __DIR__ . "/../vendor/autoload.php";
require_once __DIR__ . "/../guzzle/vendor/autoload.php";

// Initialize the first Guzzle client
$guzzle_client2 = new \GuzzleHttp\Client();

// Initialize the second one
$guzzle_client = new Client();

var_dump("There is no problem when this line is shown.");
exit;
