<?php
declare(strict_types=1);

namespace Eerison\DI\Notification;


use Eerison\DI\Person\PersonInterface;

interface NotificationInterface
{
    public function setRecipient(PersonInterface $recipient): self;

    public function send(string $message): bool;
}
