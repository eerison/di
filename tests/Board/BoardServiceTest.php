<?php
declare(strict_types=1);

namespace Eerison\DI\Tests\Board;

use Eerison\DI\Board\BoardService;
use Eerison\DI\Logger\LoggerFile;
use Eerison\DI\Notification\EmailService;
use PHPUnit\Framework\TestCase;

class BoardServiceTest extends TestCase
{
    public function testCanBeUsedAsString(): void
    {
        $email = $this->getMockBuilder(EmailService::class)
            ->disableOriginalConstructor()
            ->disableOriginalClone()
            ->disableArgumentCloning()
            ->disallowMockingUnknownTypes()
            ->getMock()
        ;

        $logger = $this->getMockBuilder(LoggerFile::class)->getMock();

        $mock = $this->getMockBuilder(BoardService::class)
            ->setConstructorArgs([$email, $logger])
            ->getMock();

    }
}
