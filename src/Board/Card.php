<?php
declare(strict_types=1);

namespace Eerison\DI\Board;

use Eerison\DI\Person\PersonInterface;

class Card implements CardInterface
{
    private $owner;
    private $title;
    private $description;

    /**
     * @return mixed
     */
    public function getOwner(): PersonInterface
    {
        return $this->owner;
    }

    /**
     * @param mixed $owner
     * @return Card
     */
    public function setOwner(PersonInterface $owner): CardInterface
    {
        $this->owner = $owner;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     * @return Card
     */
    public function setTitle($title): CardInterface
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     * @return Card
     */
    public function setDescription($description): CardInterface
    {
        $this->description = $description;
        return $this;
    }
}
