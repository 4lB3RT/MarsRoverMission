<?php
namespace Housfy\MarsRoverMission\Teams\Infrastructure\Eloquent;

use App\Models\Teams\Team;
use Housfy\MarsRoverMission\Teams\Domain\TeamRepository as DomainTeamRepository;
use Housfy\MarsRoverMission\Teams\Domain\Team as DomainTeam;

final class TeamRepository implements DomainTeamRepository
{
    private $model;

    public function __construct(Team $teamModel)
    {
        $this->model = $teamModel;
    }

    public function save(DomainTeam $team)
    {
        
    }

}

