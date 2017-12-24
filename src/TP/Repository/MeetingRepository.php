<?php

declare(strict_types=1);

namespace TP\Repository;

use TP\Collection\MeetingCollection;
use TP\Entity\Meeting;
use PDO;

final class MeetingRepository
{
    /**
     * @var PDO
     */
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function fetchAll() : MeetingCollection
    {
        $result = $this->pdo->query('SELECT id, title, desc, dateStart, dateEnd FROM meeting');
        $films = [];
        while ($meeting = $result->fetch()) {
            $meetings[] = new Meeting($meeting['id'],$meeting['title'],$meeting['desc'],$meeting['dateStart'],$meeting['dateEnd']);
        }
        return new FilmCollection(...$films);
    }

    public function get(string $name) : Meeting
    {
        $statement = $this->pdo->prepare('SELECT id, title, desc, dateStart, dateEnd FROM meeting WHERE title = :name');
        $statement->execute([':name' => $name]);
        $meeting = $statement->fetch();
        return new Meeting($meeting['id'],$meeting['title'],$meeting['desc'],$meeting['dateStart'],$meeting['dateEnd']);
    }

    public function delete(string $name) {
        $statement = $this->pdo->prepare('DELETE FROM meetings WHERE title = :name');
        $statement->execute([':name' => $name]);
    }
    
}
