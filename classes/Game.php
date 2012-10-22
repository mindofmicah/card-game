<?php
class Game
{
	protected $deck, $players = array();
	public function setDeck(Deck $deck) 
	{
		$this->deck = $deck;
		return $this;
	}	
	public function getCurrentPlayer(){return $this->players[0];}
	public function addPlayer()
	{
		switch (count($this->players)) {
			case 0:
			$player = new Player_Bottom();
			break;
			case 1:
			case 3:
			$player = new Player_Bottom();		
			break;
			case 2:
			$player = new Player_Top();
			break;
			default:
			throw new Exception('Too many players');
		}
		$this->players[] = $player;
	}
}
