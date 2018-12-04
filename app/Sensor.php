<?php

namespace App;

use App\Interfaces\TempMeasureInterface;
use App\Interfaces\ObservableInterface;
use App\Interfaces\ObserverInterface;

class Sensor implements ObservableInterface, TempMeasureInterface
{
    protected $observers = [];
    protected $temperature;

    public function add(ObserverInterface $observer)
    {
        $this->observers[] = $observer;
    }


    public function remove(ObserverInterface $observer)
    {
        unset( $this->observers[ array_search($observer, $this->observers) ] );
    }


    public function notify()
    {
        foreach( $this->observers as $observer ) {
            $observer->update();
        }
    }


    public function setTempreature(float $temp)
    {
        $this->temperature = $temp;
    }


    public function getTempreature()
    {
        return $this->temperature;
    }
}
