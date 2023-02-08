<?php

namespace App\Taxes;

class Detector {

    protected $seuil;

    public function __construct(int $seuil)
    {
        $this->seuil = $seuil;
    }

    public function detect(float $prix) : bool {
        return $prix > $this->seuil ? true : false;
    }
}