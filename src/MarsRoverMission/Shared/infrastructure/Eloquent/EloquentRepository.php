<?php
namespace Housfy\MarsRoverMission\Shared\Infrastructure\Eloquent;

class EloquentRepository
{
    protected $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function find(int $id)
    {
        return $this->model->find($id);
    }

}

