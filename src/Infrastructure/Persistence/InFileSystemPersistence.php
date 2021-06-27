<?php

declare(strict_types=1);

namespace App\Infrastructure\Persistence;


final class InFileSystemPersistence
{
    const ADS = [
        [ 1, 'CHALET', 'Este piso es una ganga, compra, compra, COMPRA!!!!!', [], 300, null, null, null ],
        [ 2, 'FLAT', 'Nuevo ático céntrico recién reformado. No deje pasar la oportunidad y adquiera este ático de lujo', [4], 300, null, null, null ],
        [ 3, 'CHALET', '', [2], 300, null, null, null ],
        [ 4, 'FLAT', 'Ático céntrico muy luminoso y recién reformado, parece nuevo', [5], 300, null, null, null ],
        [ 5, 'FLAT', 'Pisazo,', [3, 8], 300, null, null, null ],
        [ 6, 'GARAGE', '', [6], 300, null, null, null ],
        [ 7, 'GARAGE', 'Garaje en el centro de Albacete', [], 300, null, null, null ],
        [ 8, 'CHALET', 'Maravilloso chalet situado en lAs afueras de un pequeño pueblo rural. El entorno es espectacular, las vistas magníficas. ¡Cómprelo ahora!', [1, 7], 300, null, null, null ],
    ];
        
    const PICTURES = [
        [ 1, 'https://www.idealista.com/pictures/1', 'SD' ],
        [ 2, 'https://www.idealista.com/pictures/2', 'HD' ],
        [ 3, 'https://www.idealista.com/pictures/3', 'SD' ],
        [ 4, 'https://www.idealista.com/pictures/4', 'HD' ],
        [ 5, 'https://www.idealista.com/pictures/5', 'SD' ],
        [ 6, 'https://www.idealista.com/pictures/6', 'SD' ],
        [ 7, 'https://www.idealista.com/pictures/7', 'SD' ],
        [ 8, 'https://www.idealista.com/pictures/8', 'HD' ],
    ];
    
    
    public function getAds ( )
    {
        return self::ADS;
    }
    
    
    public function getPictures ( )
    {
        return self::PICTURES;
    }
}
