<?php
namespace App\Models\Vehicles;

use App\Models\Shared\MainModel;

final class Vehicle extends MainModel
{


    protected $fillable = ['uuid'];
    protected $table    = 'vehicles';
}

