<?php


abstract class Rate implements iRate {

	public $km;
	public $minutes;
	public $kmPrice;
	public $minutePrice;
	private $services = [];


	public function count() {
		$result = ($this->km * $this->kmPrice) + ($this->minutes * $this->minutePrice);

		foreach($this->services as $value) {

			$result += $value->getPrice();
		}

		echo $result;
	}

	public function addService($service) {

		if($service instanceof iService) {

			$this->services[] = $service;
		}
	}
}