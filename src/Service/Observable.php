<?php

declare(strict_types=1);

namespace TutorialObserver\Service;

interface Observable {

    public function attach(Observer $observer);

    public function detach(Observer $observer);

    public function notify();
    
}