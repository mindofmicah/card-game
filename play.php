<?php
require 'autoload.php';

$game = new Game();
$deck = new Deck();


$game->setDeck($deck);

$numPlayers = 4;
while ($numPlayers-- > 0) {
	$game->addPlayer();
}

$numCards = 5;
while ($numCards-- > 0) {
	$card = $deck->deal();
	
	$game->getCurrentPlayer()->receiveCard($card);
}

shell_exec('reset');
echo $game->getCurrentPlayer()->toDisplay() . "\n";
echo "\n";

