<?php
namespace Housfy\MarsRoverMission\Vehicles\Infrastructure\Eloquent;

use App\Models\Vehicles\Vehicle;
use Housfy\MarsRoverMission\Vehicles\Domain\Vehicle as DomainVehicle;
use Housfy\MarsRoverMission\Vehicles\Domain\VehicleRepository as DomainVehicleRepository;

final class VehicleRepository implements DomainVehicleRepository
{
    private $model;

    public function __construct(Vehicle $vehicleModel)
    {
        $this->model = $vehicleModel;
    }


    public function save(DomainVehicle $vehicle)
    {
        $this->model->uuid        = $vehicle->uuid();
        $this->model->team_id     = !empty($vehicle->team()) ? $vehicle->team()->id() : '';
        $this->model->name        = $vehicle->name();
        $this->model->coordinates = implode(',', $vehicle->coordinates());
        $this->model->moves       = !empty($vehicle->moves()) ? implode(',', $vehicle->moves()) : '';
        $this->model->commands    = implode(',', $vehicle->commands());

        $this->model->save();
    }
}

