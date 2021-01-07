<?php
namespace Housfy\MarsRoverMission\Teams\Domain;

use Housfy\MarsRoverMission\Vehicles\Domain\Vehicle;

final class Team
{
    private $id;
    private $uuid;
    private $name;
    private $explorers;
    private $vehicle;

    public function __construct(String $uuid, String $name, array $explorers, Vehicle $vehicle)
    {
        $this->uuid         = $uuid;
        $this->name         = $name;
        $this->explorers    = $explorers;
        $this->vehicle      = $vehicle;
    }

    public function id(): int
    {
        return $this->id;
    }

    public function uuid() :string
    {
        return $this->uuid;
    }

    public function name() :string
    {
        return $this->name;
    }

    public function explorers(): array
    {
        return $this->explorers;
    }

    public function vehicle(): Vehicle
    {
        return $this->vehicle;
    }


}

