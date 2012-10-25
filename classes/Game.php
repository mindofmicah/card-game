<?php
class Game
{
	protected $deck,
			  $currentPlayerIndex = 0,
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
		return $this->players[$this->currentPlayerIndex];
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
			$player = new Player_Side();		
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


	public function display()
	{
		$spaces = '        ';
		$ret = '';
		$middle = 5;
		$board_title = 'Micah\'s Cards';
		if (!empty($this->players[2])) {
			foreach (explode("\n", $this->players[2]->toDisplay()) as $line) {
				$ret.= $spaces . $line . "\n";
			}			
		}
		$numSpaces = 3 * $this->players[0]->getNumCards() + 1 + 5;


		if (!empty($this->players[1])) {
			$middle = $this->players[1]->getNumCards();
			$lines = explode("\n", $this->players[1]->toDisplay());
			$otherLines = explode("\n", $this->players[3]->toDisplay());
			foreach ($lines as $index=>$line) {
				if ($index != $middle) {

		
			$ret.= $line . str_repeat(' ', $numSpaces) . $otherLines[$index]."\n";}
else{


		$ret.= $line . str_pad(str_repeat(' ', floor((($numSpaces) - strlen($board_title)) / 2)) .$board_title,$numSpaces,' ', STR_PAD_RIGHT) . $otherLines[$index]	."\n";
//			$ret.= $line .'      Micah\'s Cards       ' . $otherLines[$index]."\n";}
		}	}
		}

		foreach (explode("\n", $this->players[0]->toDisplay()) as $line) {
			$ret.= $spaces. $line . "\n";
		}
		return $ret;
	}
	public function nextPlayer()
	{
		$this->currentPlayerIndex++;
		if (!array_key_exists($this->currentPlayerIndex, $this->players)) {
			$this->currentPlayerIndex = 0;
		}
//		$this->currentPlayerIndex++;
		//if () {
		
		//}
	}
}
