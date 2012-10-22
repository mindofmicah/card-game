<?php
require 'autoload.php';

$deck   = new Deck();
$player = new Player();

$numCards = 5;
while ($numCards-- > 0) {
	$card = $deck->deal();
	$player->receiveCard($card);
}

echo $player->toDisplay() . "\n";



echo 'We are going to play a game';
echo "\n";

