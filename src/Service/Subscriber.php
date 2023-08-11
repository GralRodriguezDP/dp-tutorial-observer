<?php

namespace TutorialObserver\Service;

use \DateTime;

class Subscriber implements Observer {

    private string $fullname;

    private DateTime $registered;

    public function __construct(string $fullname) {
        $this->fullname = $fullname;
    }

    /**
     * Get the value of registered
     */ 
    public function getRegistered()
    {
        return $this->registered;
    }

    /**
     * Set the value of registered
     *
     * @return  self
     */ 
    public function setRegistered($registered)
    {
        $this->registered = $registered;

        return $this;
    }

    /**
     * Get the value of fullname
     */ 
    public function getFullname()
    {
        return $this->fullname;
    }

    /**
     * Set the value of fullname
     *
     * @return  self
     */ 
    public function setFullname($fullname)
    {
        $this->fullname = $fullname;

        return $this;
    }

    public function doSomething()
    {
        print_r( $this->getFullname() . " says hello!\n");
    }
}