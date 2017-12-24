<?php

declare(strict_types=1);

namespace TP\Collection;

use TP\Entity\Attendee;
use ArrayIterator;
use Iterator;
use IteratorIterator;

final class AttendeeCollection extends IteratorIterator implements Iterator
{
    public function __construct(Attendee ...$attendees)
    {
        parent::__construct(new ArrayIterator($attendees));
    }

    public function current() : ?Attendee
    {
        return parent::current();
    }
}
