<!DOCTYPE html>
<html>
<head>
	<title>Service Client</title>
</head>
<body>
<h4> Hasil Service</h4>
<?php
	// echo $data;
	if(is_array($data)){
		echo "Yes";
	}
	else{
		echo "No";
	}
	foreach ($data as $key ) {
		// echo $key['namausaha']."<br>";
		echo $key['skorcoliform']."<br>";
	}
?>
<hr>
<?php
	echo '<h2>Response</h2>';
	echo '<pre>' . htmlspecialchars($respon, ENT_QUOTES) . '</pre>';
?>
</body>
</html>