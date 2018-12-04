<?php

namespace App;

use App\Interfaces\ObservableInterface;
use App\Interfaces\ObserverInterface;

class SmartPhone implements ObserverInterface
{
    protected $observable;

    public function __construct( ObservableInterface $observable )
    {
        $this->observable = $observable;
    }


    public function update()
    {
        echo $this->observable->getTempreature();
    }
}
