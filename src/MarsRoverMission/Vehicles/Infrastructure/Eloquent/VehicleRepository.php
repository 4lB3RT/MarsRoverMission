<?php
namespace Housfy\MarsRoverMission\Vehicles\Infrastructure\Eloquent;

use App\Models\Vehicles\Vehicle;
use Housfy\MarsRoverMission\Shared\Infrastructure\Eloquent\EloquentRepository;
use Housfy\MarsRoverMission\Vehicles\Domain\Vehicle as DomainVehicle;
use Housfy\MarsRoverMission\Vehicles\Domain\VehicleRepository as DomainVehicleRepository;

class VehicleRepository extends EloquentRepository implements DomainVehicleRepository
{

    public function save(DomainVehicle $vehicle)
    {
        $this->model->uuid        = $vehicle->uuid();
        $this->model->team_id     = !empty($vehicle->team()) ? $vehicle->team->id() : '';
        $this->model->name        = $vehicle->name();
        $this->model->coordinates = json_encode(implode(':', $vehicle->coordinates()));
        $this->model->moves       = !empty($vehicle->moves()) ? json_encode(implode(':', $vehicle->moves())) : '';
        $this->model->commands    = json_encode(implode(':', $vehicle->commands()));
        
        $this->model->save();
    }
}

