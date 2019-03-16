<?php
declare(strict_types=1);

namespace Eerison\DI;


class Main
{
    public function __invoke()
    {
        $employer = MainFactory::createEmployer();
        $employer
            ->setFirstName('Erison')
            ->setLastName('Silva')
            ->setEmail('erison.sdn@gmail.com')
        ;

        $card = MainFactory::createCard();
        $card
            ->setOwner($employer)
            ->setTitle('My first card.')
            ->setDescription('It\'s my short description.')
        ;

        $boardService = MainFactory::createBoardService();
        $boardService->processMyCard($card);
    }
}
