<?php

declare(strict_types=1);

namespace TP\Entity;

use TP\Entity\User;
use \PDO;
use TP\Entity\Meeting;

final class Organizer extends User 
{
   public function participation(Meeting $meeting) {
   		
   }
}
