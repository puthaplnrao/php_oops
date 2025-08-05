<?php
// File: DBLogger.php
require_once 'LoggerInterface.php';

class DBLogger implements LoggerInterface
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function log($message)
    {
        $stmt = $this->pdo->prepare("INSERT INTO logs (message, created_at) VALUES (?, NOW())");
        $stmt->execute([$message]);
    }
}
