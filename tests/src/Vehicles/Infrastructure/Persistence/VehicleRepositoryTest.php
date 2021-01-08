<?php
namespace Housfy\Tests\Vehicles\Infrastructure\Persistence;

use App\Models\Vehicles\Vehicle;
use Housfy\MarsRoverMission\Vehicles\Infrastructure\Eloquent\VehicleRepository;
use Housfy\Tests\Vehicles\Domain\Vehicle as TestVehicle;
use Tests\TestCase;

class VehicleRepositoryTest extends TestCase
{
    private function repository()
    {
        return new VehicleRepository(new Vehicle());
    }

    /** @test */
    public function it_should_save_vehicle()
    {
        $vehicle = TestVehicle::random();
        $this->repository()->save($vehicle);
    }

    /** @test */
    public function it_should_find_vehicle()
    {
        $this->repository()->find(1);
    }
}

