<?php

declare(strict_types=1);

namespace TP\Collection;

use TP\Entity\Organizer;
use ArrayIterator;
use Iterator;
use IteratorIterator;

final class OrganizerCollection extends IteratorIterator implements Iterator
{
    public function __construct(Organizer ...$organizers)
    {
        parent::__construct(new ArrayIterator($organizers));
    }

    public function current() : ?Organizer
    {
        return parent::current();
    }
}
