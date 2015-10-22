<?php

use Symfony\Component\Debug\Debug;
use Symfony\Component\HttpFoundation\Request;

umask(0000);

$loader = require_once __DIR__.'/../config/autoload.php';
require_once __DIR__.'/../AppKernel.php';

$dotenv = new Dotenv\Dotenv(__DIR__.'/../');
$dotenv->load();

$env = getenv('SYMFONY_ENV');
$debug = getenv('SYMFONY_DEBUG');

if ($debug) {
    Debug::enable();
}

$kernel = new AppKernel($env, $debug);
$request = Request::createFromGlobals();

$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);
