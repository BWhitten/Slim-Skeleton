<?php

namespace App\Plugins\Chickens;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class ChickenController
{
    protected $type;

    public function __construct($type)
    {
        $this->type = $type;
    }

    public function getChicken(Request $request, Response $response, $args)
    {
        return $response->withJson(array('chicken' => $this->type));
    }
}
