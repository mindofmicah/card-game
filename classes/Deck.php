<?php
class Deck 
{
	protected $cards = array(), $pointer;
	public function __construct()
	{
		foreach (array('♥ ','♣','♦','♠') as $suit) {
			for ($i = 1; $i <= 13; $i++) {
				$this->cards[] = new Card($i, $suit);
			}
		}
		$this->pointer = 0;
	}

	public function deal()
	{
		return $this->cards[$this->pointer++];
	}
}
