<?php
// File: index.php

require_once 'FileLogger.php';
require_once 'DBLogger.php';
require_once 'UserService.php';

// Example 1: Using FileLogger
$fileLogger = new FileLogger();
$userService = new UserService($fileLogger);
$userService->register("john_doe");

// Example 2: Using DBLogger
// Assume $pdo is a working PDO connection
// $dbLogger = new DBLogger($pdo);
// $userService = new UserService($dbLogger);
// $userService->register("jane_doe");
