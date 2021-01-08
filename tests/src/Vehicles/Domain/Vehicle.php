<?php
namespace Housfy\Tests\Vehicles\Domain;

use Faker\Factory;
use Housfy\MarsRoverMission\Vehicles\Domain\Vehicle as DomainVehicle;

final class Vehicle
{
    public static function create (String $uuid, String $name, array $coordinates, ?array $moves, array $commands) :DomainVehicle
    {
        return new DomainVehicle($uuid, $name, $coordinates, $moves, $commands);
    }

    public static function random () :DomainVehicle
    {
        $fake = Factory::create();
        $uuid   = $fake->unique()->uuid;
        $name = $fake->unique()->word;
        $coordinates = array (
            'x' => $fake->unique()->randomNumber,
            'y' => $fake->unique()->randomNumber
        );
        $commands = array(
            'command 1' => $fake->unique()->word,
            'command 2' => $fake->unique()->word
        );
        
        return self::create($uuid, $name, $coordinates, null, $commands);
    }
}

