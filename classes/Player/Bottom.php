<?php
class Player_Bottom extends Player
{
	public function __construct(){}


	public function toDisplay()
	{
		$ret = '';
		$p_lines = array();
		foreach ($this->cards as $c_index => $card) {
			$lines = $card->toDisplayLines();
			foreach ($lines as $index => $line) {
				if (!array_key_exists($index, $p_lines)) {
					$p_lines[$index] = '';
				}
				
				if($c_index > 0) {
					$line = substr($line, 1);
				}
				$p_lines[$index] .= $line;
			}
		}
		return implode("\n", $p_lines);
	}
}
