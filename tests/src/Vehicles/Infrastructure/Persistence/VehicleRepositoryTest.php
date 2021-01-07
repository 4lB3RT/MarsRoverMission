<?php
namespace Housfy\Tests\Vehicles\Infrastructure\Persistence;

use App\Models\Vehicles\Vehicle;
use Housfy\MarsRoverMission\Vehicles\Infrastructure\Eloquent\VehicleRepository;
use Housfy\Tests\Vehicles\Domain\Vehicle as TestVehicle;
use PHPUnit\Framework\TestCase;

class VehicleRepositoryTest extends TestCase
{
    private function repository()
    {
        return new VehicleRepository(new Vehicle());
    }

    /** @test */
    public function itShouldSaveVehicle()
    {
        parent::setUp();

        $vehicle = TestVehicle::random();
        $this->repository()->save($vehicle);
    }
}

