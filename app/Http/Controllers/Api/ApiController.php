<?php
namespace App\Http\Controllers\Api;

use GuzzleHttp\Psr7\Request;
use Illuminate\Routing\Controller as BaseController;

class ApiController extends BaseController
{

    public function __invoke()
    {
        echo 'apitest';
    }
}

