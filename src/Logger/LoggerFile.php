<?php

namespace Eerison\DI\Logger;

class LoggerFile implements LoggerInterface
{
    public function error(string $message): void
    {
        printf('It\'s a error logger with message: %s', $message);
    }

    public function info(string $message): void
    {
        printf('It\'s a info logger with message: %s', $message);
    }
}
