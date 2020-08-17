<?php


class basicRate extends Rate {

	public $kmPrice = 10;
	public $minutePrice = 3;
	public $km;
	public $minutes;

	public function __construct($km, $minutes) {

		$this->km = $km;
		$this->minutes = $minutes;
	}
}



class hourRate extends Rate {

	public $kmPrice = 0;
	public $minutePrice = 200 / 60;


	public function __construct($km, $minutes) {

		$this->km = $km;
		$this->minutes = ceil(round($minutes / 60) * 60);
	}
}



class studentRate extends Rate {

	public $kmPrice = 4;
	public $minutePrice = 1;

	public function __construct($km, $minutes) {

		$this->km = $km;
		$this->minutes = $minutes;
	}
}
