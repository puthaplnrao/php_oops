<?php
// File: FileLogger.php
require_once 'LoggerInterface.php';

class FileLogger implements LoggerInterface
{
    public function log($message)
    {
        file_put_contents("app.log", date('Y-m-d H:i:s') . " - " . $message . "\n", FILE_APPEND);
    }
}
