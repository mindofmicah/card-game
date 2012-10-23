<?php
class Card
{
	protected $rank, $suit, $label;
	const IS_VERTICAL = 1;
	const IS_HORIZONTAL = 2;
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

	public function __toString()
	{
		return $this->label . strtoupper($this->suit[0]);
	}
	
	public function toDisplayLines($param = self::IS_VERTICAL)
	{
		if ($param & self::IS_VERTICAL) {
			return array(
				'+--+',
				'|' . str_pad(' ', 2, $this->label) . '|',
				'|' . str_pad(' ', 2,strtoupper($this->suit[0])) . '|',
				'+--+'
			);
		} elseif ($param & self::IS_HORIZONTAL) {
			return array(
				'+----+',
				'|' . str_pad(' ', 2, $this->label) . ' '. strtoupper($this->suit[0]).'|',
				'+----+'
			);
			/*
			----+
			10 S|
			----+
			*/
			return array(
				'going to implement a horizontal view'
			);
		} else {
			return array();
		}
	}
}
