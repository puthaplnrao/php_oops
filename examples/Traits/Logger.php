<?php
// Logger.php
trait Logger
{
    public function log($msg)
    {
        echo "[LOG] $msg\n";
    }
}

// EmailSender.php
trait EmailSender
{
    public function sendEmail($to, $subject)
    {
        echo "Sending email to $to: $subject\n";
    }
}
