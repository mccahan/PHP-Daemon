#!/usr/bin/php
<?php
require_once 'config.php';
require_once 'error_handlers.php';
require_once __DIR__ . '/../../vendor/autoload.php';
require_once 'Workers/Primes.php';
require_once 'Daemon.php';

use Examples\PrimeNumbers;

// The run() method will start the daemon loop. 
PrimeNumbers\Daemon::getInstance()->run();