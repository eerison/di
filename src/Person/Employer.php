<?php
declare(strict_types=1);

namespace Eerison\DI\Person;

class Employer implements PersonInterface
{
    private $firstName;
    private $lastName;
    private $state;
    private $city;
    private $email;

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function setFirstName($firstName): PersonInterface
    {
        $this->firstName = $firstName;
        return $this;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function setLastName($lastName): PersonInterface
    {
        $this->lastName = $lastName;
        return $this;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function setState($state): PersonInterface
    {
        $this->state = $state;
        return $this;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function setCity($city): PersonInterface
    {
        $this->city = $city;
        return $this;
    }

    public function setEmail(string $email): PersonInterface
    {
        $this->email = $email;

        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }
}
