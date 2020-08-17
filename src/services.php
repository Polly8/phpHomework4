<?php


class driverService implements iService {

	public $priceOnce = 100;

	public function getPrice() {

		return $this->priceOnce;
	}
}


class gpsService implements iService {

	public $hourPrice = 15;
	public $priceForMin;
	public $resultPrice;

	public function __construct($minutes) {

		$this->minutePrice = $this->hourPrice / 60;
		$this->resultPrice = ($this->priceForMin * ceil(round($minutes / 60) * 60)) + $this->hourPrice;
	}


	public function getPrice() {

		return $this->resultPrice;
	}
}