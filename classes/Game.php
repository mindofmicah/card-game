<?php
class Game
{
	protected $deck, 
	          $players = array();
	
	/**
	 * Add a new \Deck to the \Game
	 *
	 * @param $deck Deck The new deck of cards to add
	 *
	 * @return \Game
	 */
	public function setDeck(Deck $deck) 
	{
		$this->deck = $deck;
		return $this;
	}	
	
	// TODO convert this from being a placeholder method
	public function getCurrentPlayer()
	{
		return $this->players[0];
	}
	
	/**
	 * Create a new \Player for the game
 	 *
 	 * @return \Game
 	 */
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
		return $this;
	}
}
