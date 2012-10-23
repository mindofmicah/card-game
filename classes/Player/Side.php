<?php
class Player_Side extends Player
{

	public function __construct(){}

	public function toDisplay()
	{
		$ret = '';
		$p_lines = array();
		foreach ($this->cards as $c_index => $card) {
			$lines = $card->toDisplayLines(Card::IS_HORIZONTAL);
			if($c_index != 0 ) {
				array_shift($lines);
			}
			$ret.= implode("\n", $lines) . "\n";
//			print_r($lines);
		}
		return $ret;
	}
}
