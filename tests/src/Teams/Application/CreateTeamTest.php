<?php
namespace Housfy\Test\Teams\Application;

use Housfy\MarsRoverMission\Explorers\Domain\Explorer as DomainExplorer;
use Housfy\MarsRoverMission\Teams\Domain\Team as DomainTeam;
use Housfy\MarsRoverMission\Vehicles\Domain\Vehicle as DomainVehicle;
use Housfy\Tests\Explorers\Domain\Explorer;
use Housfy\Tests\Teams\Domain\Team;
use Housfy\Tests\Vehicles\Domain\Vehicle;
use PHPUnit\Framework\TestCase;

final class CreateTeamTest extends TestCase
{

    /** @test */
    public function CreateTeam()
    {
        Team::random();
    }

}

