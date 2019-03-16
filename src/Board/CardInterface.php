<?php
declare(strict_types=1);

namespace Eerison\DI\Board;

use Eerison\DI\Person\PersonInterface;

interface CardInterface
{
    public function setOwner(PersonInterface $owner): self;

    public function getOwner(): PersonInterface;

    public function setTitle(string $title): self;

    public function getTitle(): string;

    public function setDescription(string $description): self;

    public function getDescription(): string;
}
