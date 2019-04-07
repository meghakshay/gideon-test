<?php
class Trade_ac{
	public $model;
	function display(){
	    echo $this->model;
	}

	function __construct($model){
		$this->model=$model;
	}
}

//$alok = new Trade_ac('LG');
//$alok->display();

class Smart_ac extends Trade_ac{
	public $timer;
	function display_2(){
		return $this->timer;
	}
	
	function __construct($model,$timer){
		Parent::__construct($model);
		$this->timer=$timer;
		echo $this->display();

	}
}
$ram = new Smart_ac('sony','withtimer');
echo $ram->display_2();
//echo $ram->display_2("yuyuy");
	