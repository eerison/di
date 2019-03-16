<?php
use Eerison\DI\Board\BoardService;
use Eerison\DI\Notification\EmailService;
use Eerison\DI\Logger\LoggerFile;
use Eerison\DI\MainDI;
use Eerison\DI\Person\Employer;
use Eerison\DI\Board\Card;
use function DI\create;
use function DI\get;

return [
    BoardService::class => create()
        ->constructor(
            get(EmailService::class),
            get(LoggerFile::class)
        ),

    'eerison.main' => create(MainDI::class)
    ->constructor(
        get(BoardService::class),
        get(Employer::class),
        get(Card::class)
    )
];
