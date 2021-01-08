<?php
namespace Housfy\MarsRoverMission\Explorers\Domain;

interface ExplorerRepository
{
    public function save(Explorer $explorer);
    public function find(int $id);
}

