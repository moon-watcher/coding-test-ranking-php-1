<?php

namespace App\Controller\Quality;


use App\Classes\Base\ListsBaseController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class ListsController extends ListsBaseController
{
    public function listAdByUserV1 ( Request $request )
    {
        $userId = $request->get("userId");
        dd($userId);
        
        return new Response ( "Woohoo, el endpoint del user " );
    }
    

    public function listAdsForManagerV1()
    {
        return new Response ( "Hey! soy el endpoint del Manager" );
    }
}