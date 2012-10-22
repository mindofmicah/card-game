<?php
class Card
{
	protected $rank, $suit, $label;
	static protected $replacements = array(
		1=>'A',
		11=>'J',
		12=>'Q',
		13=>'K'
	);

	public function __construct($rank, $suit)
	{
		if (array_key_exists($rank, self::$replacements)) {
			$this->label = self::$replacements[$rank];
		} else {
			$this->label = $rank;
		}

		$this->rank = $rank;
		$this->suit = $suit;
	}

}
