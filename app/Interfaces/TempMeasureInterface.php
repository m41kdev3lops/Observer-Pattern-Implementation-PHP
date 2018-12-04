<?php

namespace App\Interfaces;

interface TempMeasureInterface
{
    public function getTempreature();
    public function setTempreature( float $temp );
}
