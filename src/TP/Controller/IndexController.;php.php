<?php

declare(strict_types=1);

namespace TP\Controller;

use TP\Repository\MeetingRepository;

final class IndexController
{
    /**
     * @var \Application\Repository\LecturerRepository
     */
    private $meetingRepository;

    public function __construct(MeetingRepository $meetingRepository)
    {
        $this->meetingRepository = $meetingRepository;
    }

    public function indexAction() : string
    {
        $meeting = $this->meetingRepository->fetchAll();

        ob_start();
        include __DIR__.'/../../../views/index.phtml';
        return ob_get_clean();
    }
}
