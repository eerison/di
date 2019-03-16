<?php

declare(strict_types=1);

namespace Eerison\DI\Board;


interface BoardInterface
{
    public function processMyCard(CardInterface $card): void;
}
