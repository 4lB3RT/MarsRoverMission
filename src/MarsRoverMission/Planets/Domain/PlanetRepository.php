<?php
namespace Housfy\MarsRoverMission\Planets\Domain;

interface PlanetRepository
{
    public function save(Planet $planet);
    public function find(int $id);
}

