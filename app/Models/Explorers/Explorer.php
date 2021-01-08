<?php
namespace App\Models\Explorers;

use App\Models\Shared\MainModel;
use Housfy\MarsRoverMission\Teams\Domain\Team;

final class Explorer extends MainModel
{

    protected $table = 'explorers';

    public function team()
    {
        return $this->hasOne(Team::class);  
    }
}

