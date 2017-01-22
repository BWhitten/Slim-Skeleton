<?php

namespace App\Plugins\Chickens;

class CantLoad
{
    public function __construct()
    {
    }

    public function loadTest()
    {
        return 'In situ';
    }
}
