<?php
interface Logger
{
    public function log($message);
    public function debugLog($message);
}

class FileLogger implements Logger
{
    public function log($message)
    {
        echo "Logged: $message";
    }
    public function debugLog($message)
    {
        echo "Debug Log: $message";
    }
}

$FileLogger = new FileLogger();
$FileLogger->log("This is a log message.");
