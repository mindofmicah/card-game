<?php
class Player
{
	protected $cards = array();
	public function __construct(){}

	public function receiveCard(Card $card)
	{
		$this->cards[] = $card;
	}
}
