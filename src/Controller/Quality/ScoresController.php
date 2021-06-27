<?php

namespace App\Controller\Quality;


use App\Classes\Base\ScoresBaseController;
use Symfony\Component\HttpFoundation\Response;


class ScoresController extends ScoresBaseController
{
    public function showScoresV1 ( )
    {        
        return new Response ( "hola, soy el tío Scores :)" );
    }
}