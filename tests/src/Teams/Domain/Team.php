<?php
namespace Housfy\Tests\Teams\Domain;

use Faker\Factory;
use Housfy\MarsRoverMission\Teams\Domain\Team as DomainTeam;
use Housfy\MarsRoverMission\Vehicles\Domain\Vehicle as DomainVehicle;
use Housfy\Tests\Explorers\Domain\Explorer;
use Housfy\Tests\Vehicles\Domain\Vehicle;

final class Team
{
    public static function create(String $id, String $name, array $explorers, DomainVehicle $vehicle) :DomainTeam
    {
        return new DomainTeam($id, $name, $explorers, $vehicle);
    }

    public static function random() : DomainTeam
    {
        $fake = Factory::create();
        $id   = $fake->unique()->uuid;
        $name = $fake->unique()->word;
        $explorers = array(
            'Explorer 1' => Explorer::random()
        );
        $vehicle = Vehicle::random();
        return self::create($id, $name, $explorers, $vehicle);
    }
}

