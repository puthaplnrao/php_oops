<?php
// index.php
require_once 'UserService.php';

$service = new UserService();
$service->registerUser("John", "john@example.com");
