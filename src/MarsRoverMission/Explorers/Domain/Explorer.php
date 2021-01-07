<?php
namespace Housfy\MarsRoverMission\Explorers\Domain;

use Housfy\MarsRoverMission\Teams\Domain\Team;

final class Explorer
{

    private $id;
    private $uuid;
    private $team;
    private $name;

    public function __construct(String $uuid, String $name)
    {
        $this->uuid   = $uuid;
        $this->name   = $name;
    }

    public function id(): int
    {
        return $this->id;
    }

    public function uuid(): string
    {
        return $this->uuid;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function assignTeam(Team $team)
    {
        $this->team = $team;
    }
}

