<?php
namespace Housfy\Tests\Vehicles\Application;

use Housfy\Tests\Vehicles\Domain\Vehicle;
use PHPUnit\Framework\TestCase;

class CreateVehicleTest extends TestCase
{

     /** @test */
     public function CreateVehicle()
     {
         Vehicle::random();
     }
}

