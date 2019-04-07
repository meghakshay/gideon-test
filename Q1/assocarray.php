<?php
$arr=array("xyz"=>"XYZ","abc"=>"ABC","pqr"=>"PQR");

//add item
//sort array
echo "sort array";
echo "</br>";
asort($arr);
foreach($arr as $key=>$value){
echo $key."=".$value."</br>";
}
//search in array
echo "---------------------------------"."</br>";
echo "search in array";
echo "</br>";
echo array_search("ABC",$arr);
echo "</br>";
//The array_search() function search an array for a value and returns the key.

//array to json convertion
echo "---------------------------------"."</br>";
echo "array to json convertion";
echo "</br>";
$arr_json= json_encode($arr);
echo $arr_json;
echo "</br>";
//json to array convertion
echo "---------------------------------"."</br>";
echo "json to array convertion";
echo "</br>";
$json_arr= json_decode($arr_json);
print_r($json_arr);
echo "</br>";

//add element to array
echo "---------------------------------"."</br>";
echo "add element to array";
echo "</br>";
$arr['mnl']="MNL";
print_r($arr);

//delete element to array
echo "</br>";
echo "---------------------------------"."</br>";
echo "add delete to array";
echo "</br>";
unset($arr['mnl']);
print_r($arr);
?>