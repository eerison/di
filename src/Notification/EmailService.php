<?php
declare(strict_types=1);

namespace Eerison\DI\Notification;


use Eerison\DI\Person\PersonInterface;

class EmailService implements NotificationInterface
{

    private $recipient;

    public function setRecipient(PersonInterface $recipient): NotificationInterface
    {
        $this->recipient = $recipient;

        return $this;
    }

    public function send(string $message): bool
    {
        if (!$this->recipient instanceof PersonInterface) {
            return false;
        }

        printf('Sending email to %s with message: %s', $this->recipient->getEmail(), $message);

        return true;
    }
}
