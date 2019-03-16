<?php
declare(strict_types=1);

namespace Eerison\DI;

use Eerison\DI\Board\BoardInterface;
use Eerison\DI\Board\BoardService;
use Eerison\DI\Board\Card;
use Eerison\DI\Board\CardInterface;
use Eerison\DI\Logger\LoggerFile;
use Eerison\DI\Logger\LoggerInterface;
use Eerison\DI\Notification\EmailService;
use Eerison\DI\Notification\NotificationInterface;
use Eerison\DI\Person\Employer;
use Eerison\DI\Person\PersonInterface;

class MainFactory
{
    public static function createMain()
    {
        return new Main();
    }

    public static function createEmployer(): PersonInterface
    {
        return new Employer();
    }

    public static function createCard(): CardInterface
    {
        return new Card();
    }

    public static function createLoggerFile(): LoggerInterface
    {
        return new LoggerFile();
    }

    public static function createEmailService(): NotificationInterface
    {
        return new EmailService();
    }

    public static function createBoardService(): BoardInterface
    {
        return new BoardService(self::createEmailService(), self::createLoggerFile());
    }
}
