<?php

declare(strict_types=1);

namespace TP\Entity;

abstract class User 
{
    /**
     * @var string
     */

    protected $id;
    protected $name;
    protected $pwd;

    public function __construct(int $id, string $name, string $pwd)
    {
        $this->id = $id;
        $this->name = $name;
        $this->pwd =$pwd;
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

    public function getDateStart() : DateTimeImmutable
    {
        return $this->dateStart->format('Y:m:d');
    }

    public function getDateEnd() : DateTimeImmutable
    {
        return $this->dateEnd->format('Y:m:d');
    }

    public function participation(Meeting $meeting) {

        $stmt = $this->pdo->prepare('SELECT COUNT(*) FROM organizer WHERE id_organizer = :organizer AND id_meeting = :meeting');
        $stmt->execute(array($this->id, $meeting->getID());
        
        if ($stmt->fetchColumn() == 0) {

            $req = $this->pdo->prepare('INSERT INTO attendees(id_attendee, id_meeting) VALUES($this->id, $meeting->getId()');
            $req->execute();
        }
    }

}
