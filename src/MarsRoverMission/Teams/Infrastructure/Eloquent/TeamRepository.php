<?php
namespace Housfy\MarsRoverMission\Teams\Infrastructure\Eloquent;

use App\Models\Teams\Team;
use Housfy\MarsRoverMission\Teams\Domain\Team as DomainTeam;
use Housfy\MarsRoverMission\Teams\Domain\TeamRepository as DomainTeamRepository;
use Housfy\MarsRoverMission\Shared\Infrastructure\Eloquent\EloquentRepository;

class TeamRepository extends EloquentRepository implements DomainTeamRepository
{
    public function save(DomainTeam $team)
    {
        
    }
}