<?php
namespace App\Models\Vehicles;

use App\Models\Planets\Planet;
use App\Models\Shared\MainModel;
use App\Models\Teams\Team;

final class Vehicle extends MainModel
{


    protected $fillable = ['uuid'];
    protected $table    = 'vehicles';


    public function planet()
    {
        return $this->hasOne(Planet::class);
    }

    public function team()
    {
        return $this->hasOne(Team::class);
    }

}

