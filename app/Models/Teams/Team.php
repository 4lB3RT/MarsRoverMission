<?php
namespace App\Models\Teams;

use App\Models\Explorers\Explorer;
use App\Models\Shared\MainModel;
use App\Models\Vehicles\Vehicle;

final class Team extends MainModel
{
    protected $table = 'teams';

    public function explorers()
    {
        return $this->hasMany(Explorer::class);
    }

    public function vehicles()
    {
        return $this->hasMany(Vehicle::class);
    }
}

