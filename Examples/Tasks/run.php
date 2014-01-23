#!/usr/bin/php
<?php
require_once __DIR__ . '/../../vendor/autoload.php';
require_once 'config.php';
require_once 'error_handlers.php';
require_once 'BigTask.php';
require_once 'ParallelTasks.php';

use Examples\Tasks;

// The run() method will start the daemon loop.
Tasks\ParallelTasks::getInstance()->run();