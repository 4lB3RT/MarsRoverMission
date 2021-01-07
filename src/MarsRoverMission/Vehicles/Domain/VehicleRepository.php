<?php
namespace Housfy\MarsRoverMission\Vehicles\Domain;

interface VehicleRepository
{
    public function save(Vehicle $vehicle);
}

