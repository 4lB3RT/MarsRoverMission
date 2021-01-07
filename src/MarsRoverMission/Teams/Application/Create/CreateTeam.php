<?php
namespace Housfy\MarsRoverMission\Teams\Application\Create;

use Housfy\MarsRoverMission\Teams\Domain\TeamRepository;

final class CreateTeam
{

    private $teamRepository;

    public function __construct(TeamRepository $teamRepository)
    {
        $this->teamRepository = $teamRepository;
    }

    public function createTeam(String $id, String $name)
    {
        
    }
}

