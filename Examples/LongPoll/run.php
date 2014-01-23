#!/usr/bin/php
<?php
require_once __DIR__ . '/../../vendor/autoload.php';
require_once 'config.php';
require_once 'error_handlers.php';
require_once 'Poller.php';
require_once 'API.php';

use Examples\LongPoll;

// The run() method will start the daemon event loop.
LongPoll\Poller::getInstance()->run();
