<?php
$str = file_get_contents("codebeautify.json");
$arr = json_decode($str,true);
//echo "<pre>";
//print_r($arr);
?>
<!doctype htlm>
<html>
	<head>
		<title>slider</title>
		<link rel="stylesheet" type="text/css" href="owl.carousel.min.css">
		<link rel="stylesheet" type="text/css" href="owl.theme.default.min.css">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
	<h1></h1>
	<div class="wrapper">
		<div class="owl-carousel owl-theme">
<?php foreach($arr as $key=>$value){?>
			<div class="item"><img src="<?php echo $value['image'];?>"></div>
<?php }?>
		</div>
	</div>
<script src="jquery.min.js"></script>
<script src="owl.carousel.min.js"></script>
<script src="jquery.js"></script>
</body>
</html>