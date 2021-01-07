<?php
namespace Housfy\MarsRoverMission\Planets\Domain;


final class Planet
{
    private $id;
    private $uuid;
    private $name;
    private $dimensions;

    public function __construct(String $uuid, String $name, String $dimensions)
    {
        $this->uuid         = $uuid;
        $this->name         = $name;
        $this->dimensions   = $dimensions;
    }

    public function id(): int
    {
        return $this->id;
    }

    public function uuid(): String
    {
        return $this->uuid;
    }

    public function name(): String
    {
        return $this->name;
    }

    public function dimensions(): String
    {
        return $this->dimensions;
    }
}

