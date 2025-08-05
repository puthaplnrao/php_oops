<?php
// UserService.php
require_once 'Logger.php';
require_once 'EmailSender.php';

class UserService
{
    use Logger, EmailSender;

    public function registerUser($name, $email)
    {
        echo "User '$name' registered.\n";
        $this->log("User registered: $name");
        $this->sendEmail($email, "Welcome, $name!");
    }
}
