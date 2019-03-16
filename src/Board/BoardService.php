<?php
declare(strict_types=1);

namespace Eerison\DI\Board;

use Eerison\DI\Logger\LoggerInterface;
use Eerison\DI\Notification\NotificationInterface;
use Eerison\DI\Person\PersonInterface;

class BoardService implements BoardInterface
{
    private $notification;
    private $logger;

    public function __construct(
        NotificationInterface $notification,
        LoggerInterface $logger
    ) {
        $this->notification = $notification;
        $this->logger = $logger;
    }

    public function processMyCard(CardInterface $card): void
    {
        $this->logger->info(sprintf('Processing my card: %s %s', $card->getTitle(), PHP_EOL));

        $owner = $card->getOwner();

        if ($owner instanceof PersonInterface) {
            $this->logger->info(sprintf('%s %s is owner this card. %s', $owner->getFirstName(), $owner->getLastName(), PHP_EOL));
        }

        $this->notification
            ->setRecipient($owner)
            ->send('Hey your card was processed with success.');
    }
}
