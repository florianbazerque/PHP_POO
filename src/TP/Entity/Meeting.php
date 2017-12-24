<?php

declare(strict_types=1);

namespace TP\Entity;
use \DateTimeImmutable;

final class Meeting 
{
    /**
     * @var string
     */

    private $id;
    private $title;
    private $desc;
    private $dateStart;
    private $dateEnd;

    public function __construct(int $id, string $title, string $desc, DateTimeImmutable $dateStart, DateTimeImmutable $dateEnd)
    {
        $this->id = $id;
        $this->title = $title;
        $this->desc = $desc;
        $this->dateStart = $dateStart;
        $this->dateEnd = $dateEnd;
    }

    public function getId() : int
    {
        return $this->id;
    }

    public function getTitle() : string
    {
        return $this->title;
    }

    public function getDesc() : string
    {
        return $this->desc;
    }

    public function getDateStart() : string
    {
        return $this->dateStart->format('Y-m-d');
    }

    public function getDateEnd() : string
    {
        return $this->dateEnd->format('Y-m-d');
    }

}
