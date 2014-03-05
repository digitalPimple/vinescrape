<html>
<head>
<title>Quick and Dirty Vine Video Search and Scraper - Ver.1.1 dP</title>
</head>
<body>
<p>Github - <a href="https://github.com/digitalPimple/vinescrape" title="Vine Scrapper Github Link" target="new">https://github.com/digitalPimple/vinescrape</a></p><br>

<?php
	$repeater=""; //Varible created to check for doubles on output.
	
	$curl_handle=curl_init();
	curl_setopt($curl_handle,CURLOPT_URL,'https://twitter.com/search?q=%23' . $_GET['search'] . '%20vine.co');
	curl_setopt($curl_handle,CURLOPT_CONNECTTIMEOUT,3);
	curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,1);
	$junk = curl_exec($curl_handle);
	curl_close($curl_handle);
	
	foreach(preg_split("/[\s,]+/", $junk) as $substring) {
		if (strpos($substring, "https://vine.co/v")) {
		$subsubstring = split("/", $substring);
		$vine009 =$subsubstring[4];
		$text1009 = rtrim($vine009, '"'); //removes ending "#" in each returned link.
		
			if ($text1009 != $repeater) {
			  echo '<p><iframe class="vine-embed" src="https://vine.co/v/'. $text1009. '/embed/postcard" height="600" width="600" frameborder="0"></iframe>
			  <script async src="//platform.vine.co/static/scripts/embed.js" charset="utf-8"></script></p>';
				
			}
		$repeater=$text1009; // as each vine link is posted it updates the $repeated variable.
		
		}
	}		
?>
</body>
</html>
