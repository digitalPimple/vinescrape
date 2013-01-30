<html><head>
<title>Vinescrape</title>
</head>
<body>

<?php
	$curl_handle=curl_init();
	curl_setopt($curl_handle,CURLOPT_URL,'https://twitter.com/search?q=%23' . $_GET['search'] . '%20vine.co');
	curl_setopt($curl_handle,CURLOPT_CONNECTTIMEOUT,2);
	curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,1);
	$junk = curl_exec($curl_handle);
	curl_close($curl_handle);
	foreach(preg_split("/[\s,]+/", $junk) as $substring) {
		if (strpos($substring, "https://vine.co/v")) {
		$subsubstring = split("/", $substring);
		echo '<iframe src="https://vine.co/v/' . $subsubstring[4] . '/card" height="435" width="435"></iframe>';
		}
	}		
?>

</body>
</html>