<?php
class Game
{
	protected $deck, $players = array();
	public function setDeck(Deck $deck) 
	{
		$this->deck = $deck;
		return $this;
	}	
	public function addPlayer(Player $player)
	{
		$this->players[] = $player;
	}
}
