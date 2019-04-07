<?php
//API URL
$url='https://restcountries.eu/rest/v2/all';

//create a new CURL resource

$ch=curl_init();

curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);


$result=curl_exec($ch);
$data=json_decode($result);
echo "<pre>";
print_r($data);

//close CURL resource
curl_close($ch);
?>
<!doctype htlm>
<html>
	<head>
		<title>DropDown</title>
	</head>
	<body>
	<h1>DropDown of country name with API</h1>
		<select>
		<?php foreach($data as $data){?>
			<option value="<?php echo $data->area;?>"><?php echo $data->name;?></option>
		<?php }?>
		</select>
	</body>
</html>



