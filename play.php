<?php
require 'autoload.php';

$game = new Game();
$deck = new Deck();


$game->setDeck($deck);

$numPlayers = 4;
while ($numPlayers-- > 0) {
	$player = new Player();
	$game->addPlayer($player);
}

$numCards = 5;
while ($numCards-- > 0) {
	$card = $deck->deal();
	$player->receiveCard($card);
}

echo $player->toDisplay() . "\n";
echo "\n";

