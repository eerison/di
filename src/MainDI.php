<?php

declare(strict_types=1);

namespace Eerison\DI;

use Eerison\DI\Board\BoardInterface;
use Eerison\DI\Board\BoardService;
use Eerison\DI\Board\CardInterface;
use Eerison\DI\Person\PersonInterface;

class MainDI
{
    private $boardService;
    private $employer;
    private $card;

    public function __construct(
        BoardInterface $boardService,
        PersonInterface $employer,
        CardInterface $card
    ) {
        $this->boardService = $boardService;
        $this->employer = $employer;
        $this->card = $card;
    }

    public function __invoke()
    {
        $this->employer
            ->setFirstName('Erison')
            ->setLastName('Silva DI')
            ->setEmail('erison.sdn@gmail.com')
        ;

        $this->card
            ->setOwner($this->employer)
            ->setTitle('My first card using DI.')
            ->setDescription('It\'s my short description.')
        ;

        $this->boardService->processMyCard($this->card);
    }
}
