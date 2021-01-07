<?php
namespace Housfy\Tests\Vehicles\Domain;

use Faker\Factory;
use Housfy\MarsRoverMission\Vehicles\Domain\Vehicle as DomainVehicle;

final class Vehicle
{
    public static function create (String $id, String $name, array $coordinates, ?array $moves, array $commands) :DomainVehicle
    {
        return new DomainVehicle($id, $name, $coordinates, $moves, $commands);
    }

    public static function random () :DomainVehicle
    {
        $fake = Factory::create();
        $id   = $fake->unique()->uuid;
        $name = $fake->unique()->word;
        $coordinates = array (
            'x' => $fake->unique()->randomNumber,
            'y' => $fake->unique()->randomNumber
        );
        $commands = array(
            'command 1' => $fake->unique()->word,
            'command 2' => $fake->unique()->word
        );
        
        return self::create($id, $name, $coordinates, null, $commands);
    }
}

