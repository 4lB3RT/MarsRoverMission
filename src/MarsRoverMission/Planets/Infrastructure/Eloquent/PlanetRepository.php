<?php
namespace Housfy\MarsRoverMission\Planets\Infrastructure\Eloquent;

use App\Models\Planets\Planet;
use Housfy\MarsRoverMission\Planets\Domain\Planet as DomainPlanet;
use Housfy\MarsRoverMission\Planets\Domain\PlanetRepository as DomainPlanetRepository;

final class PlanetRepository implements DomainPlanetRepository
{

    private $model;
    
    public function __construct(Planet $planet)
    {
        $this->model = $planet;
    }

    public function save(DomainPlanet $planet)
    {
    }
}

