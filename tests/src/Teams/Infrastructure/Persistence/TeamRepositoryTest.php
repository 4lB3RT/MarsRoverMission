<?php
namespace Housfy\Tests\Teams\Infrastructure\Persistence;

use App\Models\Teams\Team;
use Housfy\MarsRoverMission\Teams\Infrastructure\Eloquent\TeamRepository;
use Housfy\Tests\Teams\Domain\Team as TestTeam;

final class TeamRepositoryTest
{
    private function repository()
    {
        return new TeamRepository(new Team());
    }

    /** @test */
    public function it_should_save_team()
    {
        $team = TestTeam::random();
        $this->repository()->save($team);
    }

    
}

