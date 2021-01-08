<?php
namespace App\Models\Planets;

use App\Models\Shared\MainModel;
use App\Models\Vehicles\Vehicle;

final class Planet extends MainModel
{

    protected $table = 'planets';

    public function vehicles()
    {
        return $this->hasMany(Vehicle::class);
    }
}

