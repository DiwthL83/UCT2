<?php

class Temperature{
	public $temp_input;

	public function __construct($temp_input){
		$this -> temp_input = $temp_input;
	}

	public function celciusToFahrenheit(){
		return $this->temp_input*1.8+32;
	}

	public function fahrenheitToCelcius(){
		return ($this->temp_input-32)/1.8;
	}
}




class Distance{
	public $dist_input;

	public function __construct($dist_input){
		$this -> dist_input = $dist_input;
	}

	public function milesToKilometers(){
		return $this->dist_input * 1.609344;
	}

	public function kilometersToMiles(){
		return $this->dist_input / 1.609344;
	}
}


class Weight{
	public $weight_input;

	public function __construct($weight_input){
		return $this->weight_input = $weight_input;
	}

	public function stonesToPounds(){
		return $this->weight_input * 14;
	}

	public function stonesToKilograms(){
		return $this->weight_input * 6.35029318;
	}

	public function poundsToStones(){
		return $this->weight_input / 14;
	}

	public function poundsToKilograms(){
		return $this->weight_input * 0.45359237;
	}

	public function kilogramsToPounds(){
		return $this->weight_input / 0.45359237;
	}

	public function kilogramsToStones(){
		return $this->weight_input / 6.35029318;
	}
}




?>