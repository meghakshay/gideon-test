<?php
$handle=fopen('input.txt',"r");
$str=array();
$query=array();
$flag=0;
while(!feof($handle)){
$data=fgets($handle);
	if((integer)$data==true){
        $flag++;		
	}
	else{
		if($flag==1){
			array_push($str,$data);
		}
		if($flag==2){
			array_push($query,$data);
		}
	}

}
echo "<pre>";
//print_r($str);
//print_r($query);
fclose($handle);
function myfunc($str, $query){
	$result=array();
	for($i=0;$i<count($query);$i++){
		$result[$i]=0;
		for($j=0;$j<count($str);$j++){
			if($query[$i]==$str[$j]){
				$result[$i]++;
			}
		}
	}
return $result;
}
$data=myfunc($str,$query);
print_r($data);

?>