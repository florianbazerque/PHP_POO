<?php

declare(strict_types=1);

namespace TP\Collection;

use TP\Entity\Meeting;
use ArrayIterator;
use Iterator;
use IteratorIterator;

final class MeetingCollection extends IteratorIterator implements Iterator
{
    public function __construct(Meeting ...$meetings)
    {
        parent::__construct(new ArrayIterator($meetings));
    }

    public function current() : ?Meeting
    {
        return parent::current();
    }
}
