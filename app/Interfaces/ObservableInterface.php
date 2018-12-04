<?php

namespace App\Interfaces;

use App\Interfaces\ObserverInterface;

interface ObservableInterface
{
    public function add(ObserverInterface $observer);
    public function remove(ObserverInterface $observer);
    public function notify();
}
