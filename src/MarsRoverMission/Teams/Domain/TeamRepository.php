<?php
namespace Housfy\MarsRoverMission\Teams\Domain;

interface TeamRepository
{
    public function save(Team $team);
    public function find(int $id);
}

