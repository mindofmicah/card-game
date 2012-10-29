<?php
class Hand_Ranked{
    static public function factory(array $cards = array()) {
        $histogram = self::toHistogram($cards);
    }   
    
    static public function toHistogram(array $cards = array())
    {
		$ret = array();
		foreach ($cards as $card) {
			$rank = $card->getRank();
			if(array_key_exists($rank, $ret)) {
				$ret[$rank]++;
			} else {
				$ret[$rank] = 1;
			}
		}
		return $ret;
    }   
}   
                                                                                                            
                
