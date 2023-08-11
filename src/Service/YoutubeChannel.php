<?php

namespace TutorialObserver\Service;

/**
 * 
 */
class YoutubeChannel implements Observable
{

    private array $observers = [];

    public function attach(Observer $observer) {
        $this->observers[] = $observer;
    }

    public function detach(Observer $observer) {

    }

    public function notify() {
        /** @var Observer $observer */
        foreach($this->observers as $observer) {
            $observer->doSomething();
        }

    }

}