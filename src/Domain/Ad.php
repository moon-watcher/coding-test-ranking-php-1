<?php

declare(strict_types=1);


namespace App\Domain;


use DateTimeImmutable;
use App\Classes\QualityQuantifier;


final class Ad
{
    public function __construct(
        private int $id,
        private String $typology,
        private String $description,
        private array $pictures, // App\Domain\Picture  // estaría bien implementar un iterador
        private int $houseSize,
        private ?int $gardenSize = null,
        private ?int $score = null,
        private ?DateTimeImmutable $irrelevantSince = null,
    ) {
        //
    }
    
    
    public function quantify ( )
    {
        return QualityQuantifier::Quantify ( $this );
    }
    
    
    //
    // Aunque esto no sea buena idea porque ignora los private 
    // me gusta dejarlo aquí para demostrar que se puede usar
    //
    function __get ( $name )
    {
        return $this->$name;
    }
    
    
    function getTypology ( )
    {
        return $this->typology;
    }
}
