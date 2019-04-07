<?php
class abc{
	public function show(){
		echo "HI";
	}
}
class xyz extends abc {
	public function show(){
		parent::show();
		echo " everyone";
	}
}

$obj=new xyz;
$obj->show();
echo "</br>";	
class test{
	public function show($a){
		echo "HI ".$a."</br>";
	}
}
class demo extends test {
	public function show($a,$b){
		parent::show($a);
		echo "Good"." ".$b;
	}
}

$obj1=new demo;
$obj1->show('everyone','morning');


?>