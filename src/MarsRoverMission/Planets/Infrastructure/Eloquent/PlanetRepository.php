<?php
namespace Housfy\MarsRoverMission\Planets\Infrastructure\Eloquent;

use App\Models\Planets\Planet;
use Housfy\MarsRoverMission\Planets\Domain\Planet as DomainPlanet;
use Housfy\MarsRoverMission\Planets\Domain\PlanetRepository as DomainPlanetRepository;
use Housfy\MarsRoverMission\Shared\Infrastructure\Eloquent\EloquentRepository;

final class PlanetRepository extends EloquentRepository implements DomainPlanetRepository
{

    public function save(DomainPlanet $planet)
    {
    }
}

