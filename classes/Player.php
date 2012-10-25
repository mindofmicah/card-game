<?php
abstract class Player
{
	protected $cards = array();
	public function __construct(){}

	public function getNumCards(){return count($this->cards);}

	/**
	 * Assign a new card to the hand of a \Player
	 *
	 * @param $card Card the new card to add to the \Player's hand
	 *
	 * @return \Player
	 */
	public function receiveCard(Card $card)
	{
		$this->cards[] = $card;
		return $this;
	}

	abstract public function toDisplay();
}
