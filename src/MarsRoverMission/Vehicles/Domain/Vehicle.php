<?php
namespace Housfy\MarsRoverMission\Vehicles\Domain;

use Housfy\MarsRoverMission\Planets\Domain\Planet;
use Housfy\MarsRoverMission\Teams\Domain\Team;

final class Vehicle
{

    private $id;
    private $uuid;
    private $team;
    private $planet;
    private $name;
    private $coordinates;
    private $moves;
    private $commands;

    public function __construct(String $uuid, String $name, array $coordinate, ?array $moves, array $commands)
    {
        $this->uuid         = $uuid;
        $this->name         = $name;
        $this->coordinates  = $coordinate;
        $this->moves        = $moves;
        $this->commands     = $commands;
    }

    public function id(): int
    {
        return $this->id;
    }

    public function uuid() :string
    {
        return $this->uuid;
    }

    public function team(): ?Team
    {
        return $this->team;
    }

    public function name() :string
    {
        return $this->name;
    }

    public function coordinates() :array
    {
        return $this->coordinates;
    }

    public function moves() :?array
    {
        return $this->moves;
    }

    public function commands() : array
    {
        return $this->commands;
    }

    public function assignTeam(Team $team)
    {
        $this->team = $team;
    }

    public function assignPlanet(Planet $planet)
    {
        $this->planet = $planet;
    }

}

