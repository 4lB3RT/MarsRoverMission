<?php
namespace App\Http\Controllers\Api\Explorers;

use App\Models\Explorers\Explorer;
use Faker\Factory;
use Housfy\MarsRoverMission\Explorers\Application\Create\CreateExplorer;
use Housfy\MarsRoverMission\Explorers\Infrastructure\Eloquent\ExplorerRepository;
use Illuminate\Routing\Controller as BaseController;

class CreateExplorerController extends BaseController
{
    public function create()
    {
        $fake       = Factory::create();
        $uuid       = $fake->unique()->uuid;
        $service    = new CreateExplorer(new ExplorerRepository(new Explorer()));
        $service->create($uuid, 'Explorer 1');
    }
}

