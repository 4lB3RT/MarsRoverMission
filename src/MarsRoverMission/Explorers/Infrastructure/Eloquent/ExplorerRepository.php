<?php
namespace Housfy\MarsRoverMission\Explorers\Infrastructure\Eloquent;

use Housfy\MarsRoverMission\Explorers\Domain\Explorer;
use Housfy\MarsRoverMission\Explorers\Domain\ExplorerRepository as DomainExplorerRepository;
use Housfy\MarsRoverMission\Shared\Infrastructure\Eloquent\EloquentRepository;

class ExplorerRepository extends EloquentRepository implements DomainExplorerRepository
{
    public function save(Explorer $explorer) 
    {
        $this->model->uuid    = $explorer->uuid();
        $this->model->team_id = $explorer->team();
        $this->model->name    = $explorer->name();

        $this->model->save();
    }
}

