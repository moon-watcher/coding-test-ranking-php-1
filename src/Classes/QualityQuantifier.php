<?php

namespace App\Classes;

//use App\Interfaces\Base\ListsBaseInterface;
use App\Domain\Ad;

class QualityQuantifier
{
    const TYPOLOGIES = [
        'CHALET' => 'QuantifyChalet',
        'GARAGE' => 'QuantifyGarge',
        'FLAT'   => 'QuantifyFlat',
    ];   
    
    public static function Quantify ( Ad $ad ): int
    {
        $return   = 0;
        $function = self::TYPOLOGIES [ $ad->typology ] ?? false;
        echo($function);
        if ( $function )
        {
            $return = self::$function ( $ad );
        }
        
        echo ($return);
        
        return $return;
    }
    
    public static function QuantifyChalet ( Ad $ad ): int
    {
        return 1;
    }
    
    public static function QuantifyGarge ( Ad $ad ): int
    {
        return 2;
    }
    
    public static function QuantifyFlat ( Ad $ad ): int
    {
        return 3;
    }
}