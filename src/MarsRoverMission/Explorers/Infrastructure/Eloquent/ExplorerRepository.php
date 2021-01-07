<?php
namespace Housfy\MarsRoverMission\Explorers\Infrastructure\Eloquent;

use App\Models\Explorers\Explorer;
use Housfy\MarsRoverMission\Explorers\Domain\ExplorerRepository as DomainExplorerRepository;

class ExplorerRepository implements DomainExplorerRepository
{
    private $model;

    public function __construct(Explorer $explorer)
    {
        $this->model = $explorer;
    }

    public function save()
    {
    }
}

