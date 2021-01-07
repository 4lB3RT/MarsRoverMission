<?php
namespace Housfy\Tests\Explorers\Application;

use Housfy\Tests\Explorers\Domain\Explorer;
use PHPUnit\Framework\TestCase;

final class CreateExplorerTest extends TestCase
{

    /** @test */
    public function CreateExplorer()
    {
        Explorer::random();
    }
}

