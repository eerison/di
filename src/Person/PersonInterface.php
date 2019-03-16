<?php
declare(strict_types=1);

namespace Eerison\DI\Person;

interface PersonInterface
{
    public function getFirstName(): string;

    public function setFirstName($firstName): self;

    public function getLastName(): string;

    public function setLastName($lastName): self;

    public function getState(): string;

    public function setState($state): self;

    public function getCity(): string;

    public function setCity($city): self;

    public function setEmail(string $email): self;

    public function getEmail(): string;
}
