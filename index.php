<?php
function getClicks ($url) {
	global $clicks;
    global $num;
	$token = file_get_contents($url);
	
	//set start and end point
	$start ='h5';
	$end ='클릭';

	//extract clicks count
	$startpos = strpos($token, $start) + 38;
	$endpos = strpos($token, $end) - 89;
	$num = substr($token, $startpos, $endpos - $startpos);
    $clicks = $clicks + (int)$num;
}

$clicks = 0;
$isParameter = 0;
$makeUrl = "
alert(\"저장되었습니다.\");
window.open('./makeUrl.php','url Maker','width=600,height=600,top=100,left=100');";

if(isset($_GET['url']) && !empty($_GET['url'])){
    $url = $_GET['url'];
	getClicks($url);
	$isParameter = 1;
}

if(isset($_GET['url2']) && !empty($_GET['url2'])){
    $url2 = $_GET['url2'];
	getClicks($url2);
	$isParameter = 1;
}

if(isset($_GET['url3']) && !empty($_GET['url3'])){
    $url3 = $_GET['url3'];
	getClicks($url3);
	$isParameter = 1;
}

//echo
if($isParameter==0){
	header('Content-Type: application/javascript');
	echo $makeUrl;
} else {
	header('Content-type: image/svg+xml');
	echo '<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" style="display: inline;"><text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" font-size="3em">',$clicks,'</text></svg>';
}
?>