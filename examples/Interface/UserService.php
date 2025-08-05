<?php
// File: UserService.php
require_once 'LoggerInterface.php';

class UserService
{
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function register($username)
    {
        // Register logic...
        echo "User '$username' registered.\n";
        $this->logger->log("User '$username' registered.");
    }
}
