<?php
namespace Housfy\MarsRoverMission\Explorers\Application\Create;

use Housfy\MarsRoverMission\Explorers\Domain\Explorer;
use Housfy\MarsRoverMission\Explorers\Domain\ExplorerRepository;

final class CreateExplorer
{
    private $repository;

    public function __construct(ExplorerRepository $explorerRepository)
    {
        $this->repository = $explorerRepository;
    }

    public function create(string $uuid, string $name)
    {
        $explorer = new Explorer($uuid, $name);
        $this->repository->save($explorer);
    }
}

