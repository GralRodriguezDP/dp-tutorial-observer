<?php

require './vendor/autoload.php';

use TutorialObserver\Service\Subscriber;
use TutorialObserver\Service\YoutubeChannel;

$colabOne = new Subscriber("Humberto Castillo");
$colabOne->setRegistered(new \DateTime());
$colabTwo = new Subscriber("Lizeth Hernandez");
$colabTwo->setRegistered(new \DateTime());
$colabThree = new Subscriber("Marcos Ortega");
$colabThree->setRegistered(new \DateTime());
$colabFour = new Subscriber("Jesus Pozos");
$colabFour->setRegistered(new \DateTime());
$colabFive = new Subscriber("Giovanni Rodriguez");
$colabFive->setRegistered(new \DateTime());


$channel = new YoutubeChannel();
$channel->attach($colabOne);
$channel->attach($colabTwo);
$channel->attach($colabThree);
$channel->attach($colabFour);
$channel->attach($colabFive);

$channel->notify();