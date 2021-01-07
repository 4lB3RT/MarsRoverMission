<?php
namespace Housfy\Tests\Explorers\Domain;

use Faker\Factory;
use Housfy\MarsRoverMission\Explorers\Domain\Explorer as DomainExplorer;

final class Explorer
{
    public static function create(String $id, String $name) :DomainExplorer
    {
        return new DomainExplorer($id, $name);
    }

    public static function random() :DomainExplorer
    {
        $fake = Factory::create();
        return self::create($fake->unique()->uuid, $fake->unique()->word);
    }
}

