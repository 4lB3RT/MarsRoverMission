<?php
namespace Housfy\MarsRoverMission\Teams\Domain;

interface TeamRepository
{
    public function save(Team $team);
}

