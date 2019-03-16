<?php

declare(strict_types=1);

namespace Eerison\DI\Logger;

interface LoggerInterface
{
    public function error(string $message): void;

    public function info(string $message): void;
}
